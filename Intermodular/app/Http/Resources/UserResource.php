<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // retun parent::toArray($request);


        return [

            'id' => $this->id,
            'nombre' => $this->nombre,
            'dni' => $this->dni,
            'login' => $this->login,
            'roles' => RoleResource::collection($this->whenLoaded('roles')),
            'centro' => $this->centro ? $this->centro->nombre : null,
            'empresa' => new EmpresaResource($this->whenLoaded('empresa')),

        ];


    }
}
