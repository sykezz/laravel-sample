<?php

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
        $response = $this->json('GET', '/test');

        $response->assertStatus(201)
            ->assertJson([
                'message' => 'Hello World'
            ]);
    }
}