<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    protected $fillable =[
        'user_id' , 'object' , 'message'
    ];
    use HasFactory;
}
