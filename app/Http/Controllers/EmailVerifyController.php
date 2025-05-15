<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmailVerifyController
{
    public function notice()
    {
        $user = Auth::user();
        return view("auth.verify-email", ["user" => $user]);
    }

    public function verify(EmailVerificationRequest $request)
    {
        $request->fulfill();
        return redirect()->intended(route("everyones"))
            ->with("success", "Your email was verified. You can now activate public mode");

    }

    public function send(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();
        return back()->with("success", "Verification link was sent. Please check your email.");
    }
}
