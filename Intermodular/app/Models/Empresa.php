<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Centro;

class Empresa extends Model
{
    use HasFactory;
    protected $table = 'empresas';

    public function centros()
    {
        return $this->belongsToMany(Centro::class, 'centro_empresa');
    }

}

