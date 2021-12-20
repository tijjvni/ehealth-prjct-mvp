<?php

use App\Models\SpecialistType;
use App\Models\Specialist;
use App\Models\User;

use Illuminate\Foundation\Testing\RefreshDatabase;

uses(Tests\TestCase::class, RefreshDatabase::class);

test('specialists', function () {
    expect(true)->toBeTrue();
});

it('can get all specialists list', function () {
    $user = User::factory()->create();
    $token = $user->createToken('API Token')->plainTextToken;

    $response = $this->withHeader('Authorization', 'Bearer ' . $token)
                ->getJson('/api/specialists', []);
    $response->assertStatus(200);
});

it('can not create a specialist without request body', function () {
    $user = User::factory()->create();
    $token = $user->createToken('API Token')->plainTextToken;

    $response = $this->withHeader('Authorization', 'Bearer ' . $token)
                ->postJson('/api/specialists', []);
    $response->assertStatus(422);
});

it('can creates a new specialists', function () {
    $user = User::factory()->create();
    $token = $user->createToken('API Token')->plainTextToken;
    $specialistType = SpecialistType::factory()->create()->id;

    $response = $this->withHeader('Authorization', 'Bearer ' . $token)
                ->postJson('/api/specialists', [
                    'title' => 'Dr', 
                    'user' => $user->id,
                    'type' => $specialistType
                ]);
    $response->assertStatus(200);
});

it('can show a specialist', function () {
    $specialist = Specialist::factory()->create();
    $token = $specialist->user->createToken('API Token')->plainTextToken;

    // dd($specialist);
    $response = $this->withHeader('Authorization', 'Bearer ' . $token)
                ->get('/api/specialists/'.$specialist->id);

    // dd($response->json());
    $response->assertStatus(200);
});

it('can update an existing specialists', function () {
    $specialist = Specialist::factory()->create();
    $token = $specialist->user->createToken('API Token')->plainTextToken;

    $response = $this->withHeader('Authorization', 'Bearer ' . $token)
                    ->json('PUT','/api/specialists/'.$specialist->id, [
                        'specialist' => $specialist->id, 
                        'title' => $specialist->title, 
                        'type' => $specialist->type->id, 
                    ]);
    $response->assertStatus(200);
});

it('can not update an existing specialists without required parameters', function () {
    $specialist = Specialist::factory()->create();
    $token = $specialist->user->createToken('API Token')->plainTextToken;

    $response = $this->withHeader('Authorization', 'Bearer ' . $token)
                    ->json('PUT','/api/specialists/'.$specialist->id, [
                        'specialist' => $specialist->id, 
                    ]);
    $response->assertStatus(422);
});
