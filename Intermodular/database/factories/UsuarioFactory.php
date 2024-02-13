<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $login = $this->faker->word;
        return [
            'dni' => $this->faker->numerify('##########'),
            'login' => $login,
            'password' => bcrypt($login),
            'nombre' => $this->faker->name,
        ];

    }
}
