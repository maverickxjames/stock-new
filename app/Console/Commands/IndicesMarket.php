<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\MarketDataController;


class IndicesMarket extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'market:fetch-indices';

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
        app(MarketDataController::class)->fetchStocksUpdates();

    }
}
