<?php

use App\Http\Controllers\productController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', [productController::class, 'dashboard']);
Route::get('/product', [productController::class, 'productList']);


Route::get('/', function () {
    return view('welcome');
});




