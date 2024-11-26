<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = [
            (object)[ 'name' => 'Makanan A', 'price' => 15000, 'quantity' => 1 ],
            (object)[ 'name' => 'Minuman B', 'price' => 10000, 'quantity' => 1 ],
        ];

        $totalPrice = array_sum(array_map(function($item) {
            return $item->price * $item->quantity;
        }, $cartItems));

        return view('cart.index', compact('cartItems', 'totalPrice'));
    }
}
