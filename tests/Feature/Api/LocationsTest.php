<?php

namespace Tests\Feature\Api;

use Tests\TestCase;

class LocationsTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/api/locations');

        $response->assertStatus(200);

        $response->assertJsonStructure([
            'data' => [
                'id',
                'name',
                'description',
            ]
        ]);
    }
}
