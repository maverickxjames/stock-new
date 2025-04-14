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

class UpdateLTPJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $marketData;

    /**
     * Create a new job instance.
     */
    public function __construct($marketData)
    {
        $this->marketData = $marketData;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $datas = $this->marketData['feeds'];
        foreach ($datas as $instrumentKey => $data) {
           
          $ltp = $data['ff']['marketFF']['ltpc']['ltp'] ?? null;
          $cp = $data['ff']['marketFF']['ltpc']['cp'] ?? null;
          $high = $data['ff']['marketFF']['marketOHLC']['ohlc'][0]['high'] ?? null;
          $low = $data['ff']['marketFF']['marketOHLC']['ohlc'][0]['low'] ?? null;
          $open = $data['ff']['marketFF']['marketOHLC']['ohlc'][0]['open'] ?? null;
            $close = $data['ff']['marketFF']['marketOHLC']['ohlc'][0]['close'] ?? null;
            $bid=$data['ff']['marketFF']['marketLevel']['bidAskQuote'][0]['bid'] ?? null;
            $ask=$data['ff']['marketFF']['marketLevel']['bidAskQuote'][0]['ask'] ?? null;

          if($ltp == null){
            $ltp = $data['ff']['indexFF']['ltpc']['ltp'] ?? null;
            $cp = $data['ff']['indexFF']['ltpc']['cp'] ?? null;
            $high = $data['ff']['indexFF']['marketOHLC']['ohlc'][0]['high'] ?? null;
            $low = $data['ff']['indexFF']['marketOHLC']['ohlc'][0]['low'] ?? null;
            $open = $data['ff']['indexFF']['marketOHLC']['ohlc'][0]['open'] ?? null;
            $close = $data['ff']['indexFF']['marketOHLC']['ohlc'][0]['close'] ?? null;
            $bid=null;
            $ask=null;
          }

        if (is_array($ltp)) {
            Log::error("Unexpected array in LTP", ['instrumentKey' => $instrumentKey, 'ltp' => json_encode($ltp)]);
            continue; // Skip this entry
        }

// Convert LTP to float
        $ltp = (float) $ltp;
        $cp = (float) $cp;
        $high = (float) $high;
        $low = (float) $low;
        $open = (float) $open;
        $close = (float) $close;
        $bid = (float) $bid;
        $ask = (float) $ask;


        $query = DB::table('future_temp')
            ->where('instrumentKey', $instrumentKey)
            ->update([
                'ltp' => $ltp,
                'cp' => $cp,
                'high' => $high,
                'low' => $low,
                'open' => $open,
                'close' => $close,
                'bid' => $bid,
                'ask' => $ask,
                'updated_at' => now(),

            ]);

            if($query){
                Log::info("LTP updated successfully", ['instrumentKey' => $instrumentKey, 'ltp' => $ltp]);
            }else{
                Log::error("Failed to update LTP", ['instrumentKey' => $instrumentKey, 'ltp' => $ltp]);
            }

        }
    }
    
}
