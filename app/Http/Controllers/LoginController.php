<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController
{
    public function index()
    {
        return view("auth.login");
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            "email" => "required|email",
            "password" => "required|string"
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended(route("contents.index"))
                ->with("success", "Welcome back " . Auth::user()->name);
        }

        return redirect()->back()->withErrors([
            "email" => "The provided credentials do not match with our records"
            ])->onlyInput("email");
    }
}
