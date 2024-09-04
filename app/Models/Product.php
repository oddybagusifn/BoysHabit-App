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
}
