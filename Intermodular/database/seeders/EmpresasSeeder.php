<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Empresa;

class EmpresasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        return Empresa::factory()->count(20)->create();
    }
}
