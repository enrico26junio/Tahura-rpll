<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuMinumanController extends Controller
{
    public function index()
    {
        $menuMinuman = [
            (object)[ 'name' => 'Es Teh', 'price' => 5000, 'image' => '/images/es-teh.jpg' ],
            (object)[ 'name' => 'Kopi Hitam', 'price' => 10000, 'image' => '/images/kopi-hitam.jpg' ],
            (object)[ 'name' => 'Jus Jeruk', 'price' => 15000, 'image' => '/images/jus-jeruk.jpg' ],
            (object)[ 'name' => 'Soda Gembira', 'price' => 12000, 'image' => '/images/soda-gembira.jpg' ],
            (object)[ 'name' => 'Air Mineral', 'price' => 3000, 'image' => '/images/air-mineral.jpg' ],
            (object)[ 'name' => 'Milkshake', 'price' => 20000, 'image' => '/images/milkshake.jpg' ],
        ];

        return view('menu-minuman.index', compact('menuMinuman'));
    }
}
