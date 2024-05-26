<?php

namespace App\Http\Controllers;

use App\Models\Product;

class HomeController extends Controller
{
    /**
     * return the shop page
     */
    public function shop()
    {
        $random = Product::inRandomOrder()->where('discount', '<>', null)->first();

        return view('shop.e-commerce', ['products' => Product::all()->take(3), 'randomProduct' => $random]);
    }

    /**
     * return the products page
     */
    public function products()
    {
        return view('shop.products', ['products' => Product::all()]);
    }

    public function home()
    {
        return view('home.index');
    }

    /**
     * return the home page
     */
    public function about()
    {
        return view('home.about');
    }

    public function contact()
    {
        return view('home.contact');
    }

    /**
     * return the feature page
     */
    public function feature()
    {
        return view('home.feature');
    }

    /**
     * return the price page
     */
    public function team()
    {
        return view('home.team');
    }
}
