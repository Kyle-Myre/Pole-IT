<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $random = Product::inRandomOrder()->where('discount' , '<>' , null)->first();
        return view("e-commerce", [ 'products' => Product::all()->take(3) , 'randomProduct' =>  $random]);
    }
}
