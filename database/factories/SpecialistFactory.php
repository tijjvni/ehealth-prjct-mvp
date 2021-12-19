<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\SpecialistType;
use App\Models\User;

class SpecialistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $titles = array('Alh.','Dr','Miss','Malam','Mr','Haj.');
        return [
            'title' => $titles[array_rand($titles,1)],
            'user_id' => User::factory()->create(),
            'type_id' => SpecialistType::factory()->create(),
        ];
    }
}
