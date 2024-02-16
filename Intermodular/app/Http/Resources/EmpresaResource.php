<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EmpresaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //return parent::toArray($request);
        return [
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'notas' => $this->notas,
            'email' => $this->email,
            'password' => $this->password,
            'direccion' => $this->direccion,
            'coordenadas' => [
                'lat' => explode(', ', $this->coordenadas)[0],
                'lng' => explode(', ', $this->coordenadas)[1],
            ],
            'cif' => $this->cif,
            'provincia' => $this->provincia,
            'poblacion' => $this->poblacion,
            'horario' => $this->horario,
            'dias_trabajo' => $this->dias_trabajo,
            'puestos_disponibles' => $this->puestos_disponibles,
            'categorias' => $this->categorias,
            'telefono' => $this->telefono,
            'imagen' => $this->imagen,
        ];
    }
}
