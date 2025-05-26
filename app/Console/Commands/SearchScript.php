<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SearchScript extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'run:ltp {userId} {instrumentKeys}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
public function handle()
{
    $userId = $this->argument('userId');
    $instrumentKeys = json_decode($this->argument('instrumentKeys'), true);

    $job = new \App\Jobs\FetchStockLtpJob($instrumentKeys, $userId);
    Cache::put("ltp_job_id_{$userId}", $job->jobId, now()->addMinutes(10));
    $job->handle(); // Directly run the logic (not via queue)
}
}
