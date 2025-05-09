<?php

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('main');
Route::get('/contacts', ContactsController::class)->name('contacts');
Route::get('/about', AboutController::class)->name('about');

Route::controller(CatalogController::class)->name('catalog.')->group(function () {
    Route::get('/catalog', 'index')->name('index');
});

Route::controller(UserController::class)->name('user.')->group(function () {
    Route::get('/home', 'home')->name('home')->middleware('auth');
    Route::get('/login', 'loginPage')->name('login-page')->middleware('guest');
    Route::get('/register', 'registerPage')->name('register-page')->middleware('guest');
    Route::post('/register', 'registerUser')->name('register')->middleware('guest');
    Route::post('/login', 'loginUser')->name('login')->middleware('guest');
    Route::match(['get', 'post'], '/logout', 'logoutUser')->name('logout')->middleware('auth');
});

Route::controller(CartController::class)->name('cart.')->group(function () {
    Route::get('/cart', 'index')->name('index')->middleware('auth');
    Route::post('/cart', 'addToCart')->name('addToCart')->middleware('auth');
    Route::delete('/cart/delete', 'removeFromCart')->name('removeFromCart')->middleware('auth');
});

Route::controller(OrderController::class)->name('order.')->group(function () {
    Route::post('/order', 'createOrder')->name('createOrder')->middleware('auth');
});
