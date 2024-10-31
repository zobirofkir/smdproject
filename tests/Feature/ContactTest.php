<?php

namespace Tests\Feature;

use App\Models\Contact;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContactTest extends TestCase
{
    use RefreshDatabase;
    
    /**
     * Test Post Contact
     */
    public function testPostContact(): void
    {
        $contact = Contact::factory()->create();
        $this->assertDatabaseHas('contacts', $contact->toArray());
    }
}
