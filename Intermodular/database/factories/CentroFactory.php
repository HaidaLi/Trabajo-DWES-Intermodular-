<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Centro>
 */
class CentroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nombre= $this->faker->company;
        return [
            'nombre' => $nombre,
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt($nombre),
            'direccion' => $this->faker->address,
            'telefono' => $this->faker->phoneNumber,
            'poblacion' => $this->faker->city,
            'provincia' => $this->faker->state,
        ];
    }
}
