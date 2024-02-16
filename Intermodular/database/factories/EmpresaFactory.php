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
            'descripcion' => $this->faker->text,
            'notas' => $this->faker->paragraph,
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt($nombre),
            'direccion' => $this->faker->address,
            'coordenadas' => $this->faker->latitude() . ', ' . $this->faker->longitude(),
            'cif' => $cif,
            'provincia' => $provincia,
            'poblacion' => $poblacion,
            'horario' => $this->faker->time,
            'dias_trabajo' => $this->faker->word,
            'puestos_disponibles' => $this->faker->randomNumber,
            'categorias' => $this->faker->word,
            'telefono' => $this->faker->phoneNumber,
            'imagen' => "https://loremflickr.com/640/480/business",
        ];
    }
}
