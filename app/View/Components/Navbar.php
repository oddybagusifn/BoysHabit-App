<?php

namespace App\View\Components;

use Closure;
use App\Models\Product;
use App\Models\CartItem;
use Illuminate\View\Component;
use App\Models\ProductCategory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;


class Navbar extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $categories = ProductCategory::all();
        $cartItems = CartItem::whereHas('carts', function($query) {
            $query->where('user_id', Auth::id());
        })->get();
        $products = Product::with('items')->get();
        $totalProducts = $cartItems->count();
        // dd($totalProducts);
        return view('components.navbar', compact('categories', 'totalProducts'));
    }
}
