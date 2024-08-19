<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductItemController;

Route::get('/', [ProductController::class, 'home']);





