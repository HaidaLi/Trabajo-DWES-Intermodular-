<?php

namespace Database\Seeders;

use App\Models\Centro;
use App\Models\Empresa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Usuario::factory()->count(20)->create();

        $empresa = Empresa::inRandomOrder()->first();
        $centro = Centro::inRandomOrder()->first();

       
        $usuario = new Usuario();
        $usuario->dni = '12345678X';
        $usuario->login = 'admin';
        $usuario->password = bcrypt('admin');
        $usuario->nombre = 'admin';
        $usuario->empresa_id = $empresa->id;
        $usuario->centro_id = $centro->id;
        $usuario->save();
        $usuario->roles()->sync([1]);
    }
}
