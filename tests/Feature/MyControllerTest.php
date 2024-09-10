<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MyControllerTest extends TestCase
{
    /**
     * Test the index method of MyController.
     *
     * @return void
     */
    public function testIndex()
    {
        $response = $this->json('GET', '/api/test');

        $response->assertStatus(200)
            ->assertJson([
                'message' => 'Hello World'
            ]);
    }
}
