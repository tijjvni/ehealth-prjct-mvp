<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;


use App\Http\Resources\SpecialistTypeResource;
use App\Http\Resources\FacilityResource;

class OpeningResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
			'for' => $this->for,
			'facility' => $this->facility_id,
            'type' => 'Locum',
			'is_active' => $this->is_active,
        ];
        
    }
}
