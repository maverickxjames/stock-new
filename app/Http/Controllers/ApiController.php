<?php

namespace App\Http\Controllers;
use App\Jobs\FetchStockDataJob;

use Carbon\Carbon;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
//     public function allStocks()
//     {
//         // $url = https://api.upstox.com/v2/market-quote/ltp?instrument_key=NSE_FO|43392 

//         // fetch API INSTRUMENT key from database

//         $instrumentKeys = DB::table('future_temp')->distinct()->pluck('instrumentKey')->toArray();
//         $bearerToken = DB::table('upstocks')->where('id', 1)->value('token');
        
//         if (empty($instrumentKeys)) {
//             return response()->json(['message' => 'No instrument keys found.'], 500);
//         }
        
//         $batchSize = 500;  // Limit to 500 keys per request
//         $instrumentBatches = array_chunk($instrumentKeys, $batchSize);
//         $finalData = [];

//         $newArray = [];
        
//         foreach ($instrumentBatches as $batch) {
//             $finalArray = implode(",", $batch);
//             $url = 'https://api.upstox.com/v2/market-quote/quotes?instrument_key=' . $finalArray;
        
//             $response = Http::withHeaders([
//                 'Authorization' => 'Bearer ' . $bearerToken,
//             ])->get($url);
        
//             if ($response->failed()) {
//                 return response()->json(['message' => 'Failed to fetch data for some batches.'], 500);
//             }
        
//             $data = $response->json();

           
         
//             // array merge 
//             // $newArray = array_merge($newArray, $data);
//             $newArray = array_merge_recursive($newArray, $data);

//             // print_r($batch);
//         }
        
//         // return response()->json($newArray);
//         $totalRecords = isset($newArray['data']) ? count($newArray['data']) : 0;

       
        

// return response()->json([
//     'data' => $newArray['data']
// ], 200);

//     }

public function allStocks()
{
    // Fetch instrument keys
    $instrumentKeys = DB::table('future_temp')->distinct()->pluck('instrumentKey')->toArray();
    $bearerToken = DB::table('upstocks')->where('id', 1)->value('token');

    if (empty($instrumentKeys)) {
        return response()->json(['message' => 'No instrument keys found.'], 500);
    }

    $batchSize = 500;  // Limit to 500 keys per request
    $instrumentBatches = array_chunk($instrumentKeys, $batchSize);
    $updatedData = [];

    foreach ($instrumentBatches as $batch) {
        $finalArray = implode(",", $batch);
        $url = 'https://api.upstox.com/v2/market-quote/quotes?instrument_key=' . $finalArray;

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $bearerToken,
        ])->get($url);

        if ($response->failed()) {
            return response()->json(['message' => 'Failed to fetch data.'], 500);
        }

        $data = $response->json();

        if (isset($data['data']) && is_array($data['data'])) {
            foreach ($data['data'] as $symbol => $stockData) {
                $updatedData[] = [
                    // 'instrumentKey' => $stockData['instrument_token'] ?? null,
                    // 'tradingSymbol' => $stockData['symbol'] ?? null,
                    'ltp' => $stockData['last_price'] ?? null,
                    'open' => $stockData['ohlc']['open'] ?? null,
                    'high' => $stockData['ohlc']['high'] ?? null,
                    'low' => $stockData['ohlc']['low'] ?? null,
                    'close' => $stockData['ohlc']['close'] ?? null,
                    'ask' => $stockData['depth']['sell'][0]['price'] ?? null,
                    'bid' => $stockData['depth']['buy'][0]['price'] ?? null,
                    // 'updated_at' => now()
                ];
            }
        }
    }

    // Perform bulk insert/update using upsert
    if (!empty($updatedData)) {
        DB::table('future_temp')->upsert($updatedData, ['instrumentKey'], ['ltp', 'open', 'high', 'low', 'close', 'ask', 'bid', 'updated_at']);
    }

    return response()->json(['message' => 'Stock data updated successfully.'], 200);
}

}
