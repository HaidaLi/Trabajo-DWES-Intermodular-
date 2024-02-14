<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    use HasFactory;
    protected $table = 'formularios';
    protected $fillable = ['nombre','descripcion','tipo'];
    public function token() {

        return $this->hasOne(Token::class, 'idToken','codigo');
    }
    public function preguntas() {

        return $this->belongsToMany(Pregunta::class);
    }
    public function libros()
    {
    return $this->hasMany(Resenya::class);
    }
}
