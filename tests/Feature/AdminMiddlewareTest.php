<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdminMiddlewareTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    // public function test_example(): void
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }
    public function test_admin_middleware() {
        $user = User::factory()->create(['is_admin' => false]);
    
        $response = $this->actingAs($user)->get('/dashboard');
        $response->assertRedirect('/login')
                 ->assertSessionHas('error', 'Unauthorized');
    }
    
}
