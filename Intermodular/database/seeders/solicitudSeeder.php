<?php

namespace Database\Seeders;

use App\Models\Solicitud;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class solicitudSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        return Solicitud::factory()->count(5)->create();

    }
}
