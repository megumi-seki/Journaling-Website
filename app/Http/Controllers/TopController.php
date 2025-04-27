<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController
{
    public function index()
    {
        return view("top.index");
    }
}
