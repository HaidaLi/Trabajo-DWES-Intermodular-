<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empresa>
 */
class EmpresaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nombre = $this->faker->company;
        $dni = $this->faker->numerify('########');
        $cif = $dni . $this->faker->randomElement(['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'U']);

        return [
            'nombre' => $nombre,
            'descripcion' => $this->faker->text,
            'notas' => $this->faker->paragraph,
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt($nombre),
            'direccion' => $this->faker->address,
            'coordenadas' => $this->faker->latitude() . ', ' . $this->faker->longitude(),
            'cif' => $cif,
            'provincia' => $this->faker->state,
            'poblacion' => $this->faker->city,
            'horario' => $this->faker->time,
            'dias_trabajo' => $this->faker->word,
            'puestos_disponibles' => $this->faker->randomNumber,
            'categorias' => $this->faker->word,
        ];
    }
}
