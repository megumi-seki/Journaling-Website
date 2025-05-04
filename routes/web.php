<?php

use App\Http\Controllers\ContentController;
use App\Http\Controllers\ContentsController;
use App\Http\Controllers\EveryonesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\TopController;
use Illuminate\Support\Facades\Route;

Route::get("/", [TopController::class, "index"])->name("top");
Route::get("/login", [LoginController::class, "index"])->name("login");
Route::get("/signup", [SignupController::class, "index"])->name("signup");
Route::get("/profile", [ProfileController::class, "index"])->name("profile");
Route::get("/settings", [SettingsController::class, "index"])->name("settings");
Route::get("/everyones", [EveryonesController::class,"index"])->name("everyones");
Route::get("/everyone/filter", [EveryonesController::class,"filter"])->name("everyone.filter");
Route::patch("everyone/{content}/restore-tag", [EveryonesController::class, "restorePublicTag"]);
Route::patch("everyone/{content}/restore-heart", [EveryonesController::class, "restoreHeart"]);
Route::patch("everyone/{content}/restore-hug", [EveryonesController::class, "restoreHug"]);

Route::resource("/contents", ContentsController::class);
Route::get("/content/filter", [ContentsController::class, "filter"])->name("content.filter");
Route::patch("/content/{content}/restore-tag", [ContentsController::class, "restoreTag"]);