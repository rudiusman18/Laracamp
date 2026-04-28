<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/mentor', function () {
    return view('mentor', [
        'title' => 'Mentor'
    ]);
});

Route::get('/pricing', function () {
    return view('pricing', [
        'title' => 'Pricing'
    ]);
});

Route::get('/business', function () {
    return view('business', [
        'title' => 'Business'
    ]);
});

Route::get('/sign-in', function () {
    return view('sign-in', [
        'title' => 'Sign In'
    ]);
});



Route::get('/welcome', function () {
    return view('welcome', );
});
