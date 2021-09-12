<?php

namespace Tests\Feature;

use Faker\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Response;
use Tests\TestCase;
use app\Models\User;

class UserControllerTest extends TestCase
{

    public function test_user_login_with_correct_credentials()
    {

        $loginData = ['email' => 'john@foo.bar', 'password' => '!6Foob@r9'];

        $this->json('POST', '/login', $loginData, ['Accept' => 'application/json'])
            ->assertStatus(204);

        $this->assertAuthenticated();
    }
}
