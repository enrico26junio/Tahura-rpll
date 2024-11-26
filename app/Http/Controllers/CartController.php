<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    // Fungsi untuk menambah item ke dalam cart
    public function add(Request $request)
    {
        // Ambil data dari request
        $item = [
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'image' => $request->input('image'),
            'quantity' => 1, // default quantity 1
        ];

        // Ambil cart dari session, atau buat array baru jika kosong
        $cart = session()->get('cart', []);

        // Cek jika item sudah ada di cart
        $exists = false;
        foreach ($cart as $key => $value) {
            if ($value['name'] == $item['name']) {
                // Jika ada, tambahkan quantity
                $cart[$key]['quantity']++;
                $exists = true;
                break;
            }
        }

        // Jika item belum ada, tambahkan ke cart
        if (!$exists) {
            $cart[] = $item;
        }

        // Simpan cart ke session
        session()->put('cart', $cart);

        // Redirect ke halaman cart
        return redirect()->route('cart');
    }

    // Fungsi untuk menampilkan cart dan menghitung total harga
    public function index()
    {
        // Ambil cart dari session
        $cart = session()->get('cart', []);

        // Hitung total harga
        $total = 0;
        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        // Kirim cart dan total ke view
        return view('cart.index', compact('cart', 'total'));
    }
}
