<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'total_price',
    ];

    protected $table = 'order_product';

    final public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    final public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
