<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
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
    public function store(LoginRequest $request): RedirectResponse
{
    $request->authenticate();
    
    // Regenerate session first for security
    $request->session()->regenerate();
    
    // $user = Auth::user();
    // dd($user);
    // if ($user->user_type_id == 1) {
    //     return redirect()->route('login')->with('success', 'You have been logged in');
    // } elseif ($user->user_type_id == 2) {
    //     return redirect()->route('register')->with('success', 'You have been logged in');
    // }
    
    // This is a fallback in case user_type_id is neither 1 nor 2
    return redirect()->intended(route('dashboard', absolute: false))->with('success', 'You have been successfully logged in!');
}

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/')->with('success','You  have been logged out');
    }
}
