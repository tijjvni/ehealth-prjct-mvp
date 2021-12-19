<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\FacilityType;

class FacilityTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //seed facilities types to database

        $facilityTypes = ['Hospital','Clinic','Pharmacy','Lab','Maternity Home'];

        foreach($facilityTypes as $facilityType){
            $makeFacilityType = FacilityType::factory()->create([
                'name' => $facilityType,
            ]);
        }        
    }
}
