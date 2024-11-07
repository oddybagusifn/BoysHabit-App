<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProductItemController;
use App\Http\Controllers\ProductReviewController;
use App\Http\Controllers\ProductCategoryController;
use App\Models\Cart;
use App\Models\ProductReview;

Route::get('/', [ProductController::class, 'home']);
Route::get('/product', [ProductController::class, 'productView']);
Route::get('/detail_product/{id}', [ProductController::class, 'detailProduct'])->name('detail_product');
Route::post('/store-product/{id}', [CartItemController::class, 'productStore'])->middleware('auth');
Route::post('/store-review/{id}', [ProductReviewController::class, 'reviewStore']);

Route::get('/category/{id}', [ProductCategoryController::class, 'showProductByCategory']);

Route::post('/cart_page', [CartController::class, 'addProductCart'])->name('cart.add');
Route::get('/cart_page', [CartController::class, 'showCart'])->name('cart.show');

Route::delete('cart_item/{id}', [CartItemController::class, 'destroy'])->name('cart-items.destroy');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth');

















