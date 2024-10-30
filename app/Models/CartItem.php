<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;
    protected $table = 'cart_items';

    protected $fillable = [
        'cart_id',
        'product_id',
        'size_id',
        'quantity',
        'subtotal'
    ];

    public function carts(){
        return $this->belongsTo(Cart::class, 'cart_id');
    }

    public function products(){
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function sizes(){
        return $this->belongsTo(Size::class, 'size_id');
    }
}
