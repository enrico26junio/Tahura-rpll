<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuMinuman extends Model
{
    use HasFactory;

    protected $table = 'menu_minumans';

    // Tentukan kolom yang bisa diisi (mass assignable)
    protected $fillable = [
        'name',
        'price',
        'image',
    ];
}
