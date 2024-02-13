<?php

namespace Database\Seeders;

use App\Models\Reseña as Reseñas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class reseñaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        return Reseñas::factory()->count(5)->create();

    }
}
