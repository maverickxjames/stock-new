<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ValidateLtpc implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $marketData;


    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($marketData)
    {
        $this->marketData = $marketData;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(): void
    {
        $datas = $this->marketData['feeds'];
        foreach ($datas as $instrumentKey => $data) {
           
          $ltp = $data['ltpc']['ltp'] ?? null;
          $cp = $data['ltpc']['cp'] ?? null;

        if (is_array($ltp)) {
            Log::error("Unexpected array in LTP", ['instrumentKey' => $instrumentKey, 'ltp' => json_encode($ltp)]);
            continue; // Skip this entry
        }

// Convert LTP to float
        $ltp = (float) $ltp;
        $cp = (float) $cp;


        // fetch trade table if there is any stop_loss limit price or target price 

        $trade = DB::table('trades')
            ->where('instrumentKey', $instrumentKey)
            ->where(function ($query) use ($ltp) {
                $query->where('stop_loss', '!=', null)
                    ->orWhere('target_price', '!=', null)
                    ->orWhere('order_type','limit');
            })
            ->first();

            Log::info("Trade data fetched", ['instrumentKey' => $instrumentKey, 'trade' => $trade]);

            if ($trade) {
                $shouldExecute = false;
                $executionType = null;
            
                if ($trade->stop_loss && $ltp <= $trade->stop_loss) {
                    $shouldExecute = true;
                    $executionType = 'Stop Loss Hit';
                } elseif ($trade->target_price && $ltp >= $trade->target_price) {
                    $shouldExecute = true;
                    $executionType = 'Target Price Hit';
                } elseif ($trade->order_type === 'limit' && $ltp <= $trade->limit_price) {
                    $shouldExecute = true;
                    $executionType = 'Limit Order Executed';
                    Log::info("Limit Order Executed", ['trade' => $trade, 'ltp' => $ltp]);
                }
            
                if ($shouldExecute) {
                    // Transaction-safe execution
                    DB::transaction(function () use ($trade, $executionType, $ltp) {
                        // Update trade status
                        DB::table('trades')->where('id', $trade->id)->update([
                            'status' => 'executed',
                            // 'executed_price' => $ltp,
                            'updated_at' => now()
                        ]);
            
                        // Deduct/add funds or update user portfolio logic here
                    });
            
                    Log::info("Trade Executed", [
                        'trade_id' => $trade->id,
                        'type' => $executionType,
                        'ltp' => $ltp
                    ]);
                }
            }else{
                Log::info("No trade found for instrumentKey", ['instrumentKey' => $instrumentKey]);
            }
            
         

        }
    }
}
