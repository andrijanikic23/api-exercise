<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CountryResource extends JsonResource
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
            'country' => $this->name,
            'code' => $this->code,
            'capital' => $this->capital,
            'population' => $this->population,
            'area' => $this->area,
            'continentId' => $this->continent_id,
            'currencyId' => $this->currency_id,
        ];
    }
}
