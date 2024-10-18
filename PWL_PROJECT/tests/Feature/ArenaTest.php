<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ArenaTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->call('Delete', '/admin/arena', [
            'id' => '1',
            'jenis_id' => '1',
            'price' => '100000',
            'image' => 'arena1.jpg',
            'nama' => 'lapangan 1',
        ]);

        $this->assertTrue(true);
    }
}
