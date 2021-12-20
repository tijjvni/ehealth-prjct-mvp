<?php

use App\Models\FacilityType;
use App\Models\Facility;
use App\Models\User;

use Faker\Factory as Faker;

use Illuminate\Foundation\Testing\RefreshDatabase;

uses(Tests\TestCase::class, RefreshDatabase::class);

test('facilities', function () {
    expect(true)->toBeTrue();
});

it('can get all facilities list', function () {
    $user = User::factory()->create();
    $token = $user->createToken('API Token')->plainTextToken;

    $response = $this->withHeader('Authorization', 'Bearer ' . $token)
                ->getJson('/api/facilities', []);
    $response->assertStatus(200);
});

it('can not create a facility without request body', function () {
    $user = User::factory()->create();
    $token = $user->createToken('API Token')->plainTextToken;

    $response = $this->withHeader('Authorization', 'Bearer ' . $token)
                ->postJson('/api/specialists', []);
    $response->assertStatus(422);
});

it('can create a facility', function () {
    $user = User::factory()->create();
    $token = $user->createToken('API Token')->plainTextToken;
    $facilityType = FacilityType::factory()->create()->id;

    $faker = Faker::create();

    $response = $this->withHeader('Authorization', 'Bearer ' . $token)
                ->postJson('/api/facilities', [
                    'name' => $faker->company,
                    'address' => $faker->address,
                    'type' => $facilityType,
                ]);
    $response->assertStatus(200);
});

