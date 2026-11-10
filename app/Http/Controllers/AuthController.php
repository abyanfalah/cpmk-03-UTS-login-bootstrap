<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function authenticate(LoginRequest $request)
    {
        $credentials = $request->validated();

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/home');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->intended(route('login'));
    }
}
