<?php

    use Illuminate\Support\Facades\Route;

    Route::get('/produits',[App\Http\Controllers\ProduitsController::class,'getProduits'])->name('produits');
    
