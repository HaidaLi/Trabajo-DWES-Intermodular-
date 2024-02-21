<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Categoria;

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

        $categorias = Categoria::pluck('nombre')->toArray();


        $categoriaAleatoria = $this->faker->randomElement($categorias);
        return [
            'nombre' => $nombre,
            'descripcion' => $this->faker->text,
            'nota_alumno' => $this->faker->numberBetween(1,100),
            'nota_profesor' => $this->faker->numberBetween(1,100),
            'correo' => $this->faker->unique()->safeEmail,
            'password' => bcrypt($nombre),
            'calle' => $this->faker->address,
            'coordenadas' => $this->faker->latitude() . ', ' . $this->faker->longitude(),
            'cif' => $cif,
            'provincia' => $provincia,
            'poblacion' => $poblacion,
            'horario' => $this->faker->time,
            'vacantes' => $this->faker->numberBetween(1,20),
            'categorias' => $categoriaAleatoria,
            'telefono' => $this->faker->phoneNumber,
            'imagen' => "https://loremflickr.com/640/480/business",
            'turno' => $this->faker->randomElement(['L-V', 'L-S', 'L-D']),
            'entrada' => $this->faker->time('H:i'),
            'salida' => $this->faker->time('H:i')
        ];
    }
}
