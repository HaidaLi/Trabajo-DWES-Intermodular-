<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion'
    ];



    public function usuarios(){
        return $this->belongsToMany(Empresa::class);
    }

    
    public function servicios(){
        return $this->belongsToMany(Servicio::class,'categoria_servicio','categoria_id', 'servicio_id' );
    }
}
