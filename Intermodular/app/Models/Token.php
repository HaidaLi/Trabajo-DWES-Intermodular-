<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;
use App\Models\Formulario as Formularios;
use Database\Seeders\Formulario;

class Token extends Model
{
    use HasFactory;

    protected $table =  'token';

    public  function formulario(){
        return $this->belongsTo(Formularios::class);
    }

}
