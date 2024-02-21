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

        $provincias = ['Alicante', 'Castellon', 'Valencia'];
        $poblaciones = [
            'Alicante' => ['Alicante', 'Elche', 'Torrevieja'],
            'Castellon' => ['Castellon de la Plana', 'Vila-real', 'Burriana'],
            'Valencia' => ['Valencia', 'Gandía', 'Torrent'],
        ];
        $provincia = $this->faker->randomElement($provincias);
        $poblacion = $this->faker->randomElement($poblaciones[$provincia]);
        return [
            'nombre' => $nombre,
            'imagen' => "https://loremflickr.com/640/480/business",
            'password' => bcrypt($nombre),
            'calle' => $this->faker->address,
            'telefono' => $this->faker->phoneNumber,
            'poblacion' => $this->faker->city,
            'provincia' => $this->faker->state,
            'correo' => $this->faker->unique()->safeEmail,
            'calle' => $this->faker->address,
            'provincia' => $provincia,
            'poblacion' => $poblacion,
        ];
    }
}
