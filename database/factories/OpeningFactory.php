<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\SpecialistType;
use App\Models\Facility;

class OpeningFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'for' => SpecialistType::factory()->create(),
            'is_locum' => true, 
            'is_active' => true, 
            'facility_id' => Facility::factory()->create(),
        ];
    }
}
