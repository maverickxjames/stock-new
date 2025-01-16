<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;

use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\JsonResponse;
// db facades
use Illuminate\Support\Facades\DB;
// import model wathclist
use App\Models\Watchlist;

class WatchlistController extends Controller
{
    public function watchlist(Request $request)
    {
        return view('watchlist');
    }

    public function fetchWatchlist(Request $request)
    {

        $token = DB::select("SELECT * FROM upstocks WHERE isExpired = 0 ORDER BY id DESC LIMIT 1");
        // $accessToken = "";
        if ($token) {
            $accessToken = $token[0]->token;
        } else {
            return response()->json([
                'success' => false,
                'message' => 'No token found',
            ], 500);
        }

        $instrumentKeys = "";

        $watchlist = DB::table('equities')
            ->whereIn('id', function ($query) {
                $query->select('script_name') // Replace 'equity_id' with the correct column name from watchlists
                    ->distinct()
                    ->from('watchlists');
            })
            ->get(['Isin']);

        foreach ($watchlist as $key => $value) {
            $instrumentKeys .= 'NSE_EQ|' . $value->Isin . ',';
        }

        $instrumentKeys = rtrim($instrumentKeys, ',');





        try {
            $response = Http::withHeaders([
                'Accept' => 'application/json',
                'Authorization' => 'Bearer ' . $accessToken,
            ])->get('https://api.upstox.com/v2/market-quote/quotes', [
                'instrument_key' => $instrumentKeys,
            ]);

            if ($response->successful()) {
                // websocket
                $data = $response->json();

                event(new \App\Events\Watchlist($data));
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Failed to fetch data from API',
                    'error' => $response->json(),
                ], $response->status());
            }
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function addWatchlist(Request $request)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'segment' => 'required|integer',                     // Segment is required and must be an integer
            'script' => 'required|string',                      // Script name is required and must be a string
            'expiry' => 'required',           // Expiry must be in YYYY-MM-DD format
            'callPut' => 'nullable|string|in:CE,PE',            // Call/Put is optional but must be CE or PE
            'strike' => 'nullable|numeric',                     // Strike is optional but must be a number
        ]);

        $tradingSymbol = DB::table('equities')
            ->where('id', $request->script)
            ->value('symbol');

        $isExists = Watchlist::where('userid', auth()->id())
            ->where('tradingSymbol', $tradingSymbol)
            ->exists();

        if ($isExists) {
            return response()->json([
                'success' => false,
                'message' => 'Watchlist entry already exists.',
            ], 409);
        }


        // Return validation errors, if any
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation error.',
                'errors' => $validator->errors(),
            ], 422);
        }




        if($request->segment == 1) {
            $tradingSymbol = $tradingSymbol . ' FUT '.$request->expiry;
            $tradingData = DB::table('future_temp')->where('tradingSymbol', $tradingSymbol)->get();
            // INSERT INTO `watchlist`(`id`, `instrumentKey`, `tradingSymbol`, `segment`, `expiry`, `instrumentType`, `assetSymbol`, `exchange`, `assetType`, `assetKey`, `isIn`, `exchangeToken`, `assetToken`, `created_at`, `updated_at`, `script_id`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]','[value-13]','[value-14]','[value-15]','[value-16]')
            $query = DB::table('watchlist')->insert([
                'instrumentKey' => $tradingData[0]->instrumentKey,
                'tradingSymbol' => $tradingData[0]->tradingSymbol,
                'segment' => $tradingData[0]->segment,
                'expiry' => $tradingData[0]->expiry,
                'instrumentType' => $tradingData[0]->instrumentType,
                'assetSymbol' => $tradingData[0]->assetSymbol,
                'exchange' => $tradingData[0]->exchange,
                'assetType' => $tradingData[0]->assetType,
                'assetKey' => $tradingData[0]->assetKey,
                'isIn' => $tradingData[0]->isIn,
                'exchangeToken' => $tradingData[0]->exchangeToken,
                'assetToken' => $tradingData[0]->assetToken,
                'script_id' => $request->script,
                'userid' => auth()->id(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            if($query){
                return response()->json([
                    'success' => true,
                    'message' => 'Watchlist entry added successfully.',
                ], 201);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Failed to add watchlist entry.',
                ], 500);
            }
        }
    }

    public function removeWatchlist(Request $request)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'id' => 'required|integer', // ID is required and must be an integer
        ]);

        // Return validation errors, if any
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation error.',
                'errors' => $validator->errors(),
            ], 422);
        }

        try {
            // Find the watchlist entry by ID
            $watchlist = Watchlist::find($request->id);

            // Check if the watchlist entry exists
            if ($watchlist) {
                // Delete the watchlist entry
                $watchlist->delete();

                // Return a success response
                return response()->json([
                    'success' => true,
                    'message' => 'Watchlist entry removed successfully.',
                ], 200);
            } else {
                // Return an error response if the watchlist entry does not exist
                return response()->json([
                    'success' => false,
                    'message' => 'Watchlist entry not found.',
                ], 404);
            }
        } catch (\Exception $e) {
            // Handle any errors that occur during deletion
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while removing the watchlist entry.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
