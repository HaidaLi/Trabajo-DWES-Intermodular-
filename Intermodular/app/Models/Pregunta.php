<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    use HasFactory;
    protected $table = 'preguntas';
    protected $fillable = ['titulo','tipo','orden'];
    public function formulario() {

        return $this->belongsToMany(Formulario::class);
    }
}
