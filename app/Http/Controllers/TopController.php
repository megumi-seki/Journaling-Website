<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TopController
{
    public function index()
    {
        $user = Auth::user();
        $pageTitle = $user ? "Top" : null;
        return view("top.index", ["pageTitle" => $pageTitle, "user" => $user]);
    }
}
