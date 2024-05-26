<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Support extends Model
{
    protected $fillable = [
        'user_id', 'object', 'message',
    ];

    use HasFactory;

    final public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
