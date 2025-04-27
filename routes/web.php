<?php

use App\Http\Controllers\ContentsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\TopController;
use Illuminate\Support\Facades\Route;

Route::get("/", [TopController::class, "index"])->name("top");
Route::get("/login", [LoginController::class, "index"])->name("login");
Route::get("/signup", [SignupController::class, "index"])->name("signup");
Route::get("/profile", [ProfileController::class, "index"])->name("profile");
Route::get("/settings", [SettingsController::class, "index"])->name("settings");
Route::get("/public", [PublicController::class, "index"])->name("public");

Route::resource("/journals", ContentsController::class);
