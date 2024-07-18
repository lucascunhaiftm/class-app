<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public const BUY = 'buy';
    public const SELL = 'sell';

    use HasFactory;

    protected $fillable = ['type'];


    // Define the relationship with Product through the pivot table
    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_product')
                    ->withPivot('price', 'amount')
                    ->selectRaw('products.*, order_product.price * amount as total_by_product')
                    ->as('item');
    }

}
