<?php

    use App\Models\Company;
    use Illuminate\Support\Facades\Route;

    Route::prefix('produits')->controller(App\Http\Controllers\ProduitsController::class)->group(
    function()
    {
        Route::get('/','index')
        ->name('produits.index');
        
        Route::post('/','create' )
        ->name('produits.store');

        Route::patch('/{idProduit}','update')->name('produits.update');

        Route::get('/{idProduit}/edit','edit')->name('produits.edit');
        
        Route::get('/create',fn() => view('produits.create', ['companies' => Company::all()]))
        ->name('produits.create');

        Route::delete('/{idProduit}', 'destroy')->name('produits.destroy');
        
        Route::get('/{idProduit}','show')
        ->middleware(App\Http\Middleware\LogMiddleware::class . ':user')
        ->name('produits.show');
    });
    
