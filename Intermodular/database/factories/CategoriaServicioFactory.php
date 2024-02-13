<?php

namespace Database\Factories;

use App\Models\Categoria;
use App\Models\Servicio;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CategoriaServicio>
 */
class CategoriaServicioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "categoria_id" => Categoria::all()->random()->id,
            "servicio_id" => Servicio::all()->random()->id
        ];
    }
}
