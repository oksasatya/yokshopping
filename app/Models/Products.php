<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'sell_price',
        'buy_price',
        'image',
        'stock',
    ];


    public function user()
    {

        return $this->belongsToMany(User::class, 'products_users', 'user_id', 'product_id');
    }
}
