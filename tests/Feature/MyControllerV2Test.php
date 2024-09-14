<?php

namespace Tests\Feature;

use Tests\TestCase;

class MyControllerV2Test extends TestCase
{
    public function testIndex()
    {
        $response = $this->json('GET', '/api/v2/test');

        $response->assertStatus(200)
            ->assertJson([
                'message' => 'Hello World V2'
            ]);
    }
}
