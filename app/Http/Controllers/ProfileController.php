<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController
{
    public function index()
    {
        $user = User::first();
        return view("profile.index", ["user" => $user]);
    }
}
