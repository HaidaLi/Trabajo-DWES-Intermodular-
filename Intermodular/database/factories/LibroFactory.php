<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empresa>
 */
class LibroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nombre = $this->faker->word();
        return [
            'nombre' => $this->faker->company,
            'descripcion' => $this->faker->text,
            'notas' => $this->faker->paragraph,
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('password123'),
            'direccion' => $this->faker->address,
            'coordenadas' => $this->faker->latitude() . ',' . $this->faker->longitude(),
            'cif' => $this->faker->swiftBicNumber,
            'provincia' => $this->faker->state,
            'poblacion' => $this->faker->city,
            'horario' => $this->faker->randomElement(['9:00-17:00', '8:00-16:00', '10:00-18:00']),
            'dias_trabajo' => $this->faker->randomElement(['Lunes a Viernes', 'Lunes a Sábado', 'Martes a Sábado']),
            'puestos_disponibles' => $this->faker->numberBetween(1, 20),
            'categorias' => $this->faker->randomElement(['Informática', 'Marketing', 'Recursos Humanos']),


        ];
    }
}
