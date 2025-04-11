<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;



class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create($refer_code = null)
    {
        $error = null;

        if ($refer_code) {
            $user = User::where('refer_code', $refer_code)->first();
            if (!$user) {
                $error = 'Invalid refer code';
            }
        }

        return view('register', [
            'refer_code' => $refer_code,
            'error' => $error,
        ]);
    }


    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'fullname' => ['required', 'string', 'max:255'],
    //         'username' => ['required', 'string', 'max:255', 'unique:users'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required'],
    //         'refer_code' => ['nullable', 'string'],
    //     ]);

    //     $referrer = null;
    //     if ($request->refer_code) {
    //         $referrer = User::where('refer_code', $request->refer_code)->first();
    //         if (!$referrer) {
    //             return response()->json([
    //                 'status' => 400,
    //                 'message' => 'Invalid referral code.',
    //             ]);
    //         }

    //         $user = User::create([
    //             'name' => $request->fullname,
    //             'username' => $request->username,
    //             'email' => $request->email,
    //             'password' => Hash::make($request->password),
    //             'referred_by' => $referrer ? $referrer->id : null, // Optional: track who referred
    //         ]);

    //         event(new Registered($user));
    //         Auth::login($user);

    //         return response()->json([
    //             'status' => 200,
    //             'message' => 'Registered successfully.',
    //         ]);
    //     }

    //     // return redirect(route('quotes', absolute: false));
    // }
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

        $referCode = substr(str_shuffle($letters), 0, 2) . substr(str_shuffle($numbers), 0, 4);
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
