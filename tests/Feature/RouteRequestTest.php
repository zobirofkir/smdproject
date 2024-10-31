<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RouteRequestTest extends TestCase
{
    /**
     * Test Get Home Page
     */
    public function testGetHomePage() 
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testGetAboutPage() 
    {
        $response = $this->get('/abouts');

        $response->assertStatus(200);
    }

    public function testGetContactPage() 
    {
        $response = $this->get('/contacts');

        $response->assertStatus(200);
    }


    public function testGetServicesPage() 
    {
        $response = $this->get('/services');

        $response->assertStatus(200);
    }

    public function testGetBlogPage() 
    {
        $response = $this->get('/blogs');

        $response->assertStatus(200);
    }

    public function testGetEventPage() 
    {
        $response = $this->get('/events');

        $response->assertStatus(200);
    }
}
