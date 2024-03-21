<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{


    use RefreshDatabase;
   // use DatabaseTransactions;

    public function testCreateUser()
    {
        $user = User::factory()->create([
            'name' => 'Miller Jaramillo',
            'email' => 'millerjaramillo@example.com',
        ]);

        $this->assertEquals('MillerJaramillo', $user->name);
        $this->assertEquals('millerjaramillo@example.com', $user->email);
    }
}
