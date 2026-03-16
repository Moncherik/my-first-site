<?php

use App\Http\Controllers\BasicController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyPlaceController;

Route::get('/', [BasicController::class, 'index'])->name('home');

Route::get('/contact', [BasicController::class, 'contact'])->name('contact');

Route::get('/about', [BasicController::class, 'about'])->name(name: 'about');

Route::post('/contact', [BasicController::class, 'submit'])->name('contact.post');