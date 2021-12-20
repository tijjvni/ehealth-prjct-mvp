<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FacilityTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $facilityTypes = array('Hospital','Clinic','Pharmacy','Lab','Maternity Home');

        return [
            //
            'name' => $facilityTypes[array_rand($facilityTypes,1)],           
        ];
    }
}
