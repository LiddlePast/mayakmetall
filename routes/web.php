<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('/contacts', ContactsController::class)->name('contacts');
Route::get('/about', AboutController::class)->name('about');
