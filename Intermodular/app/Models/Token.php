<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;
use Database\Seeders\Formulario;

class Token extends Model
{
    use HasFactory;

    protected $table =  'servicios';

    public  function empresa(){
        return $this->belongsTo(Formulario::class);
    }

}
