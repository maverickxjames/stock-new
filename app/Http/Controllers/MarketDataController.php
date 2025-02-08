<?php

namespace App\Http\Controllers;

use App\Services\MarketDataService;

class MarketDataController extends Controller
{
    protected $marketDataService;

    public function __construct(MarketDataService $marketDataService)
    {
        $this->marketDataService = $marketDataService;
    }

    public function fetchUpdates()
    {
       $data2 = $this->marketDataService->fetchMarketUpdates();
            broadcast(new \App\Events\Watchlist($data2));

            return $data2;


        return response()->json(['message' => 'Market updates fetched successfully.']);


    }

    public function fetchTradeUpdates()
    {
        $data = $this->marketDataService->fetchTradeUpdates();
        broadcast(new \App\Events\Trade($data));

        return response()->json(['message' => 'Trade updates fetched successfully.']);
    }

}
