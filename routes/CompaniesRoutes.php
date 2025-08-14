<?php

    use Illuminate\Support\Facades\Route;

    Route::prefix('companies')
    ->controller(App\Http\Controllers\CompaniesController::class)
    ->name('companies.')
    ->group(function()
    {
        Route::get('/create',fn() => view('companies.create'))
        ->name('create');
        Route::get('/{company}/edit','edit')
        ->name('edit');
        Route::patch('/{company}','update')
        ->name('update');
        Route::post('/','store')
        ->name('store');
        Route::get('/{company}','show')
        ->name('show');
        Route::get('/', 'index')
        ->name('index');
        Route::delete('/{company}', 'destroy')
        ->name('destroy');
    });
    
    
