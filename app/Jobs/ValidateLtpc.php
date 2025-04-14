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


                Log::info("LTP updated successfully", ['instrumentKey' => $instrumentKey, 'ltp' => $ltp]);
         

        }
    }
}
