<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Http\Controllers\MarketDataController;
use Illuminate\Support\Facades\Cache;

class FetchStockLtpJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
        public  $instrumentKeys;
        public $jobId;
        public $userId;


    public function __construct($instrumentKeys,$userId)
    {
    $this->instrumentKeys = $instrumentKeys;
    $this->userId = $userId;
    $this->jobId = uniqid();
    }

public function handle()
{
    while (true) {
        $currentJobId = Cache::get("ltp_job_id_{$this->userId}");

        if ($currentJobId !== $this->jobId) {
            // Job was superseded by a newer one
            break;
        }

        // Perform WebSocket LTP fetch
        $controller = app()->make(MarketDataController::class);
        $controller->fetchSearchOnlyLtp($this->instrumentKeys, $this->userId, $this->jobId);

        // sleep(2);
    }
}
}
