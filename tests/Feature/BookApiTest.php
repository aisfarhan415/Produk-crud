<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BookApiTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    // public function test_example(): void
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }
    public function test_api_books() {
        $response = $this->getJson('/api/books');
        $response->assertStatus(200)
                 ->assertJsonStructure(['data' => ['*' => ['id', 'title', 'author', 'published_year']]]);
    }
    
}
