<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;

class Servicios extends Model
{
    use HasFactory;

    public  function categorias(){
        return $this->belongsToMany(Categoria::class);
    }

}
