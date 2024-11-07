<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use App\Models\ProductItem;
use Illuminate\Support\Facades\Auth;


class carts extends Component
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
        $carts = Cart::where('user_id', Auth::id())->with('cartItems.products', 'cartItems.sizes')->get();
        $products = Product::with('items')->get();
        $productItems = ProductItem::ALL();
        $cartItems = CartItem::whereHas('carts', function($query) {
            $query->where('user_id', Auth::id());
        })->get();
        $totalItems = $cartItems->sum('quantity');
        $subtotalItems = $cartItems->sum('subtotal');
        // dd($cartItems);

        return view('components.carts', compact('cartItems', 'products', 'productItems', 'subtotalItems', ));
    }
}
