<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

class EmailVerifyController
{
    public function notice()
    {
        return view("auth.verify-email");
    }

    public function verify(EmailVerificationRequest $request)
    {
        $request->fulfill();
        return redirect()->intended(route("contents.index"))
            ->with("success", "Your email was verified. You can now use public mode");

    }

    public function send(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();
        return back()->with("success", "Verification link was sent. Please check your email.");
    }
}
