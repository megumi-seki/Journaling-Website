<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class SignupController
{
    public function index()
    {
        return view("auth.signup");
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            "name" => "required|string|max:255",
            "email" => "required|email|unique:users,email",
            "phone" => "required|string|max:255|unique:users,phone",
            "password" => ["required", "string", "confirmed", 
                Password::min(8)
                    ->max(24)
                    ->numbers()
                    ->mixedCase()
                    ->symbols()
                    ->uncompromised()
                    ]
        ]);

        $data["password"] = Hash::make($data["password"]);
        $data["public_mode"] = 0;
        $data["user_icon_id"] = 1;
        $data["user_name"] = "Annonymous";
        $user = User::create($data);
        $user->setting()->create();

        event(new Registered($user));

        Auth::login($user);

        return redirect()->route("contents.index")->with("success", "user registered. please verify your email");
    }
}

