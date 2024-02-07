<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Centro;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Empresa extends Model
{
    use HasFactory;
    protected $table = 'empresas';

    public function centros()
    {
        return $this->belongsToMany(Centro::class, 'centro_empresa');
    }

    public function usuarios(){
        return $this->hasMany(Usuario::class);
    }

    public function categorias(){
        return $this->belongsToMany(Categoria::class);
    }

}

