<?php

    use Illuminate\Support\Facades\Route;

    Route::prefix('produits')->controller(App\Http\Controllers\ProduitsController::class)->group(
    function()
    {
        Route::get('/','getProduits')->name('produits');
        Route::get('/{idProduit}','findOneProduit')->middleware(App\Http\Middleware\LogMiddleware::class . ':user');
        
    });
    
