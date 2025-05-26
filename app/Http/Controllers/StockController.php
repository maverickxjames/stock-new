<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Cache;
// db facades 
use Illuminate\Support\Facades\DB;
use App\Models\trade;
use App\Jobs\UpdateLotSizeJob;
use App\Http\Controllers\MarketDataController;
use App\Jobs\FetchStockLtpJob;






class StockController extends Controller
{
    public function nifty()
    {
        return view('nifty');
    }
    public function sensex()
    {
        return view('sensex');
    }

    public function niftyInner($slug, $id)
    {
        return view('stockview', ['id' => $id]);
    }

    // public function quoteRefresh($id){
    //     $userId = Auth::id();
    //     $cacheKey = "user_{$userId}_watchlist";
    
    //     if (Cache::has($cacheKey)) {
    //         Log::info("Data loaded from Redis for user: " . $userId);
    //         $fetch = Cache::get($cacheKey);
    //         // return response()->json(['source' => 'Redis', 'data' => $fetch]);
    //     } else {
    //         Log::info("Fetching data from database for user: " . $userId);

    //         $query = DB::table('watchlist')->where('userid', $userId);

    //         if ($id == 1) {
    //             $query->where('segment', 'NSE_FO')->where('instrumentType', 'FUT');
    //             $fetch = $query->orderBy('id', 'DESC')->get()->toArray();
    //         Cache::put($cacheKey, $fetch, now()->addMinutes(10));
    //         return view('components.future-quote', compact('fetch'));
    //         } elseif ($id == 2) {
    //             $query->whereIn('instrumentType', ['CE', 'PE']);
    //             $fetch = $query->orderBy('id', 'DESC')->get()->toArray();
    //         Cache::put($cacheKey, $fetch, now()->addMinutes(10));
    //         return view('components.option-quote', compact('fetch'));
    //         } elseif ($id == 3) {
    //             $query->where('segment', 'MCX_FO')->where('instrumentType', 'FUT');
    //             $fetch = $query->orderBy('id', 'DESC')->get()->toArray();
    //         Cache::put($cacheKey, $fetch, now()->addMinutes(10));
    //         return view('components.mcx-quote', compact('fetch'));
    //         } elseif ($id == 4) {
    //             $query->where('segment', 'NSE_FO')->where('instrumentType', 'IDX');
    //             $fetch = $query->orderBy('id', 'DESC')->get()->toArray();
    //         Cache::put($cacheKey, $fetch, now()->addMinutes(10));
    //         return view('components.indices-quote', compact('fetch'));
    //         }
    
            
    //         // return response()->json(['source' => 'Database', 'data' => $fetch]);
    //     }

    //     // return view('components.quotes', compact('fetch'));
    // }

    public function quoteRefresh($id){
    $userId = Auth::id();
    $cacheKey = "user_{$userId}_watchlist";

    if (Cache::has($cacheKey)) {
        Log::info("Data loaded from Redis for user: " . $userId);
        $fetch = Cache::get($cacheKey);
        
        // Return cached data immediately
        return match ((string) $id) {
            '1' => view('components.future-quote', compact('fetch')),
            '2' => view('components.option-quote', compact('fetch')),
            '3' => view('components.mcx-quote', compact('fetch')),
            '4' => view('components.indices-quote', compact('fetch')),
            default => abort(404, 'Component not found'),
        };
        
    }

    Log::info("Fetching data from database for user: " . $userId);
    $query = DB::table('watchlist')->where('userid', $userId);

    switch ($id) {
        case '1':
            $query->where('segment', 'NSE_FO')->where('instrumentType', 'FUT');
            break;
        case '2':
            $query->whereIn('instrumentType', ['CE', 'PE']);
            break;
        case '3':
            $query->where('segment', 'MCX_FO')->where('instrumentType', 'FUT');
            break;
        case '4':
            $query->where('instrumentType', 'NSE_INDEX');
            break;
    }

    $fetch = $query->orderBy('id', 'DESC')->get()->toArray();
    Cache::put($cacheKey, $fetch, now()->addMinutes(10));

    return match ($id) {
        '1' => view('components.future-quote', compact('fetch')),
        '2' => view('components.option-quote', compact('fetch')),
        '3' => view('components.mcx-quote', compact('fetch')),
        '4' => view('components.indices-quote', compact('fetch')),
    };
}




    // public function closeOrder(Request $request) {
    //     DB::beginTransaction();
    //     try {
    //         $instrumentKey = $request->instrumentKey;
    //         $action = strtoupper($request->tradeType);
    //         $duration = $request->duration;
    
    //         // Fetch trade details
    //         $query = DB::table('trades')
    //             ->where('instrumentKey', $instrumentKey)
    //             ->where('action', $action)
    //             ->where('duration', $duration)
    //             ->where('status','executed')
    //             ->select(
    //                 'tradeType',
    //                 'expiry',
    //                 'stock_symbol',
    //                 'cost',
    //                 'total_cost',
    //                 DB::raw("SUM(quantity) as total_quantity"),
    //                 DB::raw("SUM(quantity * price) as total_amount")
    //             )
    //             ->groupBy('tradeType', 'expiry', 'stock_symbol','cost', 'total_cost')
    //             ->get();

    //             // return $query;
    
    //         if ($query->isEmpty()) {
    //             DB::rollBack();
    //             return response()->json(['error' => 'No trade found'], 404);
    //         }
    
