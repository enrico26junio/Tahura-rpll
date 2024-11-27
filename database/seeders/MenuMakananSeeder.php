<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MenuMakanan;

class MenuMakananSeeder extends Seeder
{
    public function run()
    {
        MenuMakanan::create([
            'name' => 'Nasi Goreng',
            'price' => 25000,
            'image' => 'menu/Nasi Goreng.png', 
        ]);

        MenuMakanan::create([
            'name' => 'Mie Ayam',
            'price' => 20000,
            'image' => 'menu/Mie Ayam.jpg',
        ]);

        MenuMakanan::create([
            'name' => 'Bakso',
            'price' => 15000,
            'image' => 'menu/Bakso.jpg',
        ]);
        MenuMakanan::create([
            'name' => 'Indomie',
            'price' => 10000,
            'image' => 'menu/Indomie.jpg',
        ]);
        MenuMakanan::create([
            'name' => 'Soto Ayam',
            'price' => 10000,
            'image' => 'menu/Soto Ayam.jpg',
        ]);
        MenuMakanan::create([
            'name' => 'Ayam Geprek',
            'price' => 25000,
            'image' => 'menu/Ayam Geprek.png',
        ]);
        
    }
}
