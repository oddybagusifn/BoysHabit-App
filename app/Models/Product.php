<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'slug',
        'category_id',
        'name',
        'description',
        'product_image',
    ];

    public function items()
    {
        return $this->hasMany(ProductItem::class);
    }

    public function reviews(){
        return $this->hasMany(ProductReview::class);
    }

    public function cartItems(){
        return $this->hasMany(CartItem::class);
    }

    public function categories()
    {
        return $this->belongsTo(ProductCategory::class);
    }
}
