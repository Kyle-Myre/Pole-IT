<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function store($product , $request) {
        Cart::create([
            "product_id" => $product,
            "user_id" => auth()->user()->id,
            "quantity" => $request->quantity,
        ]);
    }
}
