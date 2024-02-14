<?php

namespace Database\Factories;

use App\Models\FormularioPregunta;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ResenyaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fecha' => $this->faker->date('Y-m-d'),
            'formulario_preguntas_id' => FormularioPregunta::all()->random()->id,

        ];
    }
}
