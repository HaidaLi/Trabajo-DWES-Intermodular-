<?php

namespace Database\Factories;

use App\Models\Rol;
use App\Models\RolUsuario;
use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RolUsuario>
 */
class RolUsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $usuarioId = Usuario::all()->random()->id;

        $rolesDisponibles = Rol::all();

        $rol = $rolesDisponibles->filter(function ($rol) use ($usuarioId) {
            return !RolUsuario::where('usuario_id', $usuarioId)->where('rol_id', $rol->id)->exists();
        })->random();

        return [
            'usuario_id' => $usuarioId,
            'rol_id' => $rol->id
        ];
    }
}
