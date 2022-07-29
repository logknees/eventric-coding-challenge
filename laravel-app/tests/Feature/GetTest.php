<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GetTest extends TestCase
{
    /**
        @test
     */
    public function get_request()
    {
        $response = $this->get('api/venues');

        $response->assertStatus(200);
    }
}
