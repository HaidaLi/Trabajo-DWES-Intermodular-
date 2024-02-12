<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rol;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rol_1= new Rol();
        $rol_1->nombre = "tutor";
        $rol_1->save();

        $rol_2 = new Rol();
        $rol_2->nombre = "administrador";
        $rol_2->save();

        $rol_3= new Rol();
        $rol_3->nombre = "centro";
        $rol_3->save();

        $rol_4 = new Rol();
        $rol_4->nombre = "empresa";
        $rol_4->save();
    }
}
