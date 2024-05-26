<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Auth;
use Illuminate\Http\Request;
use Stripe\Stripe;

class ShopController extends Controller
{

    final public function cart()
    {
        return view('shop.cart-list');
    }

    final public function calculateTotal()
    {

        $total = 0;

        $cart = session()->get('cart', []);

        foreach ($cart as $id => $details) {
            if ($details['discount']) {
                $total += ($details['price'] - ($details['price'] * ($details['discount'] / 100))) * $details['quantity'];
            } else {
                $total += $details['price'] * $details['quantity'];
            }
        }
        session()->put('total', $total);
    }

    final public function addToCart($id)
    {
        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "price" => $product->price,
                "quantity" => 1,
                "description" => $product->description,
                "attachment" => $product->attachment,
                "dimensions" => $product->dimensions,
                "color" => $product->color,
                "discount" => $product->discount,
                "category" => $product->category->title,
            ];
        }

        session()->put('cart', $cart);
        $this->calculateTotal();

        return redirect()->route('products');
    }

    public function delete(Request $request)
    {
        $cart = session()->get('cart');
        if (isset($cart[$request->id])) {
            unset($cart[$request->id]);
            session()->put('cart', $cart);
        }
        ;
        $this->calculateTotal();
    }

    public function checkout()
    {
        Stripe::setApiKey('sk_test_51PKQiaRsYAsHifft2ULkLgaCIjmoPbLOPvGk93bNSSynMMnVkdc3BoYt9d2lcv3OfVqzDZT1HEvUFAWeBXIz6jyc00UIX3THVE');

        $session = \Stripe\Checkout\Session::create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'USD',
                        'product_data' => [
                            "name" => 'RANDOM'
                        ],
                        'unit_amount' => session()->get('total') * 100,
                    ],
                    'quantity' => 1,
                ]
            ],
            'mode' => 'payment',
            'success_url' => route('products')
        ]);

        return redirect()->away($session->url);
    }
}
