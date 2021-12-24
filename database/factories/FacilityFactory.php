<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\FacilityType;
use App\Models\User;

class FacilityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'address' => $this->faker->address, 
            'user_id' => User::factory()->create(),
            'type_id' => FacilityType::factory()->create(),
        ];
    }
}
