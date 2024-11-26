<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

use App\Models\Cart;
use App\Models\Size;
use App\Models\Product;
use App\Models\CartItem;
use App\Models\ProductItem;
use Illuminate\Http\Request;
use App\Models\ProductReview;
use App\Models\ProductCategory;

class addToCart extends Component
{
    /**
     * Create a new component instance.
     */

     public $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {

        $products = Product::with('items')->get();
        $details = Product::with('items')->findOrFail($this->id);
        $items = ProductItem::find($this->id);
        $reviews = ProductReview::with('users')->get();
        $carts = Cart::with('cartItems')->get();
        $cartItems = CartItem::with('products')->get();
        $sizes = Size::all();

        return view('components.add-to-cart', compact('products', 'details', 'items', 'reviews', 'cartItems', 'sizes', 'carts'));
    }
}
