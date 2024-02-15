<?php

namespace Database\Seeders;

use App\Models\FormularioPregunta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormularioPreguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {

        return FormularioPregunta::factory()->count(5)->create();
    }
}
