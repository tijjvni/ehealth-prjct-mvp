<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\SpecialistType;

class SpecialistTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //seed specialists types to database

        $specialistTypes = ['Doctor','Nurse','Pharmacy','Lab Scientist'];

        foreach($specialistTypes as $specialistType){

            $makeSpecialistType = SpecialistType::factory()->create([
                'name' => $specialistType,
            ]);
        }

    }
}
