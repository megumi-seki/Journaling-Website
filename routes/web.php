<?php

use App\Http\Controllers\EmailVerifyController;
use App\Http\Controllers\ContentsController;
use App\Http\Controllers\EveryonesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\TopController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get("/", [TopController::class, "index"])->name("top");

Route::middleware("auth")->group(function() {

    Route::resource("/contents", ContentsController::class);
    Route::get("/content/filter", [ContentsController::class, "filter"])
        ->name("content.filter");
    Route::patch("/content/{content}/restore-tag", [ContentsController::class, "restoreTag"]);

    Route::get("/profile", [UserController::class, "index"])->name("profile.index");
    Route::put("/profile", [UserController::class, "update"])->name("profile.update");
    Route::put("/profile/password", [UserController::class, "updatePassword"])
        ->name("profile.updatePassword");

    Route::get("/settings", [SettingsController::class, "index"])
        ->name("settings.index");
    Route::put("/settings", [SettingsController::class, "update"])
        ->name("settings.update");

    Route::get("/email/verify", [EmailVerifyController::class, "notice"])
        ->name("verification.notice");
    Route::get("/email/verify/{id}/{hash}", [EmailVerifyController::class, "verify"])
        ->name("verification.verify");
    Route::post("/email/verification-notification", [EmailVerifyController::class, "send"])
        ->name("verification.send");

    Route::post("/logout", [LoginController::class, "logout"])->name("logout");

    Route::middleware("verified")->group(function() {
        Route::get("/everyones", [EveryonesController::class,"index"])
            ->name("everyones");
        Route::get("/everyone/filter", [EveryonesController::class,"filter"])
            ->name("everyone.filter");
        Route::patch("everyone/{content}/restore-tag", [EveryonesController::class, "restorePublicTag"]);
        Route::patch("everyone/{content}/restore-heart", [EveryonesController::class, "restoreHeart"]);
        Route::patch("everyone/{content}/restore-hug", [EveryonesController::class, "restoreHug"]);

    });

});

require __DIR__."/auth.php";
