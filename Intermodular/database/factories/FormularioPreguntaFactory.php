<?php

namespace Database\Factories;

use App\Models\Formulario;
use App\Models\Pregunta;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FormularioPregunta>
 */
class FormularioPreguntaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'formulario_id' => Formulario::all()->random()->id,
            'preguntas_id' => Pregunta::all()->random()->id,
        ];
    }
}
