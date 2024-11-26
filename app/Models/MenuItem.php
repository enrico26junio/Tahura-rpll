<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MenuItem extends Model
{
    protected $fillable = [
        'name',
        'price',
    ];

    public function showMenu()
    {
        $menuItems = MenuItem::all();
        return view('menu-makanan', compact('menuItems'));
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($menuItem) {
            Schema::create('menu_items', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->decimal('price', 10, 2);
                $table->timestamps();
            });
        });
    }
}

