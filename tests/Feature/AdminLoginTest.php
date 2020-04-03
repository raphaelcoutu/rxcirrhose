<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AdminLoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testUserCanViewLoginPage()
    {
        $response = $this->get('/admin');

        $response->assertStatus(200);
        $response->assertViewIs('admin.login');
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testUserCannotViewLoginPageWhenAuthenticated()
    {
        $user = factory(User::class)->make();

        $response = $this->actingAs($user)
            ->get('/admin');

        $response->assertStatus(200);
        $response->assertViewIs('admin.home');
    }
}