    //         $stock_symbol = $query[0]->stock_symbol;
    //         $expiry = $query[0]->expiry;
    //         $tradeType = $query[0]->tradeType;
    
    //         $expiryParts = explode(' ', $expiry);
    //         $formattedExpiry = $expiryParts[2] . strtoupper(substr($expiryParts[1], 0, 3));
    //         $formattedString = $stock_symbol . $formattedExpiry;
    
    //         $parts = explode('|', $instrumentKey);
    //         $segment = $parts[0];
    
    //         $arrayAccess = $segment . ':' . $formattedString . '' . $tradeType;
    
    //         // Fetch LTP from Upstox API
    //         $url = "https://api.upstox.com/v2/market-quote/quotes?instrument_key=" . $instrumentKey;
    //         $token = DB::table('upstocks')->where('id', 1)->value('token');
    
    //         $response = Http::withHeaders([
    //             'Authorization' => 'Bearer ' . $token,
    //         ])->get($url);
    
    //         $data = $response->json();
    //         // return $data;
    //         $ltp = $data['data'][$arrayAccess]['last_price'] ?? 0;
    
    //         if ($ltp == 0) {
    //             DB::rollBack();
    //             return response()->json(['error' => 'Unable to fetch LTP'], 500);
    //         }
    
    //         // Calculate Profit/Loss
    //         $totalAmount = $ltp * $query[0]->total_quantity;
    //         $userAmount = $query[0]->total_amount;
    //         $profit = $loss = 0;
    //         $platformMargin = $query[0]->cost - $query[0]->total_cost;
    //         // return array("totalAmount" => $totalAmount, "userAmount" => $userAmount, "platformMargin" => $platformMargin);
    //         if ($action == 'BUY') {
    //             $profit = max(0, $totalAmount - $userAmount);
    //             $loss = max(0, $userAmount - $totalAmount);
    //         } elseif ($action == 'SELL') {
    //             $profit = max(0, $userAmount - $totalAmount);
    //             $loss = max(0, $totalAmount - $userAmount);
    //         }

            
    
    //         // If profit, update user's wallet
    //         if ($profit >= 0) {
    //             // return $profit;
    //             if($profit == 0){
    //                 $profit = $query[0]->total_cost;
    //             }else{
    //                 $profit = $profit - $platformMargin;
    //             }

                
    //              // Deduct platform margin from profit
    //             DB::table('users')->where('id', Auth::id())->increment('real_wallet', $profit);

    //             DB::table('transactions')->insert([
    //                 'user_id' => Auth::id(),
    //                 'type' => 'credit',
    //                 'amount' => $profit,
    //                 'balance_after' => DB::table('users')->where('id', Auth::id())->value('real_wallet'),
    //                 'description' => 'Profit from trade',
    //                 'reference_id' => $instrumentKey,
    //                 'created_at' => now(),
    //                 'updated_at' => now(),
    //             ]);

    //             //update trades table 

    //             DB::table('trades')
    //                 ->where('instrumentKey', $instrumentKey)
    //                 ->where('action', $action)
    //                 ->where('duration', $duration)
    //                 ->where('status', 'executed')
    //                 ->update([
    //                     'status' => 'closed',
    //                     'exit_price' => $ltp,
    //                     'profit_loss' => $profit,
    //                     'profit_loss_percentage' => ($profit / $userAmount) * 100,
    //                 ]);
    //         }elseif($loss >= 0) {

    //             if($loss == 0){
    //                 $loss = $query[0]->total_cost;
    //             }else{
    //                 $loss = $loss + $platformMargin; // Add platform margin to loss
    //             }

                
    //             DB::table('users')->where('id', Auth::id())->decrement('real_wallet', $loss);

    //             DB::table('transactions')->insert([
    //                 'user_id' => Auth::id(),
    //                 'type' => 'debit',
    //                 'amount' => $loss,
    //                 'balance_after' => DB::table('users')->where('id', Auth::id())->value('real_wallet'),
    //                 'description' => 'Loss from trade',
    //                 'reference_id' => $instrumentKey,
    //                 'created_at' => now(),
    //                 'updated_at' => now(),
    //             ]);

    //             //update trades table 

    //             DB::table('trades')
    //                 ->where('instrumentKey', $instrumentKey)
    //                 ->where('action', $action)
    //                 ->where('duration', $duration)
    //                 ->where('status', 'executed')
    //                 ->update([
    //                     'status' => 'closed',
    //                     'exit_price' => $ltp,
    //                     'profit_loss' => $loss,
    //                     'profit_loss_percentage' => ($loss / $userAmount) * 100,
    //                 ]);
    //         }
    
    //         // Commit transaction
    //         DB::commit();
    
    //         return response()->json([
    //             'status' => 'success',
    //             'ltp' => $ltp,
    //             'totalAmount' => $totalAmount,
    //             'profit' => number_format($profit, 2),
    //             'loss' => number_format($loss, 2),
    //             'message' =>'Order closed'
    //         ]);
            

    //     } catch (\Exception $e) {
    //         DB::rollBack();
    //         return response()->json(['error' => 'Transaction failed!', 'message' => $e->getMessage()], 500);
    //     }
    // }




