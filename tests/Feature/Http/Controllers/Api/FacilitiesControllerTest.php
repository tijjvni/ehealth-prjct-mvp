<?php

use App\Models\FacilityType;
use App\Models\Facility;
use App\Models\User;

use Faker\Factory as Faker;

use Illuminate\Foundation\Testing\RefreshDatabase;

test('facilities', function () {
    expect(true)->toBeTrue();
});

it('can get all facilities list', function () {

    $response = $this->withHeader('Authorization', 'Bearer ' .getToken())
                ->getJson('/api/facilities', []);
    $response->assertStatus(200);
});

it('can not create a facility without request body', function () {

    $response = $this->withHeader('Authorization', 'Bearer ' .getToken())
                ->postJson('/api/specialists', []);
    $response->assertStatus(422);
});

it('can create a facility', function () {
    $facilityType = FacilityType::factory()->create();

    $faker = Faker::create();

    $response = $this->withHeader('Authorization', 'Bearer ' .getToken())
                ->postJson('/api/facilities', [
                    'name' => '$faker->company',
                    'address' => '$faker->address',
                    'type' => $facilityType->id,
                ]);
    $response->assertStatus(201);
    $response->assertJsonStructure([
        'data' => [
            'name',
            'address',
            'type',
        ]
    ]);
});

it('can show a facility', function () {

    $facility = Facility::factory()->create();

    $response = $this->withHeader('Authorization', 'Bearer ' .getToken())
                ->get('/api/facilities/'.$facility->id);

    $response->assertStatus(200);
});

it('can update an existing facility', function () {    

    $facility = Facility::factory()->create();

    $response = $this->withHeader('Authorization', 'Bearer ' .getToken())
                    ->json('PUT','/api/facilities/'.$facility->id, [
                        'facility' => $facility->id, 
                        'name' => $facility->name, 
                        'address' => $facility->address, 
                        'type' => $facility->type->id, 
                    ]);

    $response->assertStatus(200);
});

it('can not update an existing facilities without required parameters', function () {  

    $facility = Facility::factory()->create();

    $response = $this->withHeader('Authorization', 'Bearer ' .getToken())
                    ->json('PUT','/api/facilities/'.$facility->id, [
                        'facilities' => $facility->id, 
                    ]);
    $response->assertStatus(422);
});
