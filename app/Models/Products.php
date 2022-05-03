<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use PDO;

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


    public const validationRules = [
        'name' => 'required|string|min:6|max:255',
        'sell_price' => 'required',
        'buy_price' => 'required',
        'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:3000'],
        'stock' => 'required|numeric|min:0|not_in:0',
    ];
}