    public function closeOrder(Request $request)
{
    DB::beginTransaction();
    try {
        $instrumentKey = $request->instrumentKey;
        $action = strtoupper($request->tradeType);
        $duration = $request->duration;

        // Fetch all individual trades
        $trades = DB::table('trades')
            ->where('instrumentKey', $instrumentKey)
            ->where('action', $action)
            ->where('duration', $duration)
            ->where('status', 'executed')
            ->get();

        if ($trades->isEmpty()) {
            DB::rollBack();
            return response()->json(['error' => 'No trade found'], 404);
        }

        // Use first trade to get required metadata
        $firstTrade = $trades[0];
        $stock_symbol = $firstTrade->stock_symbol;
        $expiry = $firstTrade->expiry;
        $tradeType = $firstTrade->tradeType;

        $expiryParts = explode(' ', $expiry);
        $formattedExpiry = $expiryParts[2] . strtoupper(substr($expiryParts[1], 0, 3));
        $formattedString = $stock_symbol . $formattedExpiry;

        $parts = explode('|', $instrumentKey);
        $segment = $parts[0];
        $arrayAccess = $segment . ':' . $formattedString . $tradeType;

        // Fetch LTP from Upstox API
        $url = "https://api.upstox.com/v2/market-quote/quotes?instrument_key=" . $instrumentKey;
        $token = DB::table('upstocks')->where('id', 1)->value('token');

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->get($url);

        $data = $response->json();
        $ltp = $data['data'][$arrayAccess]['last_price'] ?? 0;

        if ($ltp == 0) {
            DB::rollBack();
            return response()->json(['error' => 'Unable to fetch LTP'], 500);
        }

        // Initialize total P&L
        $totalProfit = 0;
        $totalLoss = 0;

        foreach ($trades as $trade) {
            $tradeAmount = $trade->quantity * $ltp;
            $userAmount = $trade->quantity * $trade->price;
            $platformMargin = $trade->cost - $trade->total_cost;

            $profit = $loss = 0;
            if ($action === 'BUY') {
                $profit = max(0, $tradeAmount - $userAmount);
                $loss = max(0, $userAmount - $tradeAmount);
            } elseif ($action === 'SELL') {
                $profit = max(0, $userAmount - $tradeAmount);
                $loss = max(0, $tradeAmount - $userAmount);
            }

            if ($profit > 0) {
                $profit -= $platformMargin;
                $totalProfit += $profit;

                DB::table('trades')->where('id', $trade->id)->update([
                    'status' => 'closed',
                    'exit_price' => $ltp,
                    'profit_loss' => $profit,
                    'profit_loss_percentage' => ($profit / $userAmount) * 100,
                ]);
            } else {
                $loss += $platformMargin;
                $totalLoss += $loss;

                DB::table('trades')->where('id', $trade->id)->update([
                    'status' => 'closed',
                    'exit_price' => $ltp,
                    'profit_loss' => $loss,
                    'profit_loss_percentage' => ($loss / $userAmount) * 100,
                ]);
            }
        }

        // Wallet and transaction updates
        if ($totalProfit > 0) {
            DB::table('users')->where('id', Auth::id())->increment('real_wallet', $totalProfit);

            DB::table('transactions')->insert([
                'user_id' => Auth::id(),
                'type' => 'credit',
                'amount' => $totalProfit,
                'balance_after' => DB::table('users')->where('id', Auth::id())->value('real_wallet'),
                'description' => 'Profit from trade',
                'reference_id' => $instrumentKey,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        if ($totalLoss > 0) {
            DB::table('users')->where('id', Auth::id())->decrement('real_wallet', $totalLoss);

            DB::table('transactions')->insert([
                'user_id' => Auth::id(),
                'type' => 'debit',
                'amount' => $totalLoss,
                'balance_after' => DB::table('users')->where('id', Auth::id())->value('real_wallet'),
                'description' => 'Loss from trade',
                'reference_id' => $instrumentKey,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        DB::commit();

        return response()->json([
            'status' => 'success',
            'ltp' => $ltp,
            'profit' => number_format($totalProfit, 2),
            'loss' => number_format($totalLoss, 2),
            'message' => 'Order closed'
        ]);

    } catch (\Exception $e) {
        DB::rollBack();
        return response()->json(['error' => 'Transaction failed!', 'message' => $e->getMessage()], 500);
    }
}


    public function searchScript(Request $request)
    {
        


        $search = $request->search ?? '';
        $type = $request->type ?? 'all';
        $page = (int) ($request->page ?? 1);
        $limit = (int) ($request->limit ?? 10);
        $offset = ($page - 1) * $limit;
    
        $today = Carbon::now(); // Get current date
    
        $query = DB::table('future_temp')
            ->where('tradingSymbol', 'like', $search . "%")
            ->whereRaw("STR_TO_DATE(expiry, '%d %b %y') >= ?", [$today]); // Filter expired contracts
    
        if ($type == 'future') {
            $query->where('instrumentType', 'FUT')->where('segment', 'NSE_FO');
        } elseif ($type == 'option') {
            $query->where(function ($q) {
                $q->where('instrumentType', 'CE')
                  ->where('segment', 'NSE_FO')
                  ->orWhere('instrumentType', 'PE');
            });
        } elseif ($type == 'indices') {
            $query = DB::table('future_temp')
            ->where('tradingSymbol', 'like', $search . "%");
            $query->where('instrumentType', 'INDEX');
        } elseif ($type == "mcx") {
            $query->where(function ($q) {
                $q->where('instrumentType', 'FUT')
                  ->where('segment', 'MCX_FO');
            });
        }
    
        // Apply limit & offset for pagination
        $data = $query->limit($limit)->offset($offset)->get();

        // extract all instrumentKey from data and make an array of instrumentKeys 
        
        $instrumentKeys = $data->pluck('instrumentKey')->toArray();
        // return $instrumentKeys;
        $userId = auth()->id(); // or session()->getId();
        Cache::put("ltp_job_id_{$userId}", 'stale_job_' . uniqid(), now()->addMinutes(1));

// Sleep briefly to allow the old job to check and exit
// usleep(500 * 1000); // 500 milliseconds
        $job = new FetchStockLtpJob($instrumentKeys, $userId);
        Cache::put("ltp_job_id_{$userId}", $job->jobId, now()->addMinutes(10));
        dispatch($job);

    
        return response()->json($data);
    }


    // public function fetchStockData($id)
    // {
    //     $today = Carbon::now();
    //     $time = $today->format('H:i:s');



    //     // Check if today is Saturday (6) or Sunday (0)
    //     if ($today->isSaturday()) {
    //         // If today is Saturday, get the previous Friday
    //         $today = $today->subDay(1);
    //     } elseif ($today->isSunday()) {
    //         // If today is Sunday, get the previous Friday
    //         $today = $today->subDays(2);
    //     }

    //     $today = $today->subDay(1);

    //     if ($time >= '09:15:00' && $time <= '15:30:00') {
    //         $stocktype = 'intraday';
    //     } else {
    //         $stocktype = 'historical';
    //     }

    //     // Format the date as needed, e.g., 'Y-m-d'
    //     $cu = $today->format('Y-m-d');

    //     // Set the URL with the given $id
    //     // $url = "https://service.upstox.com/charts/v2/open/" . $stocktype . "/IN"."/" . $id . "/1minute"."/". $cu . "/";

    //     $url = "https://api.upstox.com/v2/historical-candle/" . $id . "/1minute/2025-02-11/2025-02-10";
    //     // return $url;

    //     // Make the HTTP GET request to fetch data
    //     $response = Http::get($url);

    //     // Check if the request was successful
    //     if ($response->successful()) {
    //         // Decode JSON response and access the specific data structure
    //         $data = $response->json()['data']['candles'] ?? [];

    //         // Reverse the data
    //         $data = array_reverse($data);

    //         // Return a JSON response with the data
    //         return response()->json($data);
    //     } else {
    //         // Return an error response if the request failed
    //         return response()->json(['error' => 'Unable to  data'], 500);
    //     }
    // }

    public function fetchStockData($id, $period = 'day')
    {
        $today = Carbon::now();
        $time = $today->format('H:i:s');

        if ($today->isSaturday()) {
            $today = $today->subDay(1);
        } elseif ($today->isSunday()) {
            $today = $today->subDays(2);
        }


        switch ($period) {
            case 'week':
                $interval = '30minute'; 
                $startDate = Carbon::now()->subDays(7)->format('Y-m-d'); 
                $endDate = $today->format('Y-m-d');
                break;

            case 'month':
                $interval = 'day';
                $startDate = Carbon::now()->subMonths(1)->format('Y-m-d'); 
                $endDate = $today->format('Y-m-d');
                break;

            case 'year':
                $interval = 'week'; 
                $startDate = Carbon::now()->subYears(10)->format('Y-m-d'); 
                $endDate = $today->format('Y-m-d');
                break;

            case 'day': 
            default:
                $interval = '1minute';
                $startDate = Carbon::now()->subDay(1)->format('Y-m-d'); 
                $startDate ="2025-02-10"; 
                $endDate="2025-02-11";
                break;
        }
       
        

        
        if ($time >= '09:15:00' && $time <= '15:30:00' && $period === 'day') {
            $url = "https://api.upstox.com/v2/historical-candle/intraday/" . $id . "/" . $interval;
        } else {
            $url = "https://api.upstox.com/v2/historical-candle/" . $id . "/" . $interval . "/" . $endDate . "/" . $startDate;
        }

        // return $url;

        $response = Http::get($url);

        if ($response->successful()) {
            $data = $response->json()['data']['candles'] ?? [];
            $data = array_reverse($data); // Reverse for correct chart order
            return response()->json($data);
        } else {
            return response()->json(['error' => 'Unable to fetch data'], 500);
        }
    }


    public function fetchNifty50StockData()
    {
        $today = Carbon::now();
        $time = $today->format('H:i:s');



        // Check if today is Saturday (6) or Sunday (0)
        if ($today->isSaturday()) {
            // If today is Saturday, get the previous Friday
            $today = $today->subDay(1);
        } elseif ($today->isSunday()) {
            // If today is Sunday, get the previous Friday
            $today = $today->subDays(2);
        }

        $today = $today->subDay(1);

        if ($time >= '09:15:00' && $time <= '15:30:00') {
            $stocktype = 'intraday';
        } else {
            $stocktype = 'historical';
        }

        // Format the date as needed, e.g., 'Y-m-d'
        $cu = $today->format('Y-m-d');

        // Set the URL with the given $id
        $url = "https://service.upstox.com/charts/v2/open/" . $stocktype . "/IN/NSE_INDEX%7CNifty%2050/1minute/" . $cu . "/";

        // Make the HTTP GET request to fetch data
        $response = Http::get($url);

        // Check if the request was successful
        if ($response->successful()) {
            // Decode JSON response and access the specific data structure
            $data = $response->json()['data']['candles'] ?? [];

            // Reverse the data
            $data = array_reverse($data);

            // Return a JSON response with the data
            return response()->json($data);
        } else {
            // Return an error response if the request failed
            return response()->json(['error' => 'Unable to fetch data'], 500);
        }
    }
    public function fetchSensexStockData()
    {
        $today = Carbon::now();
        $time = $today->format('H:i:s');



        // Check if today is Saturday (6) or Sunday (0)
        if ($today->isSaturday()) {
            // If today is Saturday, get the previous Friday
            $today = $today->subDay(1);
        } elseif ($today->isSunday()) {
            // If today is Sunday, get the previous Friday
            $today = $today->subDays(2);
        }

        $today = $today->subDay(1);

        if ($time >= '09:15:00' && $time <= '15:30:00') {
            $stocktype = 'intraday';
        } else {
            $stocktype = 'historical';
        }

        // Format the date as needed, e.g., 'Y-m-d'
        $cu = $today->format('Y-m-d');

        // Set the URL with the given $id
        $url = "https://service.upstox.com/charts/v2/open/" . $stocktype . "/IN/BSE_INDEX%7CSENSEX/1minute/" . $cu . "/";

        // Make the HTTP GET request to fetch data
        $response = Http::get($url);

        // Check if the request was successful
        if ($response->successful()) {
            // Decode JSON response and access the specific data structure
            $data = $response->json()['data']['candles'] ?? [];

            // Reverse the data
            $data = array_reverse($data);

            // Return a JSON response with the data
            return response()->json($data);
        } else {
            // Return an error response if the request failed
            return response()->json(['error' => 'Unable to fetch data'], 500);
        }
    }

    public function orderHistory(Request $request)
    {
        return view('order');
    }

    public function limitOrder()
    {
        return view('limitorder');
    }

    public function updateFuture()
    {
        // fetch symbol list from db
        $equities = DB::table('equities')->where('exchange','MCX')->get();
        $cookie = DB::table('upstocks')->where('id', 1)->value('cookie');
        // return $cookie;
        foreach ($equities as $equity) {
            $symbol = $equity->symbol;

            // if ($equity->id < 114) {
            //     continue;
            // }
            // $url = "https://service.upstox.com/search/v1?allValuesFor=expiry&expiries=05%20Jun%2025&pageNumber=1&query=ALUMINI&records=30&segments=FUT"; 
            $url = "https://service.upstox.com/search/v1?allValuesFor=expiry&expiries=29%20May%2025&instrumentTypes=PE&pageNumber=1&query=nifty&records=500&segments=OPT";
            // $url = "https://service.upstox.com/search/v1?allValuesFor=expiry&pageNumber=1&query=" . $symbol . "&records=500&segments=OPT";
            // $cookie = "access_token=eyJ0eXAiOiJKV1QiLCJraWQiOiJpZHQtODAxYzAxZmEtOWRmNy00YjMyLThjZmItNzE2MzgxZjQ0YzAxIiwiYWxnIjoiUlMyNTYifQ.eyJzdWIiOiI4NTc2NzcyIiwianRpIjoiTlRvTUIxcnUzV0tmeEk0MWtwcThkQWg3NVJvIiwiaWF0IjoxNzQzNDYwNzgyLCJleHAiOjE3NDM0NjQzODIsImlzcyI6ImxvZ2luLXNlcnZpY2UiLCJzY29wZSI6WyJzZXJ2aWNlOnJlYWQiLCJzZXJ2aWNlOndyaXRlIl0sImNsaWVudF9pZCI6IklORC1ueWp2NzB1OXhjZzJ0OGUzaGtycGRtNWIiLCJrZXlfaWQiOiJpZHQtODAxYzAxZmEtOWRmNy00YjMyLThjZmItNzE2MzgxZjQ0YzAxIiwicmVmcmVzaF90b2tlbl9pZCI6IlRraW02OUdiYS1xUW9QMnRWWW1HVC10V05ROCIsInR5cGUiOiJhY2Nlc3NfdG9rZW4iLCJyb2xlIjoiQ1VTVE9NRVIiLCJ1c2VyX3R5cGUiOiJDVVNUT01FUiIsInVzZXJfaWQiOiIzS0JSNTgiLCJ2ZXJzaW9uIjoiVjIiLCJzdHAiOiJPTVMzIn0.b96qVNDbiFz0dUdjkm90CZq1PdKvDmZSJ7IKzdNG9tPOtpQDMacDcPx5tPWe8PUOYmYs_e2uiwJmJcpGMmuOK7aKszhEeQiBxgwoRKAJQndrN5MKQjLfqDzpo_Oo6TDQMj80TuS3gUt63OTOIcB30FXC0BZ1tSIXoS0QJAqZoKGGmf2msjXMt5UTMTtddUe0bX88dAlb8WvRyb0GZYEKzBhXi665XmB7FgveNlfa77rnHQowIm2jmnTho8XOguH4QZ7ajdGWmOBTyHjXUl4NvxBPtPu7jO08hNyT4tUNy79hplHdnValbJm5Phtz72Y9DpKv_EtnhBsBz_wiKvv9EQ;";
            $response = Http::withHeaders([
                'cookie' => $cookie,
            ])->get($url);
            $data = $response->json();
            // return $data;
            $fetchList =  $data['data'];

            // $url = "https://service.upstox.com/search/v1?allValuesFor=expiry&pageNumber=1&query=aubank&records=500&segments=OPT";
            // $cookie = "_gcl_au=1.1.662695127.1730892004; _fbp=fb.1.1730892007537.49372314893510933; _iidt=8mXkcbwq/wf3caPvJsDaHYCEaYdBVGLmvjb/g6s2Dd1gvCkPZBgIjKQVbUwxCoF+EdWIoU/D+xwq3w==; _vid_t=DiC0jCgNOR8n4qEJBBZCiWV1fIO5jJNaDZeScqGkeJv7OrE8BHbzIL1kwZKiXIcftqfTpXwcrJLSMg==; mp_2e2b86aca136ef277fac607c86dc6b74_mixpanel=%7B%22distinct_id%22%3A%20%22diW5wNWYmS5ShXfU3OAm%22%2C%22%24device_id%22%3A%20%221937cdfc7f4161da-0c382bddaffd7c-26011851-1fa400-1937cdfc7f4161da%22%2C%22%24user_id%22%3A%20%22diW5wNWYmS5ShXfU3OAm%22%2C%22%24initial_referrer%22%3A%20%22https%3A%2F%2Fpro.upstox.com%2F%22%2C%22%24initial_referring_domain%22%3A%20%22pro.upstox.com%22%7D; WZRK_G=244dfebba9214c3aa5268130314686d1; profile_id_web=8576772; auth_identity_token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJqdGkiOiJkNjgzMzIwNDhkMWM3MTZhM2U4YzZiZDNiOGZmMGFmYSIsImV4cCI6MTczNzYxNjYzM30.zd0aIZtQkXn6rNfH4eQNoCPGxIfofBhlq1puu_jVRSA; auth_identity_token_expiry=1737616632150; user_id=3KBR58; utm_referer=https%3A%2F%2Fwww.google.co.in%2F; _gid=GA1.2.2103172375.1737044348; _rdt_uuid=1731745763676.461ef494-e46b-48d4-9391-32fa95d774f3; _ga_CLCPGTZJXV=GS1.1.1737053821.33.1.1737055642.60.0.0; access_token=eyJ0eXAiOiJKV1QiLCJraWQiOiJpZHQtODAxYzAxZmEtOWRmNy00YjMyLThjZmItNzE2MzgxZjQ0YzAxIiwiYWxnIjoiUlMyNTYifQ.eyJzdWIiOiI4NTc2NzcyIiwianRpIjoiR0k0VGllbkNFaTc5UUJWWXdKTkw3cVRKY0NZIiwiaWF0IjoxNzM3MDU1NjcyLCJleHAiOjE3MzcwNTkyNzIsImlzcyI6ImxvZ2luLXNlcnZpY2UiLCJzY29wZSI6W10sImNsaWVudF9pZCI6IlBXMy02QWdkMzdQQjUyUTZCNkREcFlXTHVUN2IiLCJrZXlfaWQiOiJpZHQtODAxYzAxZmEtOWRmNy00YjMyLThjZmItNzE2MzgxZjQ0YzAxIiwicmVmcmVzaF90b2tlbl9pZCI6IkVnWjRfcXluUDRqZjRwUGNZUWZFUEpQVC1TRSIsInR5cGUiOiJhY2Nlc3NfdG9rZW4iLCJyb2xlIjoiQ1VTVE9NRVIiLCJ1c2VyX3R5cGUiOiJDVVNUT01FUiIsInVzZXJfaWQiOiIzS0JSNTgiLCJ2ZXJzaW9uIjoiVjIiLCJzdHAiOiJPTVMzIn0.WJfeq8NP37QF_LOLyvnj4hqc4cxC8-Ay6KaV8dof_Rwb2Gjl8YzIL8ftILJxZHsmvWbNo7RH18tXNn72kmCccUy7qaONyJ6k49VvN5cReeh5NVoDlNziwqgkP4TI7kAJwQXMM6q143D13T-DH-_Gter8qNHBHQj3cgJvuhp7IlAmuc_75UaH6ONpNsvPRsWYo_rH3-Mrqbmgx3nNDlBu06GGw_qgWFGYI4zygnmOLe728BjTzvN33azZ55fLcKFIfs3IfnQDkKMt8PYgwG3zvDExv6knNKWFMeYAxNobHzzAqRB30BRgictKWG5oScIPK_Xl61sTdPR-X9__Gu5IXQ; refresh_token=eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJzdWIiOiI4NTc2NzcyIiwianRpIjoiRWdaNF9xeW5QNGpmNHBQY1lRZkVQSlBULVNFIiwiaWF0IjoxNzM3MDU1NjcyLCJleHAiOjE3MzcxNDIwNzIsImlzcyI6ImxvZ2luLXNlcnZpY2UiLCJzY29wZSI6W10sImNsaWVudF9pZCI6IlBXMy02QWdkMzdQQjUyUTZCNkREcFlXTHVUN2IiLCJrZXlfaWQiOiJpZHQtODAxYzAxZmEtOWRmNy00YjMyLThjZmItNzE2MzgxZjQ0YzAxIiwiYXRpIjoiR0k0VGllbkNFaTc5UUJWWXdKTkw3cVRKY0NZIiwicmVmcmVzaF90b2tlbl9pZCI6IkVnWjRfcXluUDRqZjRwUGNZUWZFUEpQVC1TRSIsInR5cGUiOiJyZWZyZXNoX3Rva2VuIiwicm9sZSI6IkNVU1RPTUVSIiwidXNlcl90eXBlIjoiQ1VTVE9NRVIiLCJ1c2VyX2lkIjoiM0tCUjU4IiwidmVyc2lvbiI6IlYyIiwic3RwIjoiT01TMyJ9.fuacfKrmyh9Urk0mQFZBkaRf0nCBIyudsKhFHEKE-9tT-zjO8qWxEVjnhWY9Wa1xCES6J5hhLn4zz3dZwSXX4JmEYVPT8n3lIh8YKPOh19TWH_Xd-Nb74E-sDLT49VspZ6ZA84p9dAFBlJPWwZvAEmyjKEnlFdQoLAzQ4GgqB2ZRKJG6u9yu8A0HEBsmPJTQqJHp_S_NUgTTyFqtWCzbodhjN4QG2NTSBCw9gC0LAMO0OwzaEhsjAmfwHMUZdZd-nZGh3OBVP2wM1X-y9bXOvNH4buVDibg6Yt8J9wl9xSIRVlhcg0-P2bChLh1Ta7azwgnLbFPpl-rizCDrHt7u5Q; mp_62597aa51842e6e2c56b97d96e4c5f8a_mixpanel=%7B%22distinct_id%22%3A%20%228576772%22%2C%22%24device_id%22%3A%20%221945c97df0ed34a00-03202e79ddce11-26011851-1fa400-1945c97df0ed34a00%22%2C%22%24initial_referrer%22%3A%20%22https%3A%2F%2Fpro.upstox.com%2F%22%2C%22%24initial_referring_domain%22%3A%20%22pro.upstox.com%22%2C%22__mps%22%3A%20%7B%7D%2C%22__mpso%22%3A%20%7B%7D%2C%22__mpus%22%3A%20%7B%7D%2C%22__mpa%22%3A%20%7B%7D%2C%22__mpu%22%3A%20%7B%7D%2C%22__mpr%22%3A%20%5B%5D%2C%22__mpap%22%3A%20%5B%5D%2C%22%24user_id%22%3A%20%228576772%22%2C%22Platform%22%3A%20%22ProWeb3%22%7D; _ga=GA1.1.708249857.1730892005; _ga_RLJ6WSLNCC=GS1.1.1737055678.17.0.1737055678.0.0.0; WZRK_S_88W-7Z6-676Z=%7B%22p%22%3A2%2C%22s%22%3A1737055678%2C%22t%22%3A1737055860%7D; __cf_bm=2FLHmvPblS6RTqWqHS2pKtVASqhzd5fdoPAAjBdd4iY-1737056045-1.0.1.1-Hg3Kr.QNSC6hYisC4uGgF4s02IAIeDV0oQsgKjkKiWxTVuONdjmN1yTsBFTl1osm; __cfruid=417a3f17eef54ef3389c6f14b16bb39dcf1610c8-1737056045; _cfuvid=L2sdQe6KRb4Wj8kinC5sdRrLIGZw9JsZ4zQmt7lCt4g-1737056045451-0.0.1.1-604800000";
            // $response = Http::withHeaders([
            //     'cookie' => $cookie,
            // ])->get($url);
            // $data = $response->json();




            $fetchList =  $data['data']['searchList'];
            foreach ($fetchList as $fetch) {


                $instrumentKey = $fetch['attributes']['instrumentKey'];

                $tradingSymbol = $fetch['attributes']['tradingSymbol'];
                $segment = $fetch['attributes']['segment'];
                $expiry = $fetch['attributes']['expiry'] ?? 'N/A';
                $instrumentType = $fetch['attributes']['instrumentType'];
                $assetSymbol = $fetch['attributes']['assetSymbol'] ?? 'N/A';
                $strikePrice = $fetch['attributes']['strikePrice'] ?? 'N/A';
                $exchange = $fetch['attributes']['exchange'];
                // if($exchange != 'MCX'){
                //     continue;
                // }
                $assetType = $fetch['attributes']['assetType'] ?? 'N/A';
                $assetKey = $fetch['attributes']['assetKey'] ?? 'N/A';
                // NSE_EQ|INE113A01013 remove "NSE_EQ|" from assetKey 
                // $isIn = "";
                
               if($assetKey == 'N/A'){
                $isIn = "";
               }else{
                $isIn = explode('|', $assetKey)[1];
               }
                
                $searchedField = $fetch['attributes']['searchedField'];
                $exchangeToken = $fetch['attributes']['exchangeToken'];
                $assetToken = $fetch['attributes']['assetToken'] ?? 'N/A';

                // INSERT INTO `future_temp`(`id`, `instrumentKey`, `tradingSymbol`, `segment`, `expiry`, `instrumentType`, `assetSymbol`, `exchange`, `assetType`, `assetKey`, `isIn`, `exchangeToken`, `assetToken`, `created_at`, `updated_at`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]','[value-13]','[value-14]','[value-15]') 

                $insert = DB::table('future_temp')->insert([
                    'instrumentKey' => $instrumentKey,
                    'tradingSymbol' => $tradingSymbol,
                    'segment' => $segment,
                    'expiry' => $expiry,
                    'instrumentType' => $instrumentType,
                    'assetSymbol' => $assetSymbol,
                    'exchange' => $exchange,
                    'assetType' => $assetType,
                    'isIn' => $isIn,
                    'assetKey' => $assetKey,
                    'exchangeToken' => $exchangeToken,
                    'assetToken' => $assetToken,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);

                if ($insert) {
                    echo "Inserted";
                } else {
                    echo "Not Inserted";
                }
            }

            // exit;
        }
    }

    public function runUpdateLotSize()
    {


        UpdateLotSizeJob::dispatch();
        return response()->json(['message' => 'Lot size update started in the background.']);

        // fetch data from https://service.upstox.com/instrument/v1/instruments?instrumentKeys=NSE_FO|42523&pageNo=1&pageSize=1
        // $getSymbol = DB::table('future_temp')->where('lotSize', 0)->where('exchange', 'NSE')->where('assetType', 'EQUITY')->where('instrumentType', 'FUT')->get('instrumentKey');
        // // $i = 1;
        // foreach ($getSymbol as $symbol) {
        //     // return $symbol->instrumentKey;
        //     $url = "https://service.upstox.com/instrument/v1/instruments?instrumentKeys=" . $symbol->instrumentKey . "&pageNo=1&pageSize=1";
        //     $cookie = "access_token=eyJ0eXAiOiJKV1QiLCJraWQiOiJpZHQtODAxYzAxZmEtOWRmNy00YjMyLThjZmItNzE2MzgxZjQ0YzAxIiwiYWxnIjoiUlMyNTYifQ.eyJzdWIiOiI4NTc2NzcyIiwianRpIjoiS0FHamN0aDY0MU9nbVFERWhhbEZQakFQSUJRIiwiaWF0IjoxNzQzOTcyOTA1LCJleHAiOjE3NDM5NzY1MDUsImlzcyI6ImxvZ2luLXNlcnZpY2UiLCJzY29wZSI6WyJzZXJ2aWNlOnJlYWQiLCJzZXJ2aWNlOndyaXRlIl0sImNsaWVudF9pZCI6IklORC1ueWp2NzB1OXhjZzJ0OGUzaGtycGRtNWIiLCJrZXlfaWQiOiJpZHQtODAxYzAxZmEtOWRmNy00YjMyLThjZmItNzE2MzgxZjQ0YzAxIiwicmVmcmVzaF90b2tlbl9pZCI6InJkRnVaRE9qaGtuY0Z0SS1oQmE4X19Gei1aVSIsInR5cGUiOiJhY2Nlc3NfdG9rZW4iLCJyb2xlIjoiQ1VTVE9NRVIiLCJ1c2VyX3R5cGUiOiJDVVNUT01FUiIsInVzZXJfaWQiOiIzS0JSNTgiLCJ2ZXJzaW9uIjoiVjIiLCJzdHAiOiJPTVMzIn0.YiaoHJ7PUbfD_irvkzpns7BEbnHYWAqh0FhlYqv8-NmYgaA_CuhAz2XVrRr34xBk4aVSTU1yWpF13Q-3guD_i5KVZtn925LDWQOvgRVPbaEAmvPya1hGAOmDMo59_RYF9_CYLOb_Egn2YoDLHWJRCd2UUlMqXPEycYwnYz7Wunsq_u2DMxC702n6-h4QKqCZrMppen4-KviVfQ7O0c0SO3Jild-93qTKd6gNonQ6Roa5HNciYTI6t6TNF3UzNjm6tDrSC_LhTss28Z_ivBep3CcYyqfxkzmDPEXNRZLwLplLcw-RSSMyPXAzQIojYbSmdw2Q7ZmlfAmrbAds4tGXAQ";
        //     $response = Http::withHeaders([
        //         'cookie' => $cookie,
        //     ])->get($url);
        //     $data = $response->json();
        //     // return $data;
        //     // if $data['data']['instrumentList'][0] not set then continue
        //     if (!isset($data['data']['instrumentList'][0])) {
        //         continue;
        //     }
        //     if ($data['data']['instrumentList'][0]['lotSize'] != null) {
        //         $lotSize = $data['data']['instrumentList'][0]['lotSize'];
        //         $update = DB::table('future_temp')->where('instrumentKey', $symbol->instrumentKey)->update([
        //             'lotSize' => $lotSize
        //         ]);
        //         if ($update) {
        //             echo "Updated ";
        //         } else {
        //             echo "Not Updated ";
        //         }
        //     }
        // }
    }


    public function quotes()
    {
        $userId = Auth::id();
        $cacheKey = "user_{$userId}_watchlist";
    
        if (Cache::has($cacheKey)) {
            Log::info("Data loaded from Redis for user: " . $userId);
            $fetch = Cache::get($cacheKey);
            // return response()->json(['source' => 'Redis', 'data' => $fetch]);
        } else {
            Log::info("Fetching data from database for user: " . $userId);
            $fetch = DB::table('watchlist')->where('userid', $userId)->orderBy('id','DESC')->get()->toArray();
            Cache::put($cacheKey, $fetch, now()->addMinutes(10));
            // return response()->json(['source' => 'Database', 'data' => $fetch]);
        }

        return view('quote', compact('fetch'));
    }
    


    public function stockDetails($id){
        $stock = DB::table('future_temp')->where('instrumentKey', $id)->first();
        return view('stockDetails', compact('stock'));
    }
}
