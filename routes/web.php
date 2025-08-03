<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 
function () {
    return view('Pages.home');
})->name('home');

Route::get('/about',
 function () {
    return view('Pages.about');
})->name('about');

Route::get('/services',
 function () {
    return view('Pages.services');
})->name('services');

Route::get('/contact',
 function () {
    return view('Pages.contact');
})->name('contact');