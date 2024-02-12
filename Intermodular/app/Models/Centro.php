<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centro extends Model
{
    use HasFactory;

    protected $table = 'centros';

    public function empresas()
    {
        return $this->belongsToMany(Empresa::class,'centro_empresa');
    }

    public function usuarios()
    {
        return $this->hasMany(Usuario::class);
    }
}
