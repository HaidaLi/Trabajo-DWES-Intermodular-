<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;

class Servicio extends Model
{
    use HasFactory;

   


    protected $table =  'servicios';

    public  function categorias(){
        return $this->belongsToMany(Categoria::class, 'categoria_servicio', 'categoria_id', 'servicio_id');
    }


}
