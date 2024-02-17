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
                    'lat' => explode(', ', $this->coordenadas)[0],
                    'lng' => explode(', ', $this->coordenadas)[1],
                ],
            ],
            'vacantes' => $this->vacantes,
            'categorias' => explode(',', $this->categorias),
            'horario' => [
                [
                    'turno' => $this->turno,
                    'entrada' => $this->entrada,
                    'salida' => $this->salida,
                ],
            ],
            'nota' => [
                'estudiante' => $this->nota_alumno,
                'profesor' => $this->nota_profesor,
            ],
            'CIF' => $this->cif
        ];
    }
}
