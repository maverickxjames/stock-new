<?php

namespace App\Http\Controllers;

use App\Services\MarketDataService;
// add marketdatacontroller 



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

            // return $data2;


        return response()->json(['message' => 'Market updates fetched successfully.']);


    }

    public function fetchTradeUpdates()
    {
        $data = $this->marketDataService->fetchTradeUpdates();
        broadcast(new \App\Events\Trade($data));

        return response()->json(['message' => 'Trade updates fetched successfully.']);
    }

    public function fetchStocksUpdates()
    {
        $data = $this->marketDataService->fetchStocksUpdates();
        broadcast(new \App\Events\Stock($data));

        return response()->json(['message' => 'Stocks fetched successfully.']);
    }
    public function fetchTradeOnlyLtp()
    {
        $data = $this->marketDataService->fetchTradeOnlyLtp();
        // broadcast(new \App\Events\Stock($data));

        return response()->json(['message' => 'Stocks fetched successfully.']);
    }
    public function fetchSearchOnlyLtp($requestData, $userId, $jobId)

    {
        $data = $this->marketDataService->fetchSearchOnlyLtp($requestData, $userId, $jobId);
        // broadcast(new \App\Events\SearchEvent($data));

        return response()->json(['message' => 'Stocks fetched successfully.']);
    }

    public function fetchStocks()
    {
       $data2 = $this->marketDataService->fetchAllStocks();
       broadcast(new \App\Events\AllStocks($data2));

            // return $data2;


        return response()->json(['message' => 'Market Data fetched successfully.']);


    }

}
