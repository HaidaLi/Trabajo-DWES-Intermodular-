<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Database\Factories\CategoriasFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::factory()->count(3)->create();
    }
}
