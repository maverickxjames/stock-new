<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
 

    public function store(LoginRequest $request)
    {
        $request->validate([
            'loginInfo' => 'required|string', // Replace 'email' with your desired field
            'password' => 'required|string',
        ]);


        $loginInfo = $request->input('loginInfo');
        $password = $request->input('password');

        // Check if the loginInfo is an email or username or userId 
        if (filter_var($loginInfo, FILTER_VALIDATE_EMAIL)) {
            $field = 'email';
        } elseif (User::where('user_id', $loginInfo)->exists()) {
            $field = 'userId'; // Assuming userId is a numeric field
        } else {
            $field = 'username'; // Assuming username is a string field
        }
      

        // Try to login
    if (auth()->attempt([$field => $loginInfo, 'password' => $password])) {
            // Authentication passed, redirect to intended page
            $request->session()->regenerate();
            return response()->json([
                'success' => true,
                'redirect_url' => url('/quotes')
            ]);
        }
        
        return response()->json([
            'success' => false,
            'message' => 'Invalid login credentials'
        ]);
    }
    

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
