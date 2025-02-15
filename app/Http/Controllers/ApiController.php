<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function allStocks()
    {
        // $url = https://api.upstox.com/v2/market-quote/ltp?instrument_key=NSE_FO|43392 

        // fetch API INSTRUMENT key from database

        $instrumentKeys = DB::table('future_temp')->distinct()->pluck('instrumentKey')->toArray();
        $bearerToken = DB::table('upstocks')->where('id', 1)->value('token');
        
        if (empty($instrumentKeys)) {
            return response()->json(['message' => 'No instrument keys found.'], 500);
        }
        
        $batchSize = 500;  // Limit to 500 keys per request
        $instrumentBatches = array_chunk($instrumentKeys, $batchSize);
        $finalData = [];

        $newArray = [];
        
        foreach ($instrumentBatches as $batch) {
            $finalArray = implode(",", $batch);
            $url = 'https://api.upstox.com/v2/market-quote/ltp?instrument_key=' . $finalArray;
        
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $bearerToken,
            ])->get($url);
        
            if ($response->failed()) {
                return response()->json(['message' => 'Failed to fetch data for some batches.'], 500);
            }
        
            $data = $response->json();
            echo "<pre>";
            print_r($data);
         
            // array merge 
            // $newArray = array_merge($newArray, $data);

            // print_r($batch);
        }
        
        return response()->json($newArray);
        

    }
}
