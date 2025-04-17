<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\WatchlistController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScriptController;
use App\Http\Controllers\CronController;
use App\Http\Controllers\MarketDataController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\TradeController;
use Illuminate\Support\Facades\Broadcast;
use Illuminate\Http\Request;


Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return view('login');
    });
    Route::get('/register', function () {
        return view('register');
    });
 
});

Route::prefix('cron')->group(function () {
    Route::get('/expireToken', [CronController::class, 'expireToken']);
});




Route::get('future', [ScriptController::class, 'future']);
Route::get('test', [ScriptController::class, 'test']);
Route::get('deleteExpiredStock', [ScriptController::class, 'deleteExpiredStock']);

Route::get('allStocks', [ApiController::class, 'allStocks']);

Route::get('/fetch-market-updates', [MarketDataController::class, 'fetchUpdates']);




Route::middleware('auth')->group(function () {




    Route::get('wallet', [ProfileController::class, 'wallet']);
    Route::get('portfolio', [ProfileController::class, 'portfolio'])->name('portfolio');
    Route::get('profile', [ProfileController::class, 'profile'])->name('profile');
    Route::POST('change-password', [ProfileController::class, 'changePassword']);
    Route::post('update-profile', [ProfileController::class, 'updateProfile']);






    Route::get('/nifty50', [StockController::class, 'nifty'])->name('nifty');
    Route::get('/sensex', [StockController::class, 'sensex'])->name('sensex');
    Route::get('/stocks/{slug}/{id}', [StockController::class, 'niftyInner'])->name('nifty-inner');
    Route::get('/fetch-stock-data/{id}/{period}', [StockController::class, 'fetchStockData']);
    Route::get('/fetch-nifty50-stock-data', [StockController::class, 'fetchNifty50StockData']);
    Route::get('/fetch-sensex-stock-data', [StockController::class, 'fetchSensexStockData']);
    Route::get('orders', [StockController::class, 'orderHistory'])->name('order');


    Route::post('add-watchlist', [WatchlistController::class, 'addWatchlist'])->name('add-watchlist');
    Route::post('remove-watchlist', [WatchlistController::class, 'removeWatchlist'])->name('remove-watchlist');
    // Route::get('buy/{id}', [WatchlistController::class, 'buy'])->name('buy');
    // Route::post('buy', [WatchlistController::class, 'buyStock'])->name('buy-stock');
    // Route::get('sell/{id}', [WatchlistController::class, 'sell'])->name('sell');
    // Route::post('sell', [WatchlistController::class, 'sellStock'])->name('sell-stock');



    Route::get('admin/home', [AdminController::class, 'home'])->name('admin.home');
    Route::get('admin/view-user', [AdminController::class, 'home'])->name('user');
    Route::get('admin/add-user', [AdminController::class, 'add_user'])->name('admin_add_user');
    Route::post('admin/add-user', [AdminController::class, 'addUser'])->name("add-user-post");
    Route::get('admin/add-admin', [AdminController::class, 'add_admin'])->name('admin_add_admin');
    Route::post('admin/add-admin', [AdminController::class, 'addAdmin'])->name("add-admin-post");
    Route::get('admin/all-admin', [AdminController::class, 'allAdmin'])->name("all-admin");
    Route::get('admin/all-user', [AdminController::class, 'allUser'])->name("all-user");
    Route::post('admin/add-fund/{userId}', [AdminController::class, 'addFund'])->name("add-fund");
    Route::get('admin/user/{id}', [AdminController::class, 'user'])->name("admin.viewUser");
    Route::get('admin/deposits', [AdminController::class, 'depositTxn'])->name('admin.deposit_txn');
    Route::get('admin/withdraws', [AdminController::class, 'withdrawTXn'])->name('admin.withdraw_txn');
    Route::get('admin/trades', [AdminController::class, 'tradeTxn'])->name('admin.tradeTxn');
    Route::get('/admin/add-watchlist', [AdminController::class, 'addWatchlist'])->name('admin.add-watchlist');
    Route::get('/admin/fetch-watchlist', [AdminController::class, 'fetchWatchlist'])->name('admin.fetch-watchlist');
    // Watchlist routes for admin
    Route::post('/admin/add-watchlist/{id}', [AdminController::class, 'addToWatchlist'])->name('admin.add-to-watchlist');
    Route::post('/admin/remove-watchlist/{id}', [AdminController::class, 'removeFromWatchlist'])->name('admin.remove-watchlist');
    Route::post('/admin/update-trade-field', [AdminController::class, 'updateTradeField'])->name('admin.updateTradeField');
    Route::get('admin/new-user', [AdminController::class, 'newUser'])->name('admin.new-user');
    Route::post('/admin/validate-user', [AdminController::class, 'validateUser'])->name('admin.validateUser');



    Route::get('/admin/settings', [SettingsController::class, 'settings'])->name('admin.settings');
    

    Route::post('settings/min-recharge', [SettingsController::class, 'updateMinRecharge'])->name('settings.updateMinRecharge');
    Route::post('settings/min-withdraw', [SettingsController::class, 'updateMinWithdraw'])->name('settings.updateMinWithdraw');
    Route::post('settings/withdraw-msg', [SettingsController::class, 'updateWithdrawMsg'])->name('settings.updateWithdrawMsg');
    Route::post('settings/deposit-msg', [SettingsController::class, 'updateDepositMsg'])->name('settings.updateDepositMsg');
    Route::post('settings/upi', [SettingsController::class, 'updateUpi'])->name('settings.updateUpi');
    Route::post('settings/withdraw-status', [SettingsController::class, 'updateWithdrawStatus'])->name('settings.updateWithdrawStatus');
    Route::post('settings/recharge-status', [SettingsController::class, 'updateRechargeStatus'])->name('settings.updateRechargeStatus');
    Route::post('settings/upi-status', [SettingsController::class, 'updateUpiStatus'])->name('settings.updateUpiStatus');
    Route::post('update-client-id', [SettingsController::class, 'updateClientId'])->name('settings.updateClientID');
    Route::post('update-client-secret', [SettingsController::class, 'updateClientSecret'])->name('settings.updateClientSecret');
    Route::post('update-token', [SettingsController::class, 'updateToken'])->name('settings.generateToken');
    Route::post('update-cookie', [SettingsController::class, 'updateCookie'])->name('settings.updateCookie');
    Route::post('test-cookie', [SettingsController::class, 'testCookie'])->name('settings.testCookie');

    Route::post('admin/approve-deposit', [AdminController::class, 'approveDeposit'])->name('approve-deposit');
    Route::post('admin/approve-withdraw', [AdminController::class, 'approveWithdraw'])->name('approve-withdraw');

    Route::post('/payment-link', [PaymentController::class, 'generatePaymentLink'])->name('payment-link');
    Route::get('deposit', [PaymentController::class, 'deposit'])->name('deposit');
    Route::get('recharge/{txn_id}', [PaymentController::class, 'recharge'])->name('recharge');
    Route::post('/upload-ref', [PaymentController::class, 'uploadRef'])->name('uploadRef');
    Route::get('withdraw', [PaymentController::class, 'withdraw'])->name('withdraw');
    Route::post('withdrawRef', [PaymentController::class, 'withdrawRef'])->name('withdrawRef');
    Route::get('bank-details', [PaymentController::class, 'bankDetails'])->name('bank-details');
    Route::post('bank-update', [PaymentController::class, 'updateBankDetails'])->name('update-bank-details');
    Route::get('history', [PaymentController::class, 'history'])->name('history');
    Route::get('updateFuture', [StockController::class, 'updateFuture'])->name('updateFuture');


    Route::get('quotes', [StockController::class, 'quotes'])->name('quotes');

    Route::get('add-script', [StockController::class, 'addScript'])->name('add-script');
    Route::get('searchScript', [StockController::class, 'searchScript'])->name('searchScript');


    // Trade Route
    Route::post('placeBuyOrder',[TradeController::class,'placeBuyOrder'])->name('placeBuyOrder');
    Route::post('placeSellOrder',[TradeController::class,'placeSellOrder'])->name('placeSellOrder');
    // Trade Route

    Route::get('trade-details/{id}', [TradeController::class, 'tradeDetails'])->name('tradeDetails');
    Route::get('stock-details/{id}', [StockController::class, 'stockDetails'])->name('stockDetail');


    Route::get('limitOrder', [StockController::class, 'limitOrder'])->name('limitOrder');
    Route::post('closeOrder', [StockController::class, 'closeOrder'])->name('closeOrder');

    Route::get('quoteRefresh/{id}', [StockController::class, 'quoteRefresh'])->name('quoteRefresh');
    Route::post('updatePortfolio', [TradeController::class, 'updatePortfolio'])->name('updatePortfolio');

    Route::get('referral', [ProfileController::class, 'referral'])->name('referral');



    Route::get('ww', function(){
        return view('wallet');
    });
});



Route::get('/updatelotsize', [StockController::class, 'runUpdateLotSize'])->name('updateLotSize');

Route::get('/runWebSocket', [MarketDataController::class, 'fetchUpdates'])->name('runWebSocket');

require __DIR__ . '/auth.php';
require __DIR__ . '/channels.php';

