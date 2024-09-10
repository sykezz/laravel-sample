<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MyControllerTest extends TestCase
{
    public function testIndex()
    {
        $response = $this->json('GET', '/api/test');

        $response->assertStatus(200)
            ->assertJson([
                'message' => 'Hello World'
            ]);
    }

    public function testStore()
    {
        $response = $this->json('POST', '/api/v1/test', [
            'name' => 'John Doe',
            'email' => 'test@example.com'
        ]);
        $response->assertStatus(201)
            ->assertJson([
                'message' => 'User John Doe created!'
            ]);
    }
}
