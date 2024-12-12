<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $table = 'transactions';
    protected $fillable = [
        'user_id',
        'total_amount',
        'payment_method',
        'transaction_date'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function transactionItems() {
        return $this->hasMany(TransactionItem::class);
    }

}
