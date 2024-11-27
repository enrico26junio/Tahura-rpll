<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuMakanan extends Model
{
    use HasFactory;

    protected $table = 'menu_makanan';

    // Tentukan kolom yang bisa diisi (mass assignable)
    protected $fillable = [
        'name',
        'price',
        'image',
    ];
}
