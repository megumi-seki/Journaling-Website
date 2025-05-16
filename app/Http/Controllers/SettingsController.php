<?php

namespace App\Http\Controllers;

use App\Models\FontStyle;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController
{
    public function index(Request $request)
    {
        $user = $request->user()->load("setting");
        $settings = Setting::where("user_id", $user->id)->first();
        $fontStyles = FontStyle::all();
        return view("settings.index", ["settings"=> $settings, "user" => $user, "fontStyles" => $fontStyles]);
    }

    public function update(Request $request) 
    {
        $user = $request->user();
        $setting = Setting::where("user_id", $user->id)->first();
        $data = $request->validate([
            "public_mode" => "required|int: 0, 1",
            "screen_mode" => "required|int: 0, 1",
            "color_unit_id" => "required|exists:color_units,id",
            "font_style_id" => "required|exists:font_styles,id",
            "font_size" => "required|int: 1, 2, 3, 4, 5",
        ]);

        if ($data["public_mode"] === "1" && !$user->hasVerifiedEmail()) {
            session(["url.intended" => url()->previous()]);
            return redirect()->route("verification.notice");
        }

        if ($data["public_mode"] === "1" && empty($user->phone)) {
            return redirect()->route("profile.index")
                ->with("error", "Please provide valid phone information to activate public mode");
        }

        $setting->update($data);

        if (!$data["public_mode"]) {
            $user->contents()->update(["public" => 0]);
        }

        return redirect()->route("settings.index")->with("success", "Settings updated");
    }
}