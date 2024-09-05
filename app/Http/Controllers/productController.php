<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductItem;
use Illuminate\Http\Request;
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
        return view('product', compact('products'));
    }

    public function detailProduct($id){
        $products = Product::with('items')->get();
        $details = Product::with('items')->findOrFail($id);
        $items = ProductItem::all();
        // dd($items);
        return view('detailProduct', compact('products','details', 'items'));
    }
}
