<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
    public function addProductCart(){
        return view('cartPage');
    }
    public function showCart(){
        $carts = Cart::where('user_id', Auth::id())->with('cartItems.products', 'cartItems.sizes')->get();
        $products = Product::with('items')->get();
        // dd($carts);
        return view('cartPage', compact('carts', 'products'));
    }


}
