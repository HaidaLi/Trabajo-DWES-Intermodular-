<?php

namespace Database\Factories;

use App\Models\Centro;
use App\Models\Empresa;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Rol;

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

        $login = $this->faker->unique()->userName;
        $empresa = Empresa::inRandomOrder()->first()->id;
        $centro = Centro::inRandomOrder()->first()->id;
        

        return [
            'dni' => $this->faker->unique()->numerify('#########') . $this->faker->randomLetter(),
            'login' => $login,
            'password' => bcrypt($login),
            'nombre' => $this->faker->name,
            'empresa_id' => $empresa,
            'centro_id' => $centro
        ];

    }
}
