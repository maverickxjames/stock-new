<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Predis\Command\Redis\SAVE;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create($refer_code = null)
    {
        $valid_code =false;
        if ($refer_code) {
            $referrer = User::where('refer_code', $refer_code)->first();
            if ($referrer) {
                $valid_code = true;
            }
        }
        return view('register', [
            'refer_code' => $refer_code,
            'valid_code' => $valid_code,
        ]);
    }


   
    private function generateUserId()
    {
        $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $numbers = '0123456789';

        $userId = substr(str_shuffle($letters), 0, 2) . substr(str_shuffle($numbers), 0, 4);
        return $userId;
    }
    private function generateReferCode()
    {
        $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $numbers = '0123456789';

        $referCode = substr(str_shuffle($letters), 0, 2) . substr(str_shuffle($numbers), 0, 4) . substr(str_shuffle($letters), 0, 2);
        return $referCode;
    }
    public function store(Request $request)
{
    // return $request;
    $request->validate([
        'fullname' => ['required', 'string', 'max:255'],
        'username' => ['required', 'string', 'max:255', 'unique:users'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required'],
        'refercode' => ['nullable', 'string'],
    ]);

    $referrer = null;
    if ($request->refercode) {
        $referrer = User::where('refer_code', $request->refercode)->first();
        if (!$referrer) {
            return response()->json([
                'status' => 400,
                'message' => 'Invalid referral code.',
            ]);
        }else{
            $referrer->increment('refer_count'); // Increment the referral count for the referrer
            $referral_bonus = DB::table('settings')->first()->referral_bonus; // Get the referral bonus from settings
            // $referrer->increment('refer_wallet', $referral_bonus);
            // Add the referral bonus to the total referrer's wallet
            // $referrer->increment('total_refer_wallet', $referral_bonus); 
            




            $referrer->save(); 
        }
    }
    //  random create user_id 
    $userId = $this->generateUserId();
    $refer= $this->generateReferCode();
    $user = User::create([
        'name' => $request->fullname,
        'username' => $request->username,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'refer_code' => $refer, // Generate a unique referral code for the user
        'plain_password' => $request->password, // Store the plain password if needed
        'is_dummy' => 1, // Set to 1 if you want to mark this user as a dummy user
        'user_id' => $userId, // Store the generated user ID
        'referred_by' => $referrer ? $referrer->user_id : null,
    ]);


    event(new Registered($user));
    Auth::login($user);

    return response()->json([
        'status' => 200,
        'message' => 'Registered successfully.',
    ]);
}

}
