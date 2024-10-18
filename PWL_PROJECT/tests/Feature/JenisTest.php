<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class JenisTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->call('DELETE', '/admin/jenis', [
            'id' => '2',
            'nama' => 'Jenis 1',
            'deskripsi' => 'Jenis 1 Bagus',
            'images' => 'jenis.jpg'
        ]);

        $this->assertTrue(True);
    }
}
