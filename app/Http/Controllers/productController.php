<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard()
    {
        $dataProducts = Product::take(4)->get();
        return view('dashboard', compact('dataProducts'));
    }

    public function productList(){
        $dataProducts = Product::all();
        return view('product', compact('dataProducts'));
    }
}
