<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\CentroEmpresa;
use App\Models\Empresa;
use App\Models\FormularioPregunta;
use Database\Factories\RolUsuarioFactory;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $this->call(RolesSeeder::class);
        $this->call(CategoriasSeeder::class);
        $this->call(EmpresasSeeder::class);
        $this->call(CentrosSeeder::class);
        $this->call(UsuariosSeeder::class);
        $this->call(CentrosEmpresasSeeder::class);

        $this->call(ServiciosSeeder::class);
        $this->call(RolesUsuariosSeeder::class);
        $this->call(CategoriasServiciosSeeder::class);
        $this->call(CiclosSeeder::class);


        $this->call(TokenSeeder::class);
        $this->call(FormularioSeeder::class);
        $this->call(PreguntasSeeder::class);
        $this->call(SolicitudSeeder::class);
        $this->call(FormularioPreguntaSeeder::class);
        $this->call(ResenyaSeeder::class);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


    }
}
