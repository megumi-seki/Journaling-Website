<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Password as RulesPassword;

class PasswordResetController
{
    public function showforgetPasswordIndex() 
    {
        return view("auth.forget-password");
    }

    public function sendResetPasswordRequest(Request $request)
    {
        $request->validate(["email" => "required|email"]);

        Password::sendResetLink($request->only("email"));

        return back()->with("success", "If your email address is in our system, we have emailed you a password reset link.");
    }

    public function showResetPasswordIndex()
    {
        return view("auth.reset-password");
    }

    public function resetPassword(Request $request) 
    {
        $request->validate([
            "token" => "required",
            "email" => "required|email",
            "password" => ["required", "string", "confirmed",
                RulesPassword::min(8)
                    ->max(24)
                    ->numbers()
                    ->mixedCase()
                    ->symbols()
                    ->uncompromised()
                    ]
        ]);

        $status = Password::reset(
            $request->only("token", "email", "password", "password_confirmation"),
            function (User $user, $password) {
                $user->forceFill(["password" => Hash::make($password)])->setRememberToken(Str::random(60));
                $user->save();
                
                event(new PasswordReset($user));
            });

        if ($status === Password::PASSWORD_RESET) {
            return redirect()->route("login.index")->with("success", __($status));
        }

        return back()->withErrors(["email" => "We couldn't reset your password. Please check your information and try again."]);
    }
}
