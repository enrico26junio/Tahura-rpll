<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuMakananController extends Controller
{
    public function index()
    {
        $menuMakanan = [
            (object)[ 'name' => 'Nasi Goreng', 'price' => 25000, 'image' => '/images/nasi-goreng.jpg' ],
            (object)[ 'name' => 'Mie Ayam', 'price' => 20000, 'image' => '/images/mie-ayam.jpg' ],
            (object)[ 'name' => 'Bakso', 'price' => 22000, 'image' => '/images/bakso.jpg' ],
            (object)[ 'name' => 'Soto Ayam', 'price' => 18000, 'image' => '/images/soto-ayam.jpg' ],
            (object)[ 'name' => 'Rendang', 'price' => 35000, 'image' => '/images/rendang.jpg' ],
            (object)[ 'name' => 'Ayam Geprek', 'price' => 25000, 'image' => '/images/ayam-geprek.jpg' ],
        ];

        return view('menu-makanan.index', compact('menuMakanan'));
    }
}
