<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Especificar la tabla asociada
    protected $table = 'products';

    // Especificar los campos asignables
    protected $fillable = [
        'name',
        'description',
        'image',
        'price'
    ];
}
