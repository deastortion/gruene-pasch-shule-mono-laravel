<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    public function testDeletingOfUser()
    {
        # code...
        $admin = $this->createAdmin();

        $this->actingAs($admin)->post('/register', [
            'name' => 'Test name',
            'email' => 'test@testmain.com',
            'password' => 'testPassword',
            'password_confirmation' => 'testPassword',
        ]);


        $this->assertCount(1, User::all());


        $response = $this->actingAs($admin)->delete('/dashboard/users/' . User::first()->id);

        $this->assertCount(0, User::all());

        $response->assertStatus(302);
    }


    private function createAdmin()
    {
        return User::factory([
            'is_admin' => 1,
        ])->create();
    }
}
