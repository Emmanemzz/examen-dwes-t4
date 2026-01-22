<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prenda extends Model
{
    //Rellenar fillable
    protected $fillable = ['nombre', 'descripcion', 'precio'];
}
