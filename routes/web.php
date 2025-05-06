<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactsController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('/contacts', ContactsController::class)->name('contacts');
