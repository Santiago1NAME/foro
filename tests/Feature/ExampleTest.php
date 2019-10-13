<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        
        $user = factory(\App\User::class)->create();


        //$response = $this->get('/');
        $response = $this->actingAs($user, 'api')->get('api/user');
        $response->assertStatus(200);
    }
}
