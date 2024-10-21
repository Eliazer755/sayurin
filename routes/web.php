<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::get('/about', function () {
    return view('about');
});


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/transaction', function () {
    return view('transaction');
});

Route::get('/testimonials', function () {
    return view('testimonials');
});

Route::get('/transactions', function () {
    return view('transactions');
});

//route resource for products
Route::resource('/products', \App\Http\Controllers\SayurController::class);


Route::get('/checkout', function () {
    return view('checkout');
});