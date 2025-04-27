<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController
{
    public function index()
    {
        return view("public.index");
    }
}
