<?php

use App\Models\Company;
use Illuminate\Support\Facades\Route;

Route::prefix("produits")
    ->controller(App\Http\Controllers\ProduitsController::class)
    ->name("produits.")
    ->group(function () {

        Route::get("/", "index")->name("index");

        Route::post("/", "create")->name("store");

        Route::patch("/{produit}", "update")
            ->middleware('auth')
            ->can('edit-produit', 'produit')
            ->name("update");

        Route::get("/{produit}/edit", "edit")
            ->middleware('auth')
            ->can('edit-produit','produit')
            ->name("edit");

        Route::get(
            "/create",
            fn() => view("produits.create", ["companies" => Company::all()]),
        )->name("create");

        Route::delete("/{produit}", "destroy")
            ->middleware('auth')
            ->can('edit-produit','produit')
            ->name("destroy");

        Route::get("/{produit}", "show")
            ->middleware(App\Http\Middleware\LogMiddleware::class . ":user")
            ->name("show");
    });
