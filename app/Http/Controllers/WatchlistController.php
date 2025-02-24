<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Events\QuoteChannel;

use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\JsonResponse;
// Helper 
use App\Providers\Helper;
// db facades
use Illuminate\Support\Facades\DB;
// import model wathclist
use App\Models\Watchlist;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class WatchlistController extends Controller
{
    public function watchlist(Request $request)
    {
        return view('watchlist');
    }



 

    public function addWatchlist(Request $request)
    {
        Helper::forgetCache(auth()->id(),'watchlist');
        $isExists = Watchlist::where('userid', auth()->id())
            ->where('instrumentKey', $request->instrumentKey)
            ->exists();

        if ($isExists) {
            return response()->json([
                'success' => false,
                'message' => 'Script already exists.',
            ], 409);
        }

        $query = DB::table('watchlist')->insert([
            'instrumentKey' => $request->instrumentKey,
            'tradingSymbol' => $request->tradingSymbol,
            'segment' => $request->segment,
            'expiry' => $request->expiry,
            'instrumentType' => $request->instrumentType,
            'assetSymbol' => $request->assetSymbol,
            'exchange' => $request->exchange,
            'assetType' => $request->assetType,
            'assetKey' => $request->assetKey,
            'isIn' => $request->isIn,
            'exchangeToken' => $request->exchangeToken,
            'assetToken' => $request->assetToken,
            'script_id' => $request->id,
            'userid' => auth()->id(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        if ($query) {
            // quote-channel event trigger
            event(new QuoteChannel(auth()->id(), 'add'));
            
        //    if app_env is production  

            if (config('app.env') == 'production') {
                 // Restart Supervisor process
                    $process = new Process(['sudo', 'supervisorctl', 'restart', 'marketdata']);
                    $process->run();
                    
                        // Check if the process failed
                    if (!$process->isSuccessful()) {
                        throw new ProcessFailedException($process);
                    }
            }

            return response()->json([
                'success' => true,
                'message' => 'Script added successfully.',
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Failed to add script.',
            ], 500);
        }
    }
    

    public function removeWatchlist(Request $request)
    {
        Helper::forgetCache(auth()->id(),'watchlist');
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
            $watchlist = Watchlist::find($request->id);

            if ($watchlist) {
                $watchlist->delete();
                event(new QuoteChannel(auth()->id(), 'remove'));
                return response()->json([
                    'success' => true,
                    'message' => 'script removed successfully.',
                ], 200);
            } else {
                // Return an error response if the watchlist entry does not exist
                return response()->json([
                    'success' => false,
                    'message' => 'script not found.',
                ], 404);
            }
        } catch (\Exception $e) {
            // Handle any errors that occur during deletion
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while removing the script.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
