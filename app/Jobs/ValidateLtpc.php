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
            ->where('status', 'executed')
            ->where(function ($q) {
                $q->whereNotNull('stop_loss')
                  ->orWhereNotNull('target_price');
            })
            ->first();

            Log::info("Trade data fetched", ['instrumentKey' => $instrumentKey, 'trade' => $trade]);

            if ($trade) {
                $shouldExit = false;
                $exitType = null;
            
                if ($trade->status === 'executed') {
                    if ($trade->action === 'BUY') {
                        if ($trade->stop_loss && $ltp <= $trade->stop_loss) {
                            $shouldExit = true;
                            $exitType = 'Buy Stop Loss Hit';
                        } elseif ($trade->target_price && $ltp >= $trade->target_price) {
                            $shouldExit = true;
                            $exitType = 'Buy Target Hit';
                        }
                    } elseif ($trade->action === 'SELL') {
                        if ($trade->stop_loss && $ltp >= $trade->stop_loss) {
                            $shouldExit = true;
                            $exitType = 'Sell Stop Loss Hit';
                        } elseif ($trade->target_price && $ltp <= $trade->target_price) {
                            $shouldExit = true;
                            $exitType = 'Sell Target Hit';
                        }
                    }
                }
            
                if ($shouldExit) {
                    // Transaction-safe execution
                    DB::transaction(function () use ($trade, $exitType, $ltp) {
                        // Determine PnL
                        $entryPrice = $trade->price; // original order price
                        $exitPrice = $ltp;
                        $quantity = $trade->quantity ?? 1; // default to 1 if not defined
                    
                        if ($trade->action === 'BUY') {
                            $pnl = ($exitPrice - $entryPrice) * $quantity;
                        } elseif ($trade->action === 'SELL') {
                            $pnl = ($entryPrice - $exitPrice) * $quantity;
                        } else {
                            $pnl = 0;
                        }
                    
                        // Update the trade
                        DB::table('trades')->where('id', $trade->id)->update([
                            'status' => 'closed',
                            'exit_price' => $exitPrice,
                            'take_profit' => $pnl,
                            'remark' => $exitType,
                            'updated_at' => now()
                        ]);
                    
                        // Optionally update user's balance or portfolio (example)
                        // DB::table('users')->where('id', $trade->user_id)->increment('balance', $pnl);
                    
                        Log::info("Trade Closed", [
                            'trade_id' => $trade->id,
                            'type' => $exitType,
                            'ltp' => $ltp,
                            'pnl' => $pnl
                        ]);
                    });
                }
            }else{
                Log::info("No trade found for instrumentKey", ['instrumentKey' => $instrumentKey]);
            }
            
         

        }
    }
}
