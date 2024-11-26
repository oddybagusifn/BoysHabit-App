<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Size;
use App\Models\Product;
use App\Models\CartItem;
use App\Models\ProductItem;
use Illuminate\Http\Request;
use App\Models\ProductReview;
use App\Models\ProductCategory;

class ProductController extends Controller
{
    public function home(){
        $products = Product::with('items')->get();
        $items = ProductItem::all();
        $categories = ProductCategory::all();
        // dd($products);
        return view('homepage', compact('products', 'items', 'categories'));
    }

    public function productView(){
        $products = Product::all();
        $reviews = ProductReview::with('users')->get();
        $carts = Cart::with('cartItems')->get();
        $cartItems = CartItem::with('products')->get();
        $sizes = Size::all();

        // dd($carts);
        return view('product', compact('products', 'reviews', 'cartItems', 'sizes', 'carts'));
    }

    public function detailProduct($id){
        $products = Product::with('items')->get();
        $details = Product::with('items')->findOrFail($id);
        $items = ProductItem::find($id);
        $reviews = ProductReview::with('users')->get();
        $carts = Cart::with('cartItems')->get();
        $cartItems = CartItem::with('products')->get();
        $sizes = Size::all();

        // dd($carts);
        return view('detailProduct', compact('products', 'details', 'items', 'reviews', 'cartItems', 'sizes', 'carts'));
    }

}
