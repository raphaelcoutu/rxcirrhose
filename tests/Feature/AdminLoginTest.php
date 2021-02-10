<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AdminLoginTest extends TestCase
{
    use RefreshDatabase;

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
        $user = User::factory()->make();

        $response = $this->actingAs($user)
            ->get('/admin');

        $response->assertStatus(200);
        $response->assertViewIs('admin.home');
    }
}
