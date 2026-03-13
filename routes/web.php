<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyPlaceController;

Route::get('/', function () {
    return view("static.home");
});
Route::get('/contact', function () {
    return view("static.contact");
});
Route::get('/about', function () {
    return view("static.about");
});