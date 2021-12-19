<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SpecialistTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $specialistTypes = array('Doctor','Nurse','Pharmacy','Lab Scientist');

        return [
            //
            'name' => $specialistTypes[array_rand($specialistTypes,1)],           
        ];
    }
}
