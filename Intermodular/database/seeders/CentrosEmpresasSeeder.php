<?php

namespace Database\Seeders;

use App\Models\CentroEmpresa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CentrosEmpresasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        return CentroEmpresa::factory()->count(20)->create();
    }
}
