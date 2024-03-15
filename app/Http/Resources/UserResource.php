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
        return [
            'id' => $this->id,
            'name' => $this->name,
            'nickname' => $this->nickname,
            'gender' => $this->gender,
            'birthdate' => $this->birthdate,
            'cpf' => $this->cpf,
            'phone' => $this->phone,
            'email' => $this->email,
            'subscribe' => $this->subscribe,
            'password' => $this->password,
            'shareData' => $this->shareData,
            'addresses' => $this->addresses,
            'mainAddress' => $this->addresses_id
        ];
    }
}
