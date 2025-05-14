<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserIcon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class UserController
{
    public function index(Request $request)
    {
        $user = $request->user()->load(["userIcon", "setting"]);
        $user_icons = UserIcon::all();
        return view("profile.index", ["user" => $user, "user_icons" => $user_icons]);
    }

    public function update(Request $request)
    {
        //TODO improve phone valification
        $user = $request->user();
        $data = $request->validate([
            "name" => "required|string|max:255",
            "email" => ["required", "email", "string", "max:255", Rule::unique("users", "email")->ignore($user->id)],
            "phone" => ["required", "string", "max:255", Rule::unique("users", "phone")->ignore($user->id)],
            "user_icon_id" => "required|exists:user_icons,id",
            "user_name" => "nullable|string|max:255"
        ]);

        $user->fill($data);
        $user->save();

        return redirect()->route("profile.index")->with("success", "profile information was updated successfully");
    }

    public function updatePassword(Request $request)
    {
        $user = $request->user();
        $request->validate([
            "current_password" => "required|current_password",
            "new_password" => ["required", "string", "confirmed",
                Password::min(8)
                ->max(24)
                ->numbers()
                ->mixedCase()
                ->symbols()
                ->uncompromised()
                ]
        ]);

        $user->update(["password" => Hash::make($request->new_password)]);

        return redirect()->route("profile.index")->with("success", "password was updated successfully");
    }
}
