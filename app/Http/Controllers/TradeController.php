<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\trade;


class TradeController extends Controller
{

    public function updatefeed(Request $r){
        return $r;
    }

    public function placeBuyOrder(Request $r)
    {
       
        $instrumentKey = $r->instrumentKey;
        $lotSize = $r->lotSize;
        $orderType = $r->orderType;
        $limitPrice = $r->limitPrice;
        $price = $r->price;
        $tradeType = $r->tradeType;
        $user = Auth::user();



        $stockData = DB::table('future_temp')->where('instrumentKey', $instrumentKey)->get();
        if ($stockData->count() > 0) {

            if ($stockData[0]->segment == 'NSE_FO') {
                // starttime = 9:15AM (MON - FRIDAY) to 3:30 PM  (MON - FRIDAY) 
                $start_time = strtotime('09:15:00');
                $end_time = strtotime('15:30:00');
                $current_time = strtotime(date('H:i:s'));
                if (false) {
                // if ($current_time < $start_time || $current_time > $end_time) {
                    echo json_encode(['status' => 'error', 'message' => 'Market is closed']);
                    exit;
                } else {
                    if ($stockData[0]->instrumentType == 'FUT') {
                        if ($orderType == 'market') {
                            $margin = 500;
                            $quantity = $lotSize * $stockData[0]->lotSize;
                            $cost = $quantity * $price;
                            $total_cost = $cost / $margin;

                            if ($tradeType == 'delivery' || $tradeType == 'intraday') {
                                if ($user->real_wallet >= $total_cost) {
                                    $user->wallet = $user->real_wallet - $total_cost;
                                    $updateBalance = DB::table('users')->where('id', $user->id)->update(['real_wallet' => $user->wallet]);

                                    $trade = new trade();
                                    // INSERT INTO `trades`(`id`, `user_id`, `stock_symbol`, `stock_name`, `instrumentKey`, `action`, `order_type`, `tradeType`, `duration`, `price`, `quantity`, `lotSize`, `take_profit`, `stop_loss`, `stop_price`, `margin`, `cost`, `total_cost`, `status`, `created_at`, `updated_at`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]','[value-13]','[value-14]','[value-15]','[value-16]','[value-17]','[value-18]','[value-19]','[value-20]','[value-21]') 
                                    $trade->user_id = $user->id;
                                    $trade->stock_symbol = $stockData[0]->assetSymbol;
                                    $trade->stock_name = $stockData[0]->tradingSymbol;
                                    $trade->instrumentKey = $stockData[0]->instrumentKey;
                                    $trade->expiry = $stockData[0]->expiry;
                                    $trade->action = 'BUY';
                                    $trade->order_type = $orderType;
                                    $trade->tradeType = 'FUT';
                                    $trade->duration = $tradeType;
                                    $trade->price = $price;
                                    $trade->quantity = $quantity;
                                    $trade->lotSize = $lotSize;
                                    $trade->margin = $margin;
                                    $trade->cost = $cost;
                                    $trade->total_cost = $total_cost;
                                    $trade->status = 'processing';
                                    $trade->save();


                                    echo json_encode(['status' => 'success', 'message' => 'Order placed']);
                                } else {
                                    echo json_encode(['status' => 'error', 'message' => 'Insufficient balance']);
                                }
                            }
                        } elseif ($orderType == 'limit') {
                            $margin = 500;
                            $quantity = $lotSize * $stockData[0]->lotSize;
                            $cost = $quantity * $limitPrice;
                            $total_cost = $cost / $margin;

                            if ($tradeType == 'delivery' || $tradeType == 'intraday') {
                                if ($user->real_wallet >= $total_cost) {
                                    $user->wallet = $user->real_wallet - $total_cost;
                                    $updateBalance = DB::table('users')->where('id', $user->id)->update(['real_wallet' => $user->wallet]);

                                    $trade = new trade();
                                    // INSERT INTO `trades`(`id`, `user_id`, `stock_symbol`, `stock_name`, `instrumentKey`, `action`, `order_type`, `tradeType`, `duration`, `price`, `quantity`, `lotSize`, `take_profit`, `stop_loss`, `stop_price`, `margin`, `cost`, `total_cost`, `status`, `created_at`, `updated_at`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]','[value-13]','[value-14]','[value-15]','[value-16]','[value-17]','[value-18]','[value-19]','[value-20]','[value-21]') 
                                    $trade->user_id = $user->id;
                                    $trade->stock_symbol = $stockData[0]->assetSymbol;
                                    $trade->stock_name = $stockData[0]->tradingSymbol;
                                    $trade->instrumentKey = $stockData[0]->instrumentKey;
                                    $trade->expiry = $stockData[0]->expiry;
                                    $trade->action = 'BUY';
                                    $trade->order_type = $orderType;
                                    $trade->tradeType = 'FUT';
                                    $trade->duration = $tradeType;
                                    $trade->price = $limitPrice;
                                    $trade->quantity = $quantity;
                                    $trade->lotSize = $lotSize;
                                    $trade->margin = $margin;
                                    $trade->cost = $cost;
                                    $trade->total_cost = $total_cost;
                                    $trade->status = 'pending';
                                    $trade->save();


                                    echo json_encode(['status' => 'success', 'message' => 'Order placed']);
                                } else {
                                    echo json_encode(['status' => 'error', 'message' => 'Insufficient balance']);
                                }
                            }
                        }
                    } elseif ($stockData[0]->instrumentType == 'CE' || $stockData[0]->instrumentType == 'PE') {
                        $margin = 7;
                    } else {
                        $margin = 0;
                    }
                }
            }
        } else {
            return response()->json(['status' => 'error', 'message' => 'Stock not found']);
        }
    }

