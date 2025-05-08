<?php
namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class UpdateStockJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $stocksBatch;

    /**
     * Create a new job instance.
     */
    public function __construct($stocksBatch)
    {
        $this->stocksBatch = $stocksBatch;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {

        // Log::info("Stocks LTP update job started", ['stocksBatch' => $this->stocksBatch]);
        Log::info("Stocks LTP update job started", [
            'instrumentKey' => $this->stocksBatch['instrumentKey'],
            'ltp' => $this->stocksBatch['ltp'],
            'cp' => $this->stocksBatch['cp']
        ]);
        exit;
        $datas = $this->stocksBatch['feeds'];
        foreach ($datas as $instrumentKey => $data) {
            // Extract values
            $ltp = $data['ff']['marketFF']['ltpc']['ltp'] ?? null;
            $cp = $data['ff']['marketFF']['ltpc']['cp'] ?? null;
            $high = $data['ff']['marketFF']['marketOHLC']['ohlc'][0]['high'] ?? null;
            $low = $data['ff']['marketFF']['marketOHLC']['ohlc'][0]['low'] ?? null;
            $open = $data['ff']['marketFF']['marketOHLC']['ohlc'][0]['open'] ?? null;
            $close = $data['ff']['marketFF']['marketOHLC']['ohlc'][0]['close'] ?? null;
            $bid = $data['ff']['marketFF']['marketLevel']['bidAskQuote'][0]['bidQ'] ?? null;
            $ask = $data['ff']['marketFF']['marketLevel']['bidAskQuote'][0]['askQ'] ?? null;
    
            // If the LTP data is null, use alternative data
            if ($ltp == null) {
                $ltp = $data['ff']['indexFF']['ltpc']['ltp'] ?? null;
                $cp = $data['ff']['indexFF']['ltpc']['cp'] ?? null;
                $high = $data['ff']['indexFF']['marketOHLC']['ohlc'][0]['high'] ?? null;
                $low = $data['ff']['indexFF']['marketOHLC']['ohlc'][0]['low'] ?? null;
                $open = $data['ff']['indexFF']['marketOHLC']['ohlc'][0]['open'] ?? null;
                $close = $data['ff']['indexFF']['marketOHLC']['ohlc'][0]['close'] ?? null;
                $bid = null;
                $ask = null;
            }
    
            // Handle potential array errors for LTP
            if (is_array($ltp)) {
                Log::error("Unexpected array in LTP", ['instrumentKey' => $instrumentKey, 'ltp' => json_encode($ltp)]);
                continue; // Skip this entry
            }
    
            // Convert values to float
            $ltp = (float) $ltp;
            $cp = (float) $cp;
            $high = (float) $high;
            $low = (float) $low;
            $open = (float) $open;
            $close = (float) $close;
            $bid = (float) $bid;
            $ask = (float) $ask;
    
            // Update database
            $query = DB::table('allstocks')
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
    
            if ($query) {
                Log::info("Stocks LTP updated successfully", [
                    'instrumentKey' => $instrumentKey,
                    'ltp' => $ltp,
                    'cp' => $cp
                ]);
            } else {
                Log::error("Failed to update LTP", ['instrumentKey' => $instrumentKey]);
            }
        }
    }
    
}
