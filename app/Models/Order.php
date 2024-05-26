<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'email', 'status', 'payment_method',
    ];

    final public function product(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'order_product');
    }

    final public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
