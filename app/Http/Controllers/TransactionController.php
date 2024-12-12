<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use App\Models\ProductItem;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function checkout(){
        $userId = Auth::id();
        $carts = Cart::where('user_id', Auth::id())->with('cartItems.products', 'cartItems.sizes')->get();
        $products = Product::with('items')->get();
        $productItems = ProductItem::ALL();
        $cartItems = CartItem::whereHas('carts', function($query) {
            $query->where('user_id', Auth::id());
        })->get();
        $totalItems = $cartItems->sum('quantity');
        $subtotalItems = $cartItems->sum('subtotal');

        $totalPPN = 29000; // harus ada perhitungan PPN, ini baru menggunakan PPN palsu
        $totalOrder = $subtotalItems + $totalPPN;
        // dd($userId);


        return view('checkout', compact('userId', 'carts', 'products', 'totalItems', 'subtotalItems','totalPPN', 'totalOrder'));
    }

    public function checkoutDelivery() {
        $userId = Auth::id();
        $carts = Cart::where('user_id', Auth::id())->with('cartItems.products', 'cartItems.sizes')->get();
        $products = Product::with('items')->get();
        $productItems = ProductItem::ALL();
        $cartItems = CartItem::whereHas('carts', function($query) {
            $query->where('user_id', Auth::id());
        })->get();
        $totalItems = $cartItems->sum('quantity');
        $subtotalItems = $cartItems->sum('subtotal');

        $totalPPN = 29000; // harus ada perhitungan PPN, ini baru menggunakan PPN palsu
        $totalOrder = $subtotalItems + $totalPPN;
        // dd($userId);
        return view('checkoutDelivery', compact('userId', 'carts', 'products', 'totalItems', 'subtotalItems','totalPPN', 'totalOrder'));
    }
}
