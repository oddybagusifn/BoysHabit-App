<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductItem extends Model
{
    use HasFactory;
    protected $table = 'product_items';
    protected $fillable = [
        'product_id',
        'SKU',
        'qty_in_stock',
        'product_image',
        'price',
        'rating'
    ];

    public function product()
{
    return $this->belongsTo(Product::class);
}
}
