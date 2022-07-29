<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FailureTest extends TestCase
{
    /**
        @test
     */
    public function post_request()
    {
        $response = $this->withHeaders([
            'Accept' => 'application/json',])
            ->post('api/venues', ['name' => 'bob']);

        $response->assertStatus(422);
    }
}
