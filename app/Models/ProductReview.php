<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductReview extends Model
{
    use HasFactory;
    protected $table = 'product_reviews';
    protected $fillable = [
        'product_id',
        'user_id',
        'rating',
        'review',
    ];

    public function products(){
        return $this->belongsTo(Product::class);
    }

    public function users(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
