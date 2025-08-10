<?php

    use Illuminate\Support\Facades\Route;

    Route::prefix('companies')->group(function()
    {
        Route::post('/',[App\Http\Controllers\CompaniesController::class,'store'])->name('conpanies.store');
        Route::get('/', [App\Http\Controllers\CompaniesController::class, 'index'])->name('companies.index');
        Route::get('/create',fn() => view('companies.create'))->name('companies.create');
    });
    
    
