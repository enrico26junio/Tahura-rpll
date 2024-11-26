<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuMinumanController extends Controller
{
    public function index()
    {
        // Menyusun menu minuman
        $menuMinuman = [
            (object)[ 'name' => 'Es Teh', 'price' => 5000, 'image' => asset('storage/Es Teh.png') ],
            (object)[ 'name' => 'Kopi Hitam', 'price' => 10000, 'image' => asset('storage/kopi hitam.png') ],
            (object)[ 'name' => 'Jus Jeruk', 'price' => 15000, 'image' => asset('storage/jusjeruk.png') ],
            (object)[ 'name' => 'Soda Gembira', 'price' => 12000, 'image' => asset('storage/soda-gembira.jpg') ],
            (object)[ 'name' => 'Air Mineral', 'price' => 3000, 'image' => asset('storage/air-mineral.jpg') ],
            (object)[ 'name' => 'Milkshake', 'price' => 20000, 'image' => asset('storage/milkshake.jpg') ],
        ];

        return view('menu-minuman.index', compact('menuMinuman'));
    }
}
