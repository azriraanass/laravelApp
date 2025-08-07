<?php
    
    use Illuminate\Support\Facades\Route;

    Route::controller(App\Http\Controllers\GlobalController::class)->group(
        function()
        {
            Route::get('/','index')->name('home');

            Route::get('/about','about')->name('about');

            Route::get('/services','services')->name('services');

            Route::get('/contact','contact')->name('contact');
        });
