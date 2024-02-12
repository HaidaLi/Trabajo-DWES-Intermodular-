<?php

namespace Database\Seeders;

use App\Models\Empresa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;



class Empresaseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        return Empresa::factory()->count(5)->create();
    }
}
