<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\CentroEmpresa;
use App\Models\Empresa;
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
        $this->call(UsuariosSeeder::class);
        $this->call(EmpresasSeeder::class);
        $this->call(CentrosSeeder::class);
        $this->call(CentrosEmpresasSeeder::class);
        $this->call(CategoriasSeeder::class);
        $this->call(ServiciosSeeder::class);
        $this->call(RolesUsuariosSeeder::class);
        $this->call(CategoriasServiciosSeeder::class);


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        
    }
}
