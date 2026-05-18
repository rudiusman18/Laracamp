<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

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

Route::get('/checkout', function () {
    return view('checkout', [
        'title' => 'Checkout'
    ]);
});

Route::get('/checkout/success', function () {
    return view('success-checkout', [
        'title' => 'Success Checkout'
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


require __DIR__.'/auth.php';
