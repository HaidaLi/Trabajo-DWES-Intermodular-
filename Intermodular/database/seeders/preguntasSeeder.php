<?php

namespace Database\Seeders;

use App\Models\Pregunta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class preguntasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        return Pregunta::factory()->count(5)->create();

    }
}
