<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equity;
use Illuminate\Support\Facades\DB;

class CronController extends Controller
{
   public function expireToken(){
    DB::table('upstocks')->update([
        "isExpired" => 1
    ]);
   }
   public function expireCookie(){
    DB::table('upstocks')->update([
        "isCookieExpired" => 1
    ]);
   }

    
}