    public function placeSellOrder(Request $r)
    {
        $instrumentKey = $r->instrumentKey;
        $lotSize = $r->lotSize;
        $orderType = $r->orderType;
        $limitPrice = $r->limitPrice;
        $price = $r->price;
        $tradeType = $r->tradeType;
        $user = Auth::user();

        $stockData = DB::table('future_temp')->where('instrumentKey', $instrumentKey)->get();
        if($stockData->count()>0){
               if($stockData[0]->segment == 'NSE_FO'){
                    // starttime = 9:15AM (MON - FRIDAY) to 3:30 PM  (MON - FRIDAY) 
                    $start_time = strtotime('09:15:00');
                    $end_time = strtotime('15:30:00');
                    $current_time = strtotime(date('H:i:s'));

                    if(false){
                    // if($current_time < $start_time || $current_time > $end_time){
                        echo json_encode(['status'=>'error','message'=>'Market is closed']);
                        exit;
                    }else{
                        if($stockData[0]->instrumentType == 'FUT'){
                                if($orderType =='market'){
                                        $margin = 500;
                                        $quantity = $lotSize * $stockData[0]->lotSize;
                                        $cost = $quantity * $price;
                                        $total_cost = $cost / $margin;

                                       if($tradeType=='delivery' || $tradeType=='intraday'){
                                        if($total_cost <= $user->real_wallet){
                                            $user->wallet = $user->real_wallet - $total_cost;
                                            $updateBalance = DB::table('users')->where('id', $user->id)->update(['real_wallet' => $user->wallet]);

                                            $trade = new trade();
                                            $trade->user_id = $user->id;
                                            $trade->stock_symbol = $stockData[0]->assetSymbol;
                                            $trade->stock_name = $stockData[0]->tradingSymbol;
                                            $trade->instrumentKey = $stockData[0]->instrumentKey;
                                            $trade->expiry = $stockData[0]->expiry;
                                            $trade->action = 'SELL';
                                            $trade->order_type = $orderType;
                                            $trade->tradeType = 'FUT';
                                            $trade->duration = $tradeType;
                                            $trade->price = $price;
                                            $trade->quantity = $quantity;
                                            $trade->lotSize = $lotSize;
                                            $trade->margin = $margin;
                                            $trade->cost = $cost;
                                            $trade->total_cost = $total_cost;
                                            $trade->status = 'processing';
                                            $trade->save();

                                            echo json_encode(['status'=>'success','message'=>'Order placed ']);
                                        }else{
                                            echo json_encode(['status'=>'error','message'=>'Insufficient balance']);
                                        }
                                       }
                                }else if($orderType == 'limit'){
                                        $margin = 500;
                                        $quantity = $lotSize * $stockData[0]->lotSize;
                                        $cost = $quantity * $limitPrice;
                                        $total_cost = $cost / $margin;

                                       if($tradeType=='delivery' || $tradeType=='intraday'){
                                        if($total_cost <= $user->real_wallet){
                                            $user->wallet = $user->real_wallet - $total_cost;
                                            $updateBalance = DB::table('users')->where('id', $user->id)->update(['real_wallet' => $user->wallet]);

                                            $trade = new trade();
                                            $trade->user_id = $user->id;
                                            $trade->stock_symbol = $stockData[0]->assetSymbol;
                                            $trade->stock_name = $stockData[0]->tradingSymbol;
                                            $trade->instrumentKey = $stockData[0]->instrumentKey;
                                            $trade->expiry = $stockData[0]->expiry;
                                            $trade->action = 'SELL';
                                            $trade->order_type = $orderType;
                                            $trade->tradeType = 'FUT';
                                            $trade->duration = $tradeType;
                                            $trade->price = $limitPrice;
                                            $trade->quantity = $quantity;
                                            $trade->lotSize = $lotSize;
                                            $trade->margin = $margin;
                                            $trade->cost = $cost;
                                            $trade->total_cost = $total_cost;
                                            $trade->status = 'pending';
                                            $trade->save();

                                            echo json_encode(['status'=>'success','message'=>'Order placed']);
                                        }else{
                                            echo json_encode(['status'=>'error','message'=>'Insufficient balance']);
                                        }
                                       }
                                }
                        } elseif($stockData[0]->instrumentType == 'CE' || $stockData[0]->instrumentType == 'PE'){
                            $margin = 7;
                        }else{
                            $margin = 0;
                        }
                    }
                       


               }
        }else{
            return response()->json(['status'=>'error','message'=>'Stock not found']);
        }
    }

    public function tradeDetails(Request $r)
    {
        $tradeId = $r->tradeId;
        $trade = DB::table('trades')->where('id', $tradeId)->get();
        return view('tradeDetail', ['trade' => $trade]);
    }
}
