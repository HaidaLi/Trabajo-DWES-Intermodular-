<?php

namespace Database\Seeders;

use App\Models\Formulario as form;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class formulario extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        return form::factory()->count(5)->create();

    }
}
