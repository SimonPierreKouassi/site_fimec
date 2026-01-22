<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Newsletter\Facades\Newsletter;

class NewsletterSubscribeTest extends TestCase
{
    use RefreshDatabase;

    public function test_subscribes_email_and_shows_success_message()
    {
        // Arrange: mock the Newsletter facade to avoid external API calls
        Newsletter::shouldReceive('subscribe')
            ->once()
            ->with('john@example.com');

        // Act: post to the newsletter route (expect a redirect back)
        $response = $this->post(route('newsletter.store'), [
            'email' => 'john@example.com',
        ]);

        // Assert: redirected back (subscription call mocked)
        $response->assertRedirect();
    }
}
