<?php

namespace App\Http\Controllers;
use App\Providers\Helper;
use Illuminate\Http\Request;
use App\Models\watchlist;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class ScriptController extends Controller
{
    public function future(){
    $user = Auth::user();
    $apidata = Helper::allCompanyData($user->id);
    event(new \App\Events\Watchlist($apidata));

    }

    public function test(){
        
        while(true){
            $apidata = Helper::fluctuateNumber('24775');

            event(new \App\Events\Watchlist($apidata));
            sleep(1);
        }

    }

    public function deleteExpiredStock()
{
    // Get today's date
    $today = Carbon::today();

    // Delete expired stocks
    DB::table('future_temp')
        ->whereRaw("STR_TO_DATE(expiry, '%d %b %y') < ?", [$today])
        ->delete();

    return response()->json(['message' => 'Expired stocks deleted successfully.']);
}
}
