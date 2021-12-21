<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\FacilityTypeResource;
use App\Http\Resources\UserResource;

use App\Models\FacilityType;

class FacilityResource extends JsonResource
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
			'name' => $this->name,
            'type' => FacilityTypeResource::make(FacilityType::find($this->type)),
            'user' => UserResource::make($this->user),
        ];

        return parent::toArray($request);
    }
}
