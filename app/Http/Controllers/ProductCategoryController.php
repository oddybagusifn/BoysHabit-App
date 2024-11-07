<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\Product;
use App\Models\ProductItem;

class ProductCategoryController extends Controller
{
    public function showProductByCategory($categoryId) {
        $products = Product::with('items')->where('category_id', $categoryId)->get();
        // $items = ProductItem::find($categoryId);

        // dd($products);

        return view('productCategory', compact('products'));
    }

}
