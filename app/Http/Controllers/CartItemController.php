<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\CartItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartItemController extends Controller
{
    public function showCart(){
        $cartItems = CartItem::content();
        return view('components.cart', compact('cartItems'));
    }

    public function productStore($id, Request $request) {
        $products = Product::find($id);
        $products->load('items');

        // Periksa apakah produk dengan ID dan ukuran yang sama sudah ada di keranjang
        $existingCartItem = CartItem::where('cart_id', $request->input('cart_id'))
        ->where('product_id', $request->id)
        ->where('size_id', $request->input('size_id'))
        ->first();

        // dd($request->except(['_token', 'simpan']));

       if($existingCartItem){

        $existingCartItem->quantity += $request->input('quantity');
        $existingCartItem->subtotal += $request->input('subtotal');
        $existingCartItem->save();

       } else {
        CartItem::create([
            'cart_id' => $request->input('cart_id'),
            'cart_id' => $request->input('cart_id'),
            'product_id' => $request->id,
            'size_id'=> $request->input('size_id'),
            'quantity'=> $request->input('quantity'),
            'subtotal' => $request->input('subtotal')
        ]);
       }

            return redirect()->route('detail_product', ['id' => $id])->with('success', 'Product added to cart successfully!');

    }

    public function destroy($id) {
        $cartItems = CartItem::findOrFail($id);

        $cartItems->delete();

        return redirect()->back()->with('deleted', 'Product deleted from cart successfully!');
    }
}
