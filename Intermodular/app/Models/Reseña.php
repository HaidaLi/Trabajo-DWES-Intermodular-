<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reseña extends Model
{
    use HasFactory;
    protected $table = 'reseñas';
    protected $fillable = ['fecha','valor'];
    public function formulario()
    {
    return $this->belongsTo(Formulario::class);
    }
    public function centro_empresa() {

        return $this->hasOne(Token::class, 'idToken','codigo');
    }
}
