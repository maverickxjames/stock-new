<?php


namespace App\Http\Controllers;

use App\Models\deposit;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;
// db facade
use Illuminate\Support\Facades\DB;

use App\Models\User;
use PhpParser\Node\Stmt\TryCatch;
use App\Models\withdraw;
//imort settings model
use App\Models\Setting;
use GrahamCampbell\ResultType\Success;
use App\Models\Upstock;

class SettingsController extends Controller
{
    public function settings(Request $request)
    {
        $settings = Setting::all();
        return view('admin.settings', ['settings' => $settings[0]]);
    }


    public function updateMinWithdraw(Request $request)
    {
        $request->validate([
            'value' => 'required|numeric',
        ]);

        // Update the specific column directly
        $updated = DB::table('settings')->update(['minWithdraw' => $request->value]);

        if ($updated) {
            return response()->json(['success' => true, 'message' => 'Min Withdraw updated successfully.']);
        } else if($request->value===DB::table('settings')->value('minWithdraw')){
            return response()->json(['success' => false, 'message' => 'This Min Withdraw is already set.']);
        }

        return response()->json(['success' => false, 'message' => 'Failed to update Min Withdraw.']);
    }

    // Update Min Recharge

    public function updateMinRecharge(Request $request)
    {
        $request->validate([
            'value' => 'required|numeric',
        ]);

        // Update the specific column directly
        $updated = DB::table('settings')->update(['minRecharge' => $request->value]);

        if ($updated) {
            return response()->json(['success' => true, 'message' => 'Min Recharge updated successfully.']);
        } else if($request->value===DB::table('settings')->value('minRecharge')){
            return response()->json(['success' => false, 'message' => 'This Min Recharge is already set.']);
        }

        return response()->json(['success' => false, 'message' => 'Failed to update Min Recharge.']);
    }

    // Update Withdraw Message
    public function updateWithdrawMsg(Request $request)
    {
        $request->validate([
            'value' => 'required|string',
        ]);

        // Update the specific column directly
        $updated = DB::table('settings')->update(['withdraw_msg' => $request->value]);

        if ($updated) {
            return response()->json(['success' => true, 'message' => 'Withdraw Message updated successfully.']);
        } elseif($request->value===DB::table('settings')->value('withdraw_msg')){
            return response()->json(['success' => false, 'message' => 'This Withdraw Message is already set.']);
        }

        return response()->json(['success' => false, 'message' => 'Failed to update Withdraw Message.']);
    }

    // Update Deposit Message
   // Update Deposit Message
public function updateDepositMsg(Request $request)
{
    $request->validate([
        'value' => 'required|string',
    ]);

    $msg = $request->value;

    // Retrieve the current setting row with id=1
    $setting = Setting::find(1);

    if (!$setting) {
        return response()->json(['success' => false, 'message' => 'Settings not found.']);
    }

    // Check if the message is already set
    if ($msg === $setting->deposit_msg) {
        return response()->json(['success' => false, 'message' => 'This Deposit Message is already set.']);
    } 

    // Update the message if it's not empty
    if (!empty($msg)) {
        $setting->update(['deposit_msg' => $msg]);
        return response()->json(['success' => true, 'message' => 'Deposit Message updated successfully.']);
    }

    return response()->json(['success' => false, 'message' => 'Failed to update Deposit Message.']);
}


    // Update UPI
    public function updateUpi(Request $request)
    {
        $request->validate([
            'value' => 'required|string',
        ]);

        // Update the specific column directly
        $updated = DB::table('settings')->update(['upi' => $request->value]);

        if ($updated) {
            return response()->json(['success' => true, 'message' => 'UPI updated successfully.']);
        } elseif($request->value===DB::table('settings')->value('upi')){
            return response()->json(['success' => false, 'message' => 'This UPI is already set.']);
        }

        return response()->json(['success' => false, 'message' => 'Failed to update UPI.']);
    }

