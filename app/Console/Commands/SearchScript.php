<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use App\Http\Controllers\MarketDataController;

class SearchScript extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'run:ltp {userId}';

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
        $cacheKey = "ltp_instrument_keys_{$userId}";
        $instrumentKeys = Cache::get($cacheKey);

        if (!$instrumentKeys) {
            $this->error("No instrument keys found for user ID: $userId");
            return;
        }

            $controller = app(MarketDataController::class);
            $controller->fetchSearchOnlyLtp($userId);
}
}
