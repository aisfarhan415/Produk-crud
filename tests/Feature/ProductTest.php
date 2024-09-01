<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    // public function test_example(): void
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }
    public function test_create_product(){
        $response = $this ->postJson('/api/products',[
            'nama_produk' => 'Sample Product',
            'deskripsi' => 'Product Description',
            'harga' => 100.00,
            'jumlah_stok' => 10,
        ]);

        $response->assertStatus(201)
        ->assertJsonStructure(['id', 'nama_produk', 'deskripsi', 'harga', 'jumlah_stok']);
    }
}
