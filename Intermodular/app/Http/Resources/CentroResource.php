<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CentroResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'nombre' => $this->nombre,
            'imagen' => $this->imagen,
            'telefono' => $this->telefono,
            'correo' => $this->correo,
            'direccion' => [
                'provincia' => $this->provincia,
                'poblacion' => $this->poblacion,
                'calle' => $this->calle,
                'coordenadas' => [
                    'lat' => $this->coordenadas ? $this->coordenadas->lat : null,
                    'lng' => $this->coordenadas ? $this->coordenadas->lng : null,
                ]
            ],
        ];
    }
}
