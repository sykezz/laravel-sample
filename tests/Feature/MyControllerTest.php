<?php

namespace Tests\Feature;

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
        $response = $this->json('POST', '/api/test', [
            'name' => 'John Doe',
            'email' => 'test@example.com'
        ]);
        $response->assertStatus(201)
            ->assertJson([
                'message' => 'User John Doe created!'
            ]);
    }

    public function testUpdate()
    {
        $response = $this->json('POST', '/api/test/1', [
            'name' => 'Jane Doe',
            'email' => 'jane@example.com'
        ]);

        $response->assertStatus(200)
            ->assertJson([
                'message' => 'User Jane Doe updated!'
            ]);
    }

    public function testDestroy()
    {
        $response = $this->json('DELETE', '/api/test/1');

        $response->assertStatus(200)
            ->assertJson([
                'message' => 'User deleted!'
            ]);
    }
}
