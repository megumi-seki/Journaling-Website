<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController
{
    public function index(Request $request)
    {
        $pageTitle = $request->user() ? "Top" : "";
        return view("top.index", ["pageTitle" => $pageTitle]);
    }
}
