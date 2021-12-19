<?php


use App\Models\User;

use Illuminate\Foundation\Testing\RefreshDatabase;

uses(Tests\TestCase::class, RefreshDatabase::class);

test('authentication', function () {
    expect(true)->toBeTrue();
});

it('can not access protected routes without token', function () {

    $response = $this->get('/api/users/me', []);
    $response->assertRedirect(route('login'));
});

it('can access protected routes with token', function () {
    $user = User::factory()->create();
    $token = $user->createToken('API Token')->plainTextToken;

    expect($token)->not->toBeEmpty();
    $response = $this->withHeader('Authorization', 'Bearer ' . $token)
                ->get('/api/users/me', []);
    $response->assertStatus(200);
});