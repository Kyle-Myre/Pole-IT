<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'quanity',
        'price'
    ];

    final public function product(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    final public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
