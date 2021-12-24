<?php

use App\Models\SpecialistType;
use App\Models\Specialist;
use App\Models\User;

use Illuminate\Foundation\Testing\RefreshDatabase;

test('specialists', function () {
    expect(true)->toBeTrue();
});

it('can get all specialists list', function () {

    $response = $this->withHeader('Authorization', 'Bearer ' .getToken())
                ->getJson('/api/specialists', []);
    $response->assertStatus(200);
});

it('can not create a specialist without request body', function () {    
    
    $response = $this->withHeader('Authorization', 'Bearer ' .getToken())
                ->postJson('/api/specialists', []);
    $response->assertStatus(422);
});

it('can creates a new specialists', function () {
    
    $user = User::factory()->create();
    $specialistType = SpecialistType::factory()->create()->id;

    $response = $this->withHeader('Authorization', 'Bearer ' .getToken())
                ->postJson('/api/specialists', [
                    'title' => 'Dr', 
                    'user' => $user->id,
                    'type' => $specialistType
                ]);
    $response->assertStatus(201);
});

it('can show a specialist', function () {
    $specialist = Specialist::factory()->create();

    $response = $this->withHeader('Authorization', 'Bearer ' .getToken())
                ->get('/api/specialists/'.$specialist->id);
    $response->assertStatus(200);
});

it('can update an existing specialists', function () {
    $specialist = Specialist::factory()->create();
    
    $response = $this->withHeader('Authorization', 'Bearer ' .getToken())
                    ->json('PUT','/api/specialists/'.$specialist->id, [
                        'specialist' => $specialist->id, 
                        'title' => $specialist->title, 
                        'type' => $specialist->type->id, 
                    ]);
    $response->assertStatus(200);
});

it('can not update an existing specialists without required parameters', function () {
    $specialist = Specialist::factory()->create();

    $response = $this->withHeader('Authorization', 'Bearer ' .getToken())
                    ->json('PUT','/api/specialists/'.$specialist->id, [
                        'specialist' => $specialist->id, 
                    ]);
    $response->assertStatus(422);
});
