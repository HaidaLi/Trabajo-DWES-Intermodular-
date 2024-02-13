<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Empresa;
use App\Models\Centro;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CentroEmpresa>
 */
class CentroEmpresaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'empresa_id' => Empresa::all()->random()->id,
            'centro_id' => Centro::all()->random()->id,
        ];
    } 
}
