<?php

namespace App\Http\Controllers;

use App\Models\MenuMakanan;
use App\Models\MenuMinuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    // Menambahkan item ke cart
    public function addToCart(Request $request)
    {
        $menuId = $request->input('menu_id');
        $quantity = 1; // Asumsi 1 item setiap kali menambahkan ke cart
    
        // Menentukan apakah menambah item makanan atau minuman
        $menu = MenuMakanan::find($menuId) ?: MenuMinuman::find($menuId);
    
        if ($menu) {
            // Ambil cart yang ada di session atau buat array kosong jika belum ada
            $cart = Session::get('cart', []);
            
            // Cek apakah menu sudah ada di cart
            if (isset($cart[$menuId])) {
                // Jika sudah ada, tambahkan quantity-nya
                $cart[$menuId]['quantity'] += $quantity;
            } else {
                // Jika belum ada, simpan data menu
                $cart[$menuId] = [
                    'id' => $menu->id,
                    'name' => $menu->name,
                    'price' => $menu->price,
                    'image' => $menu->image, // Pastikan path gambar benar
                    'quantity' => $quantity
                ];
            }
            
            // Simpan cart kembali ke session
            Session::put('cart', $cart);
    
            // Redirect ke halaman cart dengan status berhasil
            return redirect()->route('cart')->with('status', 'Item berhasil ditambahkan ke cart.');
        }
    
        // Jika menu tidak ditemukan, redirect kembali ke menu makanan
        return redirect()->route('menu.makanan')->with('error', 'Menu tidak ditemukan.');
        return redirect()->route('menu.minuman')->with('error', 'Menu tidak ditemukan.');
    }
    
    // Menghapus item dari cart
    public function removeFromCart($menuId)
    {
        // Ambil cart yang ada di session
        $cart = Session::get('cart', []);

        // Jika item ada di cart, hapus
        if (isset($cart[$menuId])) {
            unset($cart[$menuId]);
            Session::put('cart', $cart);
        }

        // Redirect ke halaman cart dengan status berhasil
        return redirect()->route('cart')->with('status', 'Item berhasil dihapus dari cart.');
    }

    // Menampilkan halaman cart
    public function showCart()
    {
        // Ambil cart yang ada di session
        $cart = Session::get('cart', []);
        $total = 0;

        // Menghitung total harga
        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        // Menampilkan halaman cart dengan data cart dan total harga
        return view('cart.index', compact('cart', 'total'));
    }
}
