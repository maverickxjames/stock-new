<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\trade;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;


class TradeController extends Controller
{


    public function placeBuyOrder(Request $r)
    {
        // return $r;
        $orderId = "buy_" . uniqid();
        $instrumentKey = $r->instrumentKey;
        $lotSize = $r->lotSize;
        $orderType = $r->orderType;
        $limitPrice = $r->limitPrice;
        
        if ($r->targetPrice != null) {
            $targetPrice = $r->targetPrice;
        } else {
            $targetPrice = null;
        }
        if($r->stoploss!=null){
            $stoploss = $r->stoploss;
        }else{
            $stoploss = null;
        }

        if ($orderType == 'stoplossMarket' && $r->targetPrice == 0) {
            $orderType = 'market';
        } elseif ($orderType == 'stoplossLimit' && $r->targetPrice == 0) {
            $orderType = 'limit';
        }


        // return $targetPrice;
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

                // if (false) {
                    if ($current_time < $start_time || $current_time > $end_time) {
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
                                    $trade->orderId = $orderId;
                                    $trade->stock_symbol = $stockData[0]->assetSymbol;
                                    $trade->stock_name = $stockData[0]->tradingSymbol;
                                    $trade->instrumentKey = $stockData[0]->instrumentKey;
                                    $trade->expiry = $stockData[0]->expiry;
                                    $trade->action = 'BUY';
                                    $trade->order_type = $orderType;
                                    $trade->segment=$stockData[0]->segment;
                                    $trade->tradeType = 'FUT';
                                    $trade->duration = $tradeType;
                                    $trade->price = $price;
                                    $trade->ltp = $price;
                                    $trade->quantity = $quantity;
                                    $trade->stop_loss = $stoploss;
                                    $trade->target_price = $targetPrice;
                                    $trade->lotSize = $lotSize;
                                    $trade->margin = $margin;
                                    $trade->cost = $cost;
                                    $trade->total_cost = $total_cost;
                                    $trade->status = 'executed';
                                    $trade->save();

                                    if (config('app.env') == 'production') {
                                        // Restart Supervisor process
                                           $process = new Process(['sudo', 'supervisorctl', 'restart', 'markettradedata']);
                                           $process->run();
                                           
                                               // Check if the process failed
                                           if (!$process->isSuccessful()) {
                                               throw new ProcessFailedException($process);
                                           }
                                   }


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
                                    $trade->orderId = $orderId;
                                    $trade->stock_symbol = $stockData[0]->assetSymbol;
                                    $trade->stock_name = $stockData[0]->tradingSymbol;
                                    $trade->instrumentKey = $stockData[0]->instrumentKey;
                                    $trade->expiry = $stockData[0]->expiry;
                                    $trade->action = 'BUY';
                                    $trade->order_type = $orderType;
                                    $trade->tradeType = 'FUT';
                                    $trade->duration = $tradeType;
                                    $trade->segment=$stockData[0]->segment;
                                    $trade->price = $limitPrice;
                                    $trade->ltp = $price;
                                    $trade->quantity = $quantity;
                                    $trade->stop_loss = $stoploss;
                                    $trade->target_price = $targetPrice;
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
                        } elseif ($orderType == 'stoplossMarket') {
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
                                    $trade->orderId = $orderId;
                                    $trade->stock_symbol = $stockData[0]->assetSymbol;
                                    $trade->stock_name = $stockData[0]->tradingSymbol;
                                    $trade->instrumentKey = $stockData[0]->instrumentKey;
                                    $trade->expiry = $stockData[0]->expiry;
                                    $trade->action = 'BUY';
                                    $trade->order_type = $orderType;
                                    $trade->segment=$stockData[0]->segment;
                                    $trade->tradeType = 'FUT';
                                    $trade->duration = $tradeType;
                                    $trade->price = $price;
                                    $trade->ltp = $price;
                                    $trade->stop_loss = $stoploss;
                                    $trade->target_price = $targetPrice;
                                    $trade->quantity = $quantity;
                                    $trade->lotSize = $lotSize;
                                    $trade->margin = $margin;
                                    $trade->cost = $cost;
                                    $trade->total_cost = $total_cost;
                                    $trade->status = 'executed';
                                    $trade->save();

                                    if (config('app.env') == 'production') {
                                        // Restart Supervisor process
                                           $process = new Process(['sudo', 'supervisorctl', 'restart', 'markettradedata']);
                                           $process->run();
                                           
                                               // Check if the process failed
                                           if (!$process->isSuccessful()) {
                                               throw new ProcessFailedException($process);
                                           }
                                   }



                                    echo json_encode(['status' => 'success', 'message' => 'Order placed']);
                                } else {
                                    echo json_encode(['status' => 'error', 'message' => 'Insufficient balance']);
                                }
                            }
                        } elseif ($orderType == 'stoplossLimit') {
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
                                    $trade->orderId = $orderId;
                                    $trade->stock_symbol = $stockData[0]->assetSymbol;
                                    $trade->stock_name = $stockData[0]->tradingSymbol;
                                    $trade->instrumentKey = $stockData[0]->instrumentKey;
                                    $trade->expiry = $stockData[0]->expiry;
                                    $trade->action = 'BUY';
                                    $trade->order_type = $orderType;
                                    $trade->segment=$stockData[0]->segment;
                                    $trade->tradeType = 'FUT';
                                    $trade->duration = $tradeType;
                                    $trade->price = $limitPrice;
                                    $trade->ltp = $price;
                                    $trade->stop_loss = $stoploss;
                                    $trade->target_price = $targetPrice;
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
                        }
                    } elseif ($stockData[0]->instrumentType == 'CE' || $stockData[0]->instrumentType == 'PE') {
                        if ($orderType == 'market') {
                            $margin = 7; 
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
                                    $trade->orderId = $orderId;
                                    $trade->stock_symbol = $stockData[0]->assetSymbol;
                                    $trade->stock_name = $stockData[0]->tradingSymbol;
                                    $trade->instrumentKey = $stockData[0]->instrumentKey;
                                    $trade->expiry = $stockData[0]->expiry;
                                    $trade->action = 'BUY';
                                    $trade->order_type = $orderType;
                                    $trade->segment=$stockData[0]->segment;
                                    $trade->tradeType = $stockData[0]->instrumentType;
                                    $trade->duration = $tradeType;
                                    $trade->price = $price;
                                    $trade->ltp = $price;
                                    $trade->quantity = $quantity;
                                    $trade->stop_loss = $stoploss;
                                    $trade->target_price = $targetPrice;
                                    $trade->lotSize = $lotSize;
                                    $trade->margin = $margin;
                                    $trade->cost = $cost;
                                    $trade->total_cost = $total_cost;
                                    $trade->status = 'executed';
                                    $trade->save();

                                    if (config('app.env') == 'production') {
                                        // Restart Supervisor process
                                           $process = new Process(['sudo', 'supervisorctl', 'restart', 'markettradedata']);
                                           $process->run();
                                           
                                               // Check if the process failed
                                           if (!$process->isSuccessful()) {
                                               throw new ProcessFailedException($process);
                                           }
                                   }


                                    echo json_encode(['status' => 'success', 'message' => 'Order placed']);
                                } else {
                                    echo json_encode(['status' => 'error', 'message' => 'Insufficient balance']);
                                }
                            }
                        } elseif ($orderType == 'limit') {
                            $margin = 7;
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
                                    $trade->orderId = $orderId;
                                    $trade->stock_symbol = $stockData[0]->assetSymbol;
                                    $trade->stock_name = $stockData[0]->tradingSymbol;
                                    $trade->instrumentKey = $stockData[0]->instrumentKey;
                                    $trade->expiry = $stockData[0]->expiry;
                                    $trade->action = 'BUY';
                                    $trade->order_type = $orderType;
                                    $trade->segment=$stockData[0]->segment;
                                    $trade->tradeType = $stockData[0]->instrumentType;
                                    $trade->duration = $tradeType;
                                    $trade->price = $limitPrice;
                                    $trade->ltp = $price;
                                    $trade->quantity = $quantity;
                                    $trade->stop_loss = $stoploss;
                                    $trade->target_price = $targetPrice;
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
                        } elseif ($orderType == 'stoplossMarket') {
                            $margin = 7;
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
                                    $trade->orderId = $orderId;
                                    $trade->stock_symbol = $stockData[0]->assetSymbol;
                                    $trade->stock_name = $stockData[0]->tradingSymbol;
                                    $trade->instrumentKey = $stockData[0]->instrumentKey;
                                    $trade->expiry = $stockData[0]->expiry;
                                    $trade->action = 'BUY';
                                    $trade->order_type = 'market';
                                    $trade->segment=$stockData[0]->segment;
                                    $trade->tradeType = 'FUT';
                                    $trade->duration = 'intraday';
                                    // echo json_encode($targetPrice);
                                    // exit;
                                    // echo json_encode($targetPrice);
                                    // exit;
                                    $trade->price = $price;
                                    $trade->ltp = $price;
                                    $trade->stop_loss = $stoploss;
                                    $trade->target_price = $targetPrice;
                                    $trade->quantity = $quantity;
                                    $trade->lotSize = $lotSize;
                                    $trade->margin = $margin;
                                    $trade->cost = $cost;
                                    $trade->total_cost = $total_cost;
                                    $trade->status = 'executed';
                                    $trade->save();

                                    if (config('app.env') == 'production') {
                                        // Restart Supervisor process
                                           $process = new Process(['sudo', 'supervisorctl', 'restart', 'markettradedata']);
                                           $process->run();
                                           
                                               // Check if the process failed
                                           if (!$process->isSuccessful()) {
                                               throw new ProcessFailedException($process);
                                           }
                                   }


                                    echo json_encode(['status' => 'success', 'message' => 'Order placed']);
                                } else {
                                    echo json_encode(['status' => 'error', 'message' => 'Insufficient balance']);
                                }
                            }
                        } else {
                            $margin = 0;
                        }
                    }
                }
            } elseif ($stockData[0]->segment == 'MCX_FO') {
                // starttime = 9:15AM (MON - FRIDAY) to 11:30 PM  (MON - FRIDAY) 
                $start_time = strtotime('09:15:00');
                $end_time = strtotime('23:30:00');
                $current_time = strtotime(date('H:i:s'));

                // if (false) {
                if ($current_time < $start_time || $current_time > $end_time) {
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
                                    $trade->orderId = $orderId;
                                    $trade->stock_symbol = $stockData[0]->assetSymbol;
                                    $trade->stock_name = $stockData[0]->tradingSymbol;
                                    $trade->instrumentKey = $stockData[0]->instrumentKey;
                                    $trade->expiry = $stockData[0]->expiry;
                                    $trade->action = 'BUY';
                                    $trade->order_type = $orderType;
                                    $trade->segment=$stockData[0]->segment;
                                    $trade->tradeType = 'FUT';
                                    $trade->duration = $tradeType;
                                    $trade->price = $price;
                                    $trade->ltp = $price;
                                    $trade->quantity = $quantity;
                                    $trade->stop_loss = $stoploss;
                                    $trade->target_price = $targetPrice;
                                    $trade->lotSize = $lotSize;
                                    $trade->margin = $margin;
                                    $trade->cost = $cost;
                                    $trade->total_cost = $total_cost;
                                    $trade->status = 'executed';
                                    $trade->save();

                                    if (config('app.env') == 'production') {
                                        // Restart Supervisor process
                                           $process = new Process(['sudo', 'supervisorctl', 'restart', 'markettradedata']);
                                           $process->run();
                                           
                                               // Check if the process failed
                                           if (!$process->isSuccessful()) {
                                               throw new ProcessFailedException($process);
                                           }
                                   }


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
                                    $trade->orderId = $orderId;
                                    $trade->stock_symbol = $stockData[0]->assetSymbol;
                                    $trade->stock_name = $stockData[0]->tradingSymbol;
                                    $trade->instrumentKey = $stockData[0]->instrumentKey;
                                    $trade->expiry = $stockData[0]->expiry;
                                    $trade->action = 'BUY';
                                    $trade->order_type = $orderType;
                                    $trade->segment=$stockData[0]->segment;
                                    $trade->tradeType = 'FUT';
                                    $trade->duration = $tradeType;
                                    $trade->price = $limitPrice;
                                    $trade->ltp = $price;
                                    $trade->quantity = $quantity;
                                    $trade->stop_loss = $stoploss;
                                    $trade->target_price = $targetPrice;
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
                        }
                    } elseif ($stockData[0]->instrumentType == 'CE' || $stockData[0]->instrumentType == 'PE') {
                        if ($orderType == 'market') {
                            $margin = 7;
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
                                    $trade->orderId = $orderId;
                                    $trade->stock_symbol = $stockData[0]->assetSymbol;
                                    $trade->stock_name = $stockData[0]->tradingSymbol;
                                    $trade->instrumentKey = $stockData[0]->instrumentKey;
                                    $trade->expiry = $stockData[0]->expiry;
                                    $trade->action = 'BUY';
                                    $trade->order_type = $orderType;
                                    $trade->segment=$stockData[0]->segment;
                                    $trade->tradeType = $stockData[0]->instrumentType;
                                    $trade->duration = $tradeType;
                                    $trade->price = $price;
                                    $trade->ltp = $price;
                                    $trade->quantity = $quantity;
                                    $trade->stop_loss = $stoploss;
                                    $trade->target_price = $targetPrice;
                                    $trade->lotSize = $lotSize;
                                    $trade->margin = $margin;
                                    $trade->cost = $cost;
                                    $trade->total_cost = $total_cost;
                                    $trade->status = 'executed';
                                    $trade->save();

                                    if (config('app.env') == 'production') {
                                        // Restart Supervisor process
                                           $process = new Process(['sudo', 'supervisorctl', 'restart', 'markettradedata']);
                                           $process->run();
                                           
                                               // Check if the process failed
                                           if (!$process->isSuccessful()) {
                                               throw new ProcessFailedException($process);
                                           }
                                   }


                                    echo json_encode(['status' => 'success', 'message' => 'Order placed']);
                                } else {
                                    echo json_encode(['status' => 'error', 'message' => 'Insufficient balance']);
                                }
                            }
                        } elseif ($orderType == 'limit') {
                            $margin = 7;
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
                                    $trade->orderId = $orderId;
                                    $trade->stock_symbol = $stockData[0]->assetSymbol;
                                    $trade->stock_name = $stockData[0]->tradingSymbol;
                                    $trade->instrumentKey = $stockData[0]->instrumentKey;
                                    $trade->expiry = $stockData[0]->expiry;
                                    $trade->action = 'BUY';
                                    $trade->order_type = $orderType;
                                    $trade->segment=$stockData[0]->segment;
                                    $trade->tradeType = $stockData[0]->instrumentType;
                                    $trade->duration = $tradeType;
                                    $trade->price = $limitPrice;
                                    $trade->ltp = $price;
                                    $trade->stop_loss = $stoploss;
                                    $trade->target_price = $targetPrice;
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
                        }
                    } else {
                        $margin = 0;
                    }
                }
            } elseif($stockData[0]->segment=='NSE_INDEX'){
                  // starttime = 9:15AM (MON - FRIDAY) to 11:30 PM  (MON - FRIDAY) 
                  $start_time = strtotime('09:15:00');
                  $end_time = strtotime('23:30:00');
                  $current_time = strtotime(date('H:i:s'));
  
                // if (false) {
                  if ($current_time < $start_time || $current_time > $end_time) {
                      echo json_encode(['status' => 'error', 'message' => 'Market is closed']);
                      exit;
                  }else{
                      
                    if($stockData[0]->instrumentType == 'INDEX'){
                        if ($orderType == 'market') {
                            $margin = 500;
                            $quantity = $lotSize * $stockData[0]->lotSize;
                            $cost = $quantity * $price;
                            $total_cost = $cost / $margin;

                           



                        }

                    }
                }
        } else {
            return response()->json(['status' => 'error', 'message' => 'Stock not found']);
        }
        }

    }

    public function placeSellOrder(Request $r)
    {


        $orderId = "sell_" . uniqid();
        $instrumentKey = $r->instrumentKey;
        $lotSize = $r->lotSize;
        $orderType = $r->orderType;
        $limitPrice = $r->limitPrice;
        $price = $r->price;
        $tradeType = $r->tradeType;
        $user = Auth::user();

        $stoploss = $r->stoploss;
        $targetPrice = $r->targetPrice;

        $stockData = DB::table('future_temp')->where('instrumentKey', $instrumentKey)->get();

        if ($stockData->count() > 0) {
            if ($stockData[0]->segment == 'NSE_FO') {
                // starttime = 9:15AM (MON - FRIDAY) to 3:30 PM  (MON - FRIDAY) 
                $start_time = strtotime('09:15:00');
                $end_time = strtotime('15:30:00');
                $current_time = strtotime(date('H:i:s'));

                // if (false) {

                    if ($current_time < $start_time || $current_time > $end_time) {
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
                                if ($total_cost <= $user->real_wallet) {
                                    $user->wallet = $user->real_wallet - $total_cost;
                                    $updateBalance = DB::table('users')->where('id', $user->id)->update(['real_wallet' => $user->wallet]);

                                    $trade = new trade();
                                    $trade->user_id = $user->id;
                                    $trade->orderId = $orderId;
                                    $trade->stock_symbol = $stockData[0]->assetSymbol;
                                    $trade->stock_name = $stockData[0]->tradingSymbol;
                                    $trade->instrumentKey = $stockData[0]->instrumentKey;
                                    $trade->expiry = $stockData[0]->expiry;
                                    $trade->action = 'SELL';
                                    $trade->order_type = $orderType;
                                    $trade->segment=$stockData[0]->segment;
                                    $trade->tradeType = 'FUT';
                                    $trade->duration = $tradeType;
                                    $trade->price = $price;
                                    $trade->quantity = $quantity;
                                    $trade->stop_loss = $stoploss;
                                    $trade->target_price = $targetPrice;
                                    $trade->lotSize = $lotSize;
                                    $trade->margin = $margin;
                                    $trade->cost = $cost;
                                    $trade->total_cost = $total_cost;
                                    $trade->status = 'executed';
                                    $trade->save();

                                    if (config('app.env') == 'production') {
                                        // Restart Supervisor process
                                           $process = new Process(['sudo', 'supervisorctl', 'restart', 'markettradedata']);
                                           $process->run();
                                           
                                               // Check if the process failed
                                           if (!$process->isSuccessful()) {
                                               throw new ProcessFailedException($process);
                                           }
                                   }

                                    echo json_encode(['status' => 'success', 'message' => 'Order placed ']);
                                } else {
                                    echo json_encode(['status' => 'error', 'message' => 'Insufficient balance']);
                                }
                            }
                        } else if ($orderType == 'limit') {
                            $margin = 500;
                            $quantity = $lotSize * $stockData[0]->lotSize;
                            $cost = $quantity * $limitPrice;
                            $total_cost = $cost / $margin;

                            if ($tradeType == 'delivery' || $tradeType == 'intraday') {
                                if ($total_cost <= $user->real_wallet) {
                                    $user->wallet = $user->real_wallet - $total_cost;
                                    $updateBalance = DB::table('users')->where('id', $user->id)->update(['real_wallet' => $user->wallet]);

                                    $trade = new trade();
                                    $trade->user_id = $user->id;
                                    $trade->orderId = $orderId;
                                    $trade->stock_symbol = $stockData[0]->assetSymbol;
                                    $trade->stock_name = $stockData[0]->tradingSymbol;
                                    $trade->instrumentKey = $stockData[0]->instrumentKey;
                                    $trade->expiry = $stockData[0]->expiry;
                                    $trade->action = 'SELL';
                                    $trade->order_type = $orderType;
                                    $trade->segment=$stockData[0]->segment;
                                    $trade->tradeType = 'FUT';
                                    $trade->duration = $tradeType;
                                    $trade->price = $limitPrice;
                                    $trade->quantity = $quantity;
                                    $trade->stop_loss = $stoploss;
                                    $trade->target_price = $targetPrice;
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
                        }
                    } elseif ($stockData[0]->instrumentType == 'CE' || $stockData[0]->instrumentType == 'PE') {
                        if ($orderType == 'market') {
                            $margin = 7;
                            $quantity = $lotSize * $stockData[0]->lotSize;
                            $cost = $quantity * $price;
                            $total_cost = $cost / $margin;

                            if ($tradeType == 'delivery' || $tradeType == 'intraday') {
                                if ($total_cost <= $user->real_wallet) {
                                    $user->wallet = $user->real_wallet - $total_cost;
                                    $updateBalance = DB::table('users')->where('id', $user->id)->update(['real_wallet' => $user->wallet]);

                                    $trade = new trade();
                                    $trade->user_id = $user->id;
                                    $trade->orderId = $orderId;
                                    $trade->stock_symbol = $stockData[0]->assetSymbol;
                                    $trade->stock_name = $stockData[0]->tradingSymbol;
                                    $trade->instrumentKey = $stockData[0]->instrumentKey;
                                    $trade->expiry = $stockData[0]->expiry;
                                    $trade->action = 'SELL';
                                    $trade->order_type = $orderType;
                                    $trade->segment=$stockData[0]->segment;
                                    $trade->tradeType = $stockData[0]->instrumentType;
                                    $trade->duration = $tradeType;
                                    $trade->price = $price;
                                    $trade->quantity = $quantity;
                                    $trade->stop_loss = $stoploss;
                                    $trade->target_price = $targetPrice;
                                    $trade->lotSize = $lotSize;
                                    $trade->margin = $margin;
                                    $trade->cost = $cost;
                                    $trade->total_cost = $total_cost;
                                    $trade->status = 'executed';
                                    $trade->save();

                                    if (config('app.env') == 'production') {
                                        // Restart Supervisor process
                                           $process = new Process(['sudo', 'supervisorctl', 'restart', 'markettradedata']);
                                           $process->run();
                                           
                                               // Check if the process failed
                                           if (!$process->isSuccessful()) {
                                               throw new ProcessFailedException($process);
                                           }
                                   }

                                    echo json_encode(['status' => 'success', 'message' => 'Order placed ']);
                                } else {
                                    echo json_encode(['status' => 'error', 'message' => 'Insufficient balance']);
                                }
                            }
                        } else if ($orderType == 'limit') {
                            $margin = 7;
                            $quantity = $lotSize * $stockData[0]->lotSize;
                            $cost = $quantity * $limitPrice;
                            $total_cost = $cost / $margin;

                            if ($tradeType == 'delivery' || $tradeType == 'intraday') {
                                if ($total_cost <= $user->real_wallet) {
                                    $user->wallet = $user->real_wallet - $total_cost;
                                    $updateBalance = DB::table('users')->where('id', $user->id)->update(['real_wallet' => $user->wallet]);

                                    $trade = new trade();
                                    $trade->user_id = $user->id;
                                    $trade->orderId = $orderId;
                                    $trade->stock_symbol = $stockData[0]->assetSymbol;
                                    $trade->stock_name = $stockData[0]->tradingSymbol;
                                    $trade->instrumentKey = $stockData[0]->instrumentKey;
                                    $trade->expiry = $stockData[0]->expiry;
                                    $trade->action = 'SELL';
                                    $trade->order_type = $orderType;
                                    $trade->segment=$stockData[0]->segment;
                                    $trade->tradeType = $stockData[0]->instrumentType;
                                    $trade->duration = $tradeType;
                                    $trade->price = $limitPrice;
                                    $trade->quantity = $quantity;
                                    $trade->stop_loss = $stoploss;
                                    $trade->target_price = $targetPrice;
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
                        }
                    } else {
                        $margin = 0;
                    }
                }
            } elseif ($stockData[0]->segment == 'MCX_FO') {
                // starttime = 9:15AM (MON - FRIDAY) to 11:30 PM  (MON - FRIDAY) 
                $start_time = strtotime('09:15:00');
                $end_time = strtotime('23:30:00');
                $current_time = strtotime(date('H:i:s'));

                // if (false) {
                if ($current_time < $start_time || $current_time > $end_time) {
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
                                    $trade->orderId = $orderId;
                                    $trade->stock_symbol = $stockData[0]->assetSymbol;
                                    $trade->stock_name = $stockData[0]->tradingSymbol;
                                    $trade->instrumentKey = $stockData[0]->instrumentKey;
                                    $trade->expiry = $stockData[0]->expiry;
                                    $trade->action = 'SELL';
                                    $trade->order_type = $orderType;
                                    $trade->segment=$stockData[0]->segment;
                                    $trade->tradeType = 'FUT';
                                    $trade->duration = $tradeType;
                                    $trade->price = $price;
                                    $trade->quantity = $quantity;
                                    $trade->stop_loss = $stoploss;
                                    $trade->target_price = $targetPrice;
                                    $trade->lotSize = $lotSize;
                                    $trade->margin = $margin;
                                    $trade->cost = $cost;
                                    $trade->total_cost = $total_cost;
                                    $trade->status = 'executed';
                                    $trade->save();

                                    if (config('app.env') == 'production') {
                                        // Restart Supervisor process
                                           $process = new Process(['sudo', 'supervisorctl', 'restart', 'markettradedata']);
                                           $process->run();
                                           
                                               // Check if the process failed
                                           if (!$process->isSuccessful()) {
                                               throw new ProcessFailedException($process);
                                           }
                                   }


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
                                    $trade->orderId = $orderId;
                                    $trade->stock_symbol = $stockData[0]->assetSymbol;
                                    $trade->stock_name = $stockData[0]->tradingSymbol;
                                    $trade->instrumentKey = $stockData[0]->instrumentKey;
                                    $trade->expiry = $stockData[0]->expiry;
                                    $trade->action = 'SELL';
                                    $trade->order_type = $orderType;
                                    $trade->segment=$stockData[0]->segment;
                                    $trade->tradeType = 'FUT';
                                    $trade->duration = $tradeType;
                                    $trade->price = $limitPrice;
                                    $trade->quantity = $quantity;
                                    $trade->stop_loss = $stoploss;
                                    $trade->target_price = $targetPrice;
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
                        }
                    } elseif ($stockData[0]->instrumentType == 'CE' || $stockData[0]->instrumentType == 'PE') {
                        if ($orderType == 'market') {
                            $margin = 7;
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
                                    $trade->orderId = $orderId;
                                    $trade->stock_symbol = $stockData[0]->assetSymbol;
                                    $trade->stock_name = $stockData[0]->tradingSymbol;
                                    $trade->instrumentKey = $stockData[0]->instrumentKey;
                                    $trade->expiry = $stockData[0]->expiry;
                                    $trade->action = 'SELL';
                                    $trade->order_type = $orderType;
                                    $trade->segment=$stockData[0]->segment;
                                    $trade->tradeType = $stockData[0]->instrumentType;
                                    $trade->duration = $tradeType;
                                    $trade->price = $price;
                                    $trade->quantity = $quantity;
                                    $trade->stop_loss = $stoploss;
                                    $trade->target_price = $targetPrice;
                                    $trade->lotSize = $lotSize;
                                    $trade->margin = $margin;
                                    $trade->cost = $cost;
                                    $trade->total_cost = $total_cost;
                                    $trade->status = 'executed';
                                    $trade->save();


                                    echo json_encode(['status' => 'success', 'message' => 'Order placed']);
                                } else {
                                    echo json_encode(['status' => 'error', 'message' => 'Insufficient balance']);
                                }
                            }
                        } elseif ($orderType == 'limit') {
                            $margin = 7;
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
                                    $trade->orderId = $orderId;
                                    $trade->stock_symbol = $stockData[0]->assetSymbol;
                                    $trade->stock_name = $stockData[0]->tradingSymbol;
                                    $trade->instrumentKey = $stockData[0]->instrumentKey;
                                    $trade->expiry = $stockData[0]->expiry;
                                    $trade->action = 'SELL';
                                    $trade->order_type = $orderType;
                                    $trade->segment=$stockData[0]->segment;
                                    $trade->tradeType = $stockData[0]->instrumentType;
                                    $trade->duration = $tradeType;
                                    $trade->price = $limitPrice;
                                    $trade->quantity = $quantity;
                                    $trade->stop_loss = $stoploss;
                                    $trade->target_price = $targetPrice;
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
                        }
                    } else {
                        $margin = 0;
                    }
                }
            }
        } else {
            return response()->json(['status' => 'error', 'message' => 'Stock not found']);
        }
    }

    public function tradeDetails(Request $r)
    {
        $tradeId = $r->tradeId;
        $trade = DB::table('trades')->where('id', $tradeId)->get();
        return view('tradeDetail', ['trade' => $trade]);
    }

    public function updatePortfolio(Request $r){
        // calculate current portfolio value  

        $user = Auth::user()->id;
        $userData = \App\Models\User::find($user);

        if ($userData) {
            $wallet = $userData->real_wallet;
            $margin_wallet = $userData->margin_wallet;
        } else {
            $wallet = 0;
            $margin_wallet = 0;
        }

        $trades = DB::table('trades')->where('user_id', $user)->where('status','executed')->get();

        foreach($trades as $trade){
            $instrumentKey = $trade->instrumentKey;
            $ltp = DB::table('future_temp')->where('instrumentKey', $instrumentKey)->value('ltp');
            if($ltp){
                $trade->ltp = $ltp;
                $trade->current_value = $trade->quantity * $ltp;
                $trade->totalInvest = $trade->quantity * $trade->price;
                $trade->profit_loss = $trade->current_value - $trade->cost;
                $trade->profit_loss_percentage = $trade->profit_loss / $trade->cost * 100;
                $trade->wallet = $wallet;
                $trade->margin_wallet = $margin_wallet;
            }else{
                $trade->ltp = null;
                $trade->current_value = null;
                $trade->profit_loss = null;
                $trade->profit_loss_percentage = null;
                $trade->totalInvest = null;
                $trade->wallet = $wallet;
                $trade->margin_wallet = $margin_wallet;
            }
        }

        // return response data 

        return response()->json(['status' => 'success', 'trades' => $trades]);
        

    }
}
