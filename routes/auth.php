<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PasswordResetController;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;

Route::middleware("guest")->group(function() {
    Route::get("/signup", [SignupController::class, "index"])->name("signup.index");
    Route::post("/signup", [SignupController::class, "store"])->name("signup");

    Route::get("/login", [LoginController::class, "index"])->name("login.index");
    Route::post("/login", [LoginController::class, "login"])->name("login");
    Route::get("/forget-password", [PasswordResetController::class, "showForgetPasswordIndex"])
        ->name("forgetPassword.index");
    Route::post("/forget-password", [PasswordResetController::class, "sendResetPasswordRequest"])
        ->name("forgetPassword.email");
    Route::get("/reset-password/{token}", [PasswordResetController::class, "showResetPasswordIndex"])
        ->name("password.reset");
    Route::post("/reset-password", [PasswordResetController::class, "resetPassword"])
        ->name("password.update");
});

