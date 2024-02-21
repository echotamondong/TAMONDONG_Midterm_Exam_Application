<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/anime', [ProductController::class, 'fav_anime']);