<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Stripe\Stripe;

class ShopController extends Controller
{
    /**
     * return the cart page
     */
    final public function cart()
    {
        return view('shop.cart-list');
    }

    /**
     * Takes up the session variable cart and calculates every product with discount included
     * if the cart is empty the total becomes *0*
     */
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

    /**
     * Adds a product to the shopping cart
     */
    final public function addToCart($id)
    {
        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1,
                'description' => $product->description,
                'attachment' => $product->attachment,
                'dimensions' => $product->dimensions,
                'color' => $product->color,
                'discount' => $product->discount,
                'category' => $product->category->title,
            ];
        }

        session()->put('cart', $cart);
        $this->calculateTotal();

        return redirect()->route('products');
    }

    /**
     * Removes a product from the session
     */
    public function delete(Request $request)
    {
        $cart = session()->get('cart');
        if (isset($cart[$request->id])) {
            unset($cart[$request->id]);
            session()->put('cart', $cart);
        }

        $this->calculateTotal();
    }

    /**
     * the checkout method for proceding payments
     */
    public function checkout()
    {
        /**
         * Stripe API Key (available at .env and provided in Stripe Website dashboard)
         */
        Stripe::setApiKey(env('STRIPE_SK'));

        $session = \Stripe\Checkout\Session::create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'USD',
                        'product_data' => [
                            'name' => 'RANDOM',
                        ],
                        'unit_amount' => session()->get('total') * 100,
                    ],
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
            'success_url' => route('products'),
        ]);

        return redirect()->away($session->url);
    }
}
