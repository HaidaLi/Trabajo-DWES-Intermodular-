<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaServicio extends Model
{
    use HasFactory;

    protected $fillable =  [
        'categoria_id',
        'servicio_id',

    ];



    protected $table = "categoria_servicio";
}
