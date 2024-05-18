<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','price','quantity',
        'description','attachment',
        'dimensions','color',
        'discount','category'
    ];
    final public function order() : BelongsToMany {
        return $this->belongsToMany(Order::class);
    }
}
