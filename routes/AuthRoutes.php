<?php

use Illuminate\Support\Facades\Route;

Route::prefix("register")
    ->controller(App\Http\Controllers\RegisterController::class)
    ->name("register.")
    ->group(function () {
        Route::get("/create", "create")->name("create");
        Route::post("/", "store")->name("store");
    });

Route::prefix("login")
    ->controller(App\Http\Controllers\LoginController::class)
    ->name("login.")
    ->group(function () {
        Route::get("/create", "create")->name("create");
        Route::post("/", "store")->name("store");
        Route::post("/logout", "destroy")->name("destroy");
    });
