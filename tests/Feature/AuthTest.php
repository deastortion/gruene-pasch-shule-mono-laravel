<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthTest extends TestCase
{
    use RefreshDatabase;

    public function testRegistration()
    {
        $response = $this->post('/register', $this->getMockedUserData());
        $this->assertCount(1, User::all());

        $response->assertRedirect('/redirect-after-login');
    }


    public function testLogin()
    {
        $this->post('/register', $this->getMockedUserData());
        $this->assertCount(1, User::all());

        $data = [
            'email' => 'test@test.com',
            'password' => 'password',
        ];

        $response = $this->post('/login', $data);
        $currentUser = auth()->user();

        $this->assertEquals($currentUser->email, $data['email']);
        $response->assertStatus(302);
    }


    private function getMockedUserData()
    {
        return $data = [
            'name' => 'Test',
            'email' => 'test@test.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ];
    }

    public function testRegistrationWithFailedPasswordConfirmation()
    {
        $data = [
            'name' => 'Test',
            'email' => 'test@test.com',
            'password' => 'password',
            'password_confirmation' => 'wrong_password',
        ];

        $response = $this->post('/register', $data);
        $response->assertSessionHasErrors('password');
    }
}
