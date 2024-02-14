<?php

namespace Database\Seeders;

use App\Models\Resenya;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResenyaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {

        return Resenya::factory()->count(5)->create();

    }
}
