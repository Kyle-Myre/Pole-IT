<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use App\Http\Middleware\midd;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class,'login'])->name('login');

Route::post('/login/authentificate', [
    AuthController::class,'authentificate'
])->name('authentificate');




Route::get('/register', [AuthController::class,'register'])->name('register');
Route::post('/register/add', [AuthController::class,'add'])->name('add');
Route::get('/goodies', [HomeController::class,'shop'])->name('e-commerce');
Route::get('/goodies/products', [HomeController::class,'products'])->name('products');

Route::get('/about', [HomeController::class,'about'])->name('about');
Route::get('/contact', [HomeController::class,'contact'])->name('contact');
Route::get('/error', [ HomeController::class,'error'])->name('error');
Route::get('/quote', [HomeController::class,'quote'])->name('quote');
Route::get('/price', [HomeController::class, 'price'])->name('price');
Route::get('/service', [HomeController::class,'service'])->name('service');
Route::get('/team', [HomeController::class,'team'])->name('team');



Route::get('/goodies/product/show/id={id}' , function ($id) {
    return view('shop.product-view', ['product' => Product::find( $id )]);
})->name('product-show');




Route::get('/home', [ HomeController::class,'home'])->name('home');



Route::group(['middleware' => 'auth'] , function () {

    Route::get('/goodies/cart' , [ShopController::class , 'cart'])->name('cart-list');
    Route::get("/logout", [AuthController::class, "logout"])->name("logout");
    Route::post('/goodies/product/add-to-cart/{product}', [ShopController::class , 'add'])->name('add-to-cart');
    
});




Route::get('/welcome' , function () {
    return view('index' , ['product' => Product::all()]);
});