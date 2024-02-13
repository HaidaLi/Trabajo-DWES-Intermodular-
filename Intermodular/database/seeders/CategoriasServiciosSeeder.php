<?php

namespace Database\Seeders;

use App\Models\CategoriaServicio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriasServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        return CategoriaServicio::factory()->count(5)->create();
    }
}
