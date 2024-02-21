<?php

namespace Database\Seeders;

use App\Models\RolUsuario;
use App\Models\Usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesUsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        return RolUsuario::factory()->count(30)->create();
    }
}
