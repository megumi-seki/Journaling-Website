<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserIcon;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProfileController
{
    public function index(Request $request)
    {
        $user = $request->user();
        $user_icons = UserIcon::all();
        return view("profile.index", ["user" => $user, "user_icons" => $user_icons]);
    }

    public function update(Request $request)
    {
        $user = $request->user();
        $data = $request->validate([
            "name" => "required|string|max:255",
            "email" => ["required", "email", "string", "max:255", Rule::unique("users", "email")->ignore($user->id)],
            "phone" => ["required", "string", "max:255", Rule::unique("users", "phone")->ignore($user->id)],
            "user_icon_id" => "required|exists:user_icons,id",
            "user_name" => "nullable|string|max:255"
        ]);

        $user->fill($data);

        // TODO set conditions for email verification etc

        $user->save();

        return redirect()->route("profile.index")->with("success", "profile information was updated successfully");
    }
}