    // Update Withdraw Status
    public function updateWithdrawStatus(Request $request)
    {
        $status = $request->status;

        $updated = DB::table('settings')->update(['withdraw_status' => $status]);


        if ($updated) {
            return response()->json(['success' => true, 'message' => 'Withdraw Status updated successfully.']);
        } 

        return response()->json(['success' => false, 'message' => 'Failed to update Withdraw Status.']);
    }

    // Update Recharge Status
    public function updateRechargeStatus(Request $request)
    {
        $status = $request->status;

        $updated = DB::table('settings')->update(['recharge_status' => $status]);

        if ($updated) {
            return response()->json(['success' => true, 'message' => 'Recharge Status updated successfully.']);
        }

        return response()->json(['success' => false, 'message' => 'Failed to update Recharge Status.']);
    }

    // Update UPI Status
    public function updateUpiStatus(Request $request)
    {
        $status = $request->status;

        $updated = DB::table('settings')->update(['upi_status' => $status]);

        if ($updated) {
            return response()->json(['success' => true, 'message' => 'UPI Status updated successfully.']);
        }

        return response()->json(['success' => false, 'message' => 'Failed to update UPI Status.']);
    }


    public function updateClientID(Request $request)
    {
        $request->validate([
            'value' => 'required|string',
        ]);

        

        // Update the specific column directly
        $updated = DB::table('upstocks')->update(['client_id' => $request->value]);

        if ($updated) {
            return response()->json(['success' => true, 'message' => 'Client ID updated successfully.']);
        }elseif($request->value===DB::table('upstocks')->value('client_id')){
            return response()->json(['success' => false, 'message' => 'This Client ID is already set.']);
        }

        return response()->json(['success' => false, 'message' => 'Failed to update Client ID.']);
    }

    public function updateClientSecret(Request $request)
    {
        $request->validate([
            'value' => 'required|string',
        ]);

        // Update the specific column directly
        $updated = DB::table('upstocks')->update(['client_secret' => $request->value]);

        if ($updated) {
            return response()->json(['success' => true, 'message' => 'Client Secret updated successfully.']);
        }elseif($request->value===DB::table('upstocks')->value('client_secret')){
            return response()->json(['success' => false, 'message' => 'This Client Secret is already set.']);
        }

        return response()->json(['success' => false, 'message' => 'Failed to update Client Secret.']);
    }


    public function updateToken(Request $request)
    {
        $request->validate([
            'value' => 'required|string',
        ]);

      



        $code = $request->value;

        $upstock = Upstock::find(1);

        // $authCode = $request->code;
        $redirectUri = 'https://google.com'; 
        $clientId = $upstock->client_id;
        $clientSecret = $upstock->client_secret; 
        $grantType = $code;
       

        // cURL implementation
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://api.upstox.com/v2/login/authorization/token',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => http_build_query([
                'code' => $code,
                'grant_type' => $grantType,
                'redirect_uri' => $redirectUri,
                'client_id' => $clientId,
                'client_secret' => $clientSecret,
            ]),
            CURLOPT_HTTPHEADER => [
                
                  
                'Content-Type: application/x-www-form-urlencoded',
                'Accept: application/json',
            ],
        ]);

        $response = curl_exec($curl);

        if (curl_errno($curl)) {
            $error = curl_error($curl);
            curl_close($curl);

            return response()->json([
                'success' => false,
                'message' => 'Failed to connect to API: ' . $error,
            ]);
        }

        curl_close($curl);

        $response = json_decode($response, true);


        if (isset($response['access_token'])) {
            
            $updated = DB::table('upstocks')->update([
                'token' => $response['access_token'],
                'isExpired' => 0,
            ]);

            if ($updated) {
                return response()->json(['success' => true, 'message' => 'Token Created successfully.']);

            } 

        } 
            return response()->json([
                'success' => false,
                'message' => 'Failed to generate token. API response: ' . json_encode($response),
            ]);
        
    }
}
