<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;

Route::view('about-us', 'about.index')->name('about-us');
Route::view('contacts', 'contacts.index')->name('contacts');


Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::patch('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');
Route::get('/cart/update', [CartController::class, 'updateCart'])->name('cart.updateCart');
// web.php

Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
Route::get('/cart/details', [CartController::class, 'getCartDetails'])->name('cart.details');


Route::get('/cart', [CartController::class, 'index'])->name('cart.index');



Route::middleware('guest')->group(function () {
    // Route::get('register', [RegisterController::class, 'index'])->name('register');
    // Route::post('register', [RegisterController::class, 'store'])->name('register.store');

    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'store'])->name('login.store');
});

Route::middleware('auth')->group(function () {
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});

    // Route::get('/', [BlogController::class, 'index'])->name('home');
    Route::get('/{post}', [BlogController::class, 'show'])->name('home.show');

    Route::get('/', [BlogController::class, 'index'])->name('home');


    Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
    // routes/web.php
Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
