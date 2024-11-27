<?php

namespace App\Http\Controllers;

use App\Models\MenuMinuman;
use Illuminate\Http\Request;

class MenuMinumanController extends Controller
{
    public function index()
    {
        $menuMinuman = MenuMinuman::all(); // Ambil semua data minuman dari database
        return view('menu-minuman.index', compact('menuMinuman'));
    }
}

