<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SampleControllerTest extends TestCase
{
    public function test_example_success()
    {
        $data = [
            'name' => 'Test User',
        ];

        $response = $this->postJson('sample', $data);

        $response->assertStatus(200);
    }

    public function test_example_failure()
    {
        $data = [
            'name' => 'Test User',
        ];

        $response = $this->postJson('sample?test=10', $data);

        $response->assertStatus(422);
    }
}
