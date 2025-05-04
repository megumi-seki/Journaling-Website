<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;

class SettingsController
{
    public function index()
    {
        $settings = Setting::where("user_id", 1)->first();
        return view("settings.index", ["settings"=> $settings]);
    }

    public function update(Request $request) 
    {
        $setting = Setting::where("user_id", 1)->first();
        $data = $request->validate([
            "public_mode" => "required|integer",
            "screen_mode" => "required|integer",
            "color_unit_id" => "required|exists:color_units,id",
            "font_style_id" => "required|exists:font_styles,id",
            "font_size_id" => "required|exists:font_sizes,id",
        ]);

        $setting->update($data);

        return redirect()->route("settings.index")->with("success", "the settings were updated successfully");
    }
}