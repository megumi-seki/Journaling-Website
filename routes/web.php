<?php

use App\Http\Controllers\ContentsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('top');
});

Route::get("/login", function () {
    return view("auth.login");
});

Route::get("/signup", function () {
    return view("auth.signup");
});

Route::resource("/journals", ContentsController::class);

Route::get("/profile", function () {
    return view("profile.index");
})->name("profile.index");

Route::get("/settings", function () {
    return view("settings.index");
})->name("settings.index");

Route::get("/public", function () {
    return view("public.index");
})->name("public.index");