<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\MenuMinuman;
use Illuminate\Database\Seeder;

class MenuMinumanSeeder extends Seeder
{
public function run()
{
    MenuMinuman::create([
        'name' => 'Es Teh',
        'price' => 5000,
        'image' => 'menu/Es Teh.png',
    ]);

    MenuMinuman::create([
        'name' => 'Es Jeruk',
        'price' => 7000,
        'image' => 'menu/Jus Jeruk.png',
    ]);

    MenuMinuman::create([
        'name' => 'Milkshake',
        'price' => 7000,
        'image' => 'menu/Milkshake.jpg',
    ]);
    
    MenuMinuman::create([
        'name' => 'Kopi Hitam',
        'price' => 7000,
        'image' => 'menu/Kopi Hitam.png',
    ]);
    
    MenuMinuman::create([
        'name' => 'Soda Gembira',
        'price' => 7000,
        'image' => 'menu/Soda Gembira.png',
    ]);
    
    MenuMinuman::create([
        'name' => 'Air Mineral',
        'price' => 7000,
        'image' => 'menu/Air Mineral.png',
    ]);
}
}