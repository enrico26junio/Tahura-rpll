<?php

namespace App\Http\Controllers;

use App\Models\MenuMakanan;

class MenuMakananController extends Controller
{
    public function index()
    {
        // Ambil semua data menu makanan dari database
        $menuMakanan = MenuMakanan::all();

        // Kirim data makanan ke view
        return view('menu-makanan.index', compact('menuMakanan'));
    }
}
