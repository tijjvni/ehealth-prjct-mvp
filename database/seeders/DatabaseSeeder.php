<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'Tijjani Yusuf',
            'email' => 'tijjvni@gmail.com',
            'password' => bcrypt(123698745),
        ]);
        $this->call([
            SpecialistTypeSeeder::class,
            FacilityTypeSeeder::class,
        ]);

        // \App\Models\Specialist::factory(10)->create();        
    
    }
}
