<?php

namespace Database\Seeders;

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
        Usuario::factory()->count(5)->create();

        $usuario = new Usuario();
        $usuario->dni = '123456789X';
        $usuario->login = 'admin';
        $usuario->password = bcrypt('admin');
        $usuario->nombre = 'admin';
        $usuario->save();
    }
}
