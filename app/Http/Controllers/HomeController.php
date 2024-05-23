<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function shop()
    {
        $random = Product::inRandomOrder()->where('discount' , '<>' , null)->first();
        return view("shop.e-commerce", [ 'products' => Product::all()->take(3) , 'randomProduct' =>  $random]);
    }

    public function products()
    {
        return view("shop.products", [ 'products' => Product::all()]);
    }

    public function home()
    {
        return view("home.index");
    }

    public function about()
    {
        return view("home.about");
    }

    public function contact()
    {
        return view("home.contact");
    }

    public function feature()
    {
        return view("home.feature");
    }

    public function price()
    {
        return view("home.price");
    }

    public function service()
    {
        return view("home.service");
    }

    public function team()
    {
        return view("home.team");
    }

    public function error()
    {
        return view("home.404");
    }

    public function quote()
    {
        return view("home.quote");
    }
}
