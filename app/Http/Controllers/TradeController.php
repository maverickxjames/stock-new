<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TradeController extends Controller
{
   
    public function placeBuyOrder(Request $r){
        return $r;
        $user = Auth::user();
        
        $wallet->balance = $wallet->balance - $total;
        $wallet->save();
        $order = new Order();
        $order->user_id = $user->id;
        $order->stock_id = $stock->id;
        $order->price = $price;
        $order->quantity = $quantity;
        $order->total = $total;
        $order->type = 'buy';
        $order->save();
        return response()->json(['status' => 'success', 'message' => 'Order placed successfully']);
    }
}
