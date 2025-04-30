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
}
