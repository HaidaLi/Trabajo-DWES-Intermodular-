<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Centro;

class CentrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        return Centro::factory()->count(20)->create();
    }
}
