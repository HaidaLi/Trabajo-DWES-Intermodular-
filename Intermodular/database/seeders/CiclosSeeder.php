<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ciclo;

class CiclosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        return Ciclo::factory()->count(5)->create();
    }
}
