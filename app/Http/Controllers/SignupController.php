<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController
{
    public function index()
    {
        return view("auth.signup");
    }
}
