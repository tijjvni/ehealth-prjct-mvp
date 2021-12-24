<?php

use App\Models\Opening;
use App\Models\SpecialistType;
use App\Models\Facility;

use Faker\Factory as Faker;

use Illuminate\Foundation\Testing\RefreshDatabase;

test('openings', function () {
    expect(true)->toBeTrue();
});

it('can get all openings list', function () {
    
    $response = $this->withHeader('Authorization', 'Bearer ' .getToken())
                ->getJson('/api/openings', []);
    $response->assertStatus(200);
});


it('can not create a opening without request body', function () {

    $response = $this->withHeader('Authorization', 'Bearer ' .getToken())
                ->postJson('/api/openings', []);
    $response->assertStatus(422);
});

it('can create an opening', function () {
    $for = SpecialistType::factory()->create();
    $facility = Facility::factory()->create();

    $faker = Faker::create();

    $response = $this->withHeader('Authorization', 'Bearer ' .getToken())
                ->postJson('/api/openings', [
                    'for' => $for->id,
                    'facility' => $facility->id,
                    'type' => $faker->boolean,
                ]);
                
    $response->assertStatus(201);
    $response->assertJsonStructure([
        'data' => [
            'for',
            'facility',
            'type',
            'is_active',
        ]
    ]);
});

it('can show a facility', function () {

    $opening = Opening::factory()->create()->id;

    $response = $this->withHeader('Authorization', 'Bearer ' .getToken())
                ->get('/api/openings/'.$opening);

    $response->assertStatus(200);
    $response->assertJsonStructure([
        'data' => [
            'for',
            'facility',
            'is_active',
            'type'
        ]
    ]);    
});

it('can update an existing opening', function () {    

    $opening = Opening::factory()->create();

    $response = $this->withHeader('Authorization', 'Bearer ' .getToken())
                    ->json('PUT','/api/openings/'.$opening->id, [
                        'for' => $opening->for, 
                        'facility' => $opening->facility, 
                        'type' => $opening->is_locum, 
                        'is_active' => $opening->is_active, 
                    ]);

    $response->assertStatus(200);
    $response->assertJsonStructure([
        'data' => [
            'for',
            'facility',
            'type',
            'is_active',
        ]
    ]);     
});

it('can not update an existing openings without required parameters', function () {  

    $opening = Opening::factory()->create();

    $response = $this->withHeader('Authorization', 'Bearer ' .getToken())
                    ->json('PUT','/api/openings/'.$opening->id, [
                        'opening' => $opening->id, 
                    ]);
    $response->assertStatus(422);
});




