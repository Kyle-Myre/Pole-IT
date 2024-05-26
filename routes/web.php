<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

/** -- Authentification Routes -- **/
Route::get('/login', [
    AuthController::class, 'login',
])->name('login');

Route::get('/', function () {
    return redirect('/home');
})->name('login');

Route::post('/login', [
    AuthController::class, 'authentificate',
])->name('authentificate');

Route::get('/register', [
    AuthController::class, 'register',
])->name('register');

Route::post('/register', [
    AuthController::class, 'add',
])->name('add');

/** -- Home Routes -- */
Route::get('/about', [
    HomeController::class, 'about',
])->name('about');

Route::get('/contact', [
    HomeController::class, 'contact',
])->name('contact');

Route::get('/error', [
    HomeController::class, 'error',
])->name('error');

Route::get('/quote', [
    HomeController::class, 'quote',
])->name('quote');

Route::get('/price', [
    HomeController::class, 'price',
])->name('price');

Route::get('/service', [
    HomeController::class, 'service',
])->name('service');

Route::get('/team', [
    HomeController::class, 'team',
])->name('team');

Route::get('/goodies', [
    HomeController::class, 'shop',
])->name('e-commerce');

Route::get('/goodies/catalogue', [
    HomeController::class, 'products',
])->name('products');

Route::get('/home', [
    HomeController::class, 'home',
])->name('home');

Route::get('/blog', [
    BlogController::class, 'index',
])->name('blog');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/goodies/product/checkout', [ShopController::class, 'checkout'])->name('checkout');

    Route::post('/goodies/cart/add-to-cart/{id}', [
        ShopController::class, 'addToCart',
    ])->name('add-to-cart');

    Route::get('/goodies/cart', [
        ShopController::class, 'cart',
    ])->name('cart-list');

    Route::get('/logout', [
        AuthController::class, 'logout',
    ])->name('logout');

    Route::get('/goodies/product/show/id={id}', function ($id) {
        return view('shop.product-view', ['product' => Product::find($id)]);
    })->name('product-show');

    Route::delete('/goodies/prodcut/remove-cart-item', [ShopController::class, 'delete'])->name('delete.cart.product');

});
