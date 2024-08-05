<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/api/colors', [ApiController::class, 'colors']);
Route::get('/api/products', [ApiController::class, 'products']);
Route::get('/api/brands', [ApiController::class, 'brands']);

Route::get('/', [\App\Http\Controllers\ProductController::class, 'index'])->name('catalog');

