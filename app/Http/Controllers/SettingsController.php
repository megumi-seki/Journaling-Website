<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController
{
    public function index(Request $request)
    {
        $user = $request->user();
        $settings = Setting::where("user_id", $user->id)->first();
        return view("settings.index", ["settings"=> $settings, "user" => $user]);
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

        $setting->update($data);

        if (!$data["public_mode"]) {
            $user->contents()->update(["public" => 0]);
        }

        return redirect()->route("settings.index")->with("success", "the settings were updated successfully");
    }
}