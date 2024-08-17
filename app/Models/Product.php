<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'product_name',
        'stock_product',
        'product_price',
        'product_image',
        'description',
        'size',
        'gender',
        'rating'
    ];
}
