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
        return view('dashboard', compact('products', 'items', 'categories'));
    }
}
