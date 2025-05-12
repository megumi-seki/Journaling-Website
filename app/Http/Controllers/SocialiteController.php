<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController
{
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleCallback($provider)
    {
        try {
            $field = null;
            if ($provider === "google") {
                $field = "google_id";
            } elseif ($provider === "facebook") {
                $field = "facebook_id";
            }

            $user = Socialite::driver($provider)->user();
            $dbUser = User::where("email", $user->email)->first();

            if ($dbUser) {
                $dbUser->$field = $user->id;
                $dbUser->save();
            } else {
                $dbUser = User::create([
                    "name" => $user->name,
                    "email" => $user->email,
                    $field => $user->id,
                    "email_verified_at" => now(),
                    "public_mode" => 0,
                    "user_icon_id" => 1,
                    "user_name" => "Annonymous"
                ]);
                
                $dbUser->setting()->create();
            }

            Auth::login($dbUser);
            return redirect(route("contents.index"));
        } catch (\Exception $e) {
            return redirect(route("login.index"))
                ->with("success", $e->getMessage() ?: "Something went wrong. Please try again later.");
        }
    }
}
