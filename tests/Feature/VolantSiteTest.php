<?php

namespace Tests\Feature;

use App\Models\Contact;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class VolantSiteTest extends TestCase
{
    use RefreshDatabase;

    public function test_home_page_renders_with_exact_hero_headline(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Tell any robot or drone what to do in plain language. Verified before it moves.', false);
        $response->assertSee('Describe');
        $response->assertSee('Compile');
        $response->assertSee('Verify');
        $response->assertSee('Deploy');
        $response->assertSee('Industrial Arms');
        $response->assertSee('Humanoids');
        $response->assertSee('Mobile Robots');
        $response->assertSee('Drones');
    }

    public function test_product_page_renders_with_four_steps(): void
    {
        $response = $this->get('/product');

        $response->assertStatus(200);
        $response->assertSee('How Volant Works');
        $response->assertSee('Describe');
        $response->assertSee('Compile');
        $response->assertSee('Verify');
        $response->assertSee('Deploy');
    }

    public function test_about_page_renders_with_founder_and_munich(): void
    {
        $response = $this->get('/about');

        $response->assertStatus(200);
        $response->assertSee('About HOPn');
        $response->assertSee('Prof. Dr. Ahmed Ebada');
        $response->assertSee('Munich');
    }

    public function test_legal_pages_render_with_marked_placeholders(): void
    {
        $impressumResponse = $this->get('/impressum');
        $impressumResponse->assertStatus(200);
        $impressumResponse->assertSee('[PLACEHOLDER:');

        $datenschutzResponse = $this->get('/datenschutz');
        $datenschutzResponse->assertStatus(200);
        $datenschutzResponse->assertSee('[PLACEHOLDER:');
    }

    public function test_sitemap_xml_returns_valid_content(): void
    {
        $response = $this->get('/sitemap.xml');

        $response->assertStatus(200);
        $response->assertHeader('Content-Type', 'application/xml');
        $response->assertSee('<urlset', false);
        $response->assertSee('/product', false);
        $response->assertSee('/about', false);
        $response->assertSee('/contact', false);
    }

    public function test_contact_page_renders(): void
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
        $response->assertSee('Contact Our Engineering Team');
    }

    public function test_contact_form_validation_rejects_empty_submission(): void
    {
        $response = $this->post('/contact', []);

        $response->assertSessionHasErrors(['name', 'email', 'company', 'message']);
        $this->assertDatabaseCount('contacts', 0);
    }

    public function test_contact_form_stores_valid_data_in_database(): void
    {
        $payload = [
            'name' => 'Alexander Hartmann',
            'email' => 'alex@aerorobotics.de',
            'company' => 'AeroRobotics Labs Munich',
            'message' => 'We are integrating autonomous drones and need pre-motion safety barrier verification.',
            'form_token_time' => base64_encode(time() - 10),
            'hp_website' => '',
        ];

        $response = $this->post('/contact', $payload);

        $response->assertRedirect(route('contact.create'));
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('contacts', [
            'name' => 'Alexander Hartmann',
            'email' => 'alex@aerorobotics.de',
            'company' => 'AeroRobotics Labs Munich',
        ]);
        $this->assertDatabaseCount('contacts', 1);
    }

    public function test_contact_form_honeypot_silently_discards_bot_submission(): void
    {
        $botPayload = [
            'name' => 'Spam Bot',
            'email' => 'spambot@spamdomain.com',
            'company' => 'Spam Co',
            'message' => 'Buy cheap links now http://spamsite.xyz',
            'hp_website' => 'http://spamlink.com', // Filled honeypot
        ];

        $response = $this->post('/contact', $botPayload);

        $response->assertRedirect(route('contact.create'));
        // Must NOT save to database
        $this->assertDatabaseCount('contacts', 0);
    }

    public function test_admin_dashboard_renders_and_displays_inquiries(): void
    {
        Contact::create([
            'name' => 'Dr. Claudia Meier',
            'email' => 'claudia@tum.de',
            'company' => 'TUM Robotics Institute',
            'message' => 'Evaluating Volant deterministic motion compiler for bipedal humanoids.',
        ]);

        $response = $this->get('/admin');

        $response->assertStatus(200);
        $response->assertSee('Contact Inquiries');
        $response->assertSee('Dr. Claudia Meier');
        $response->assertSee('claudia@tum.de');
        $response->assertSee('TUM Robotics Institute');
    }

    public function test_admin_dashboard_allows_deleting_an_inquiry(): void
    {
        $contact = Contact::create([
            'name' => 'To Be Deleted',
            'email' => 'delete@example.com',
            'company' => 'Old Org',
            'message' => 'This message will be removed.',
        ]);

        $this->assertDatabaseCount('contacts', 1);

        $response = $this->delete("/admin/contacts/{$contact->id}");

        $response->assertRedirect(route('admin.index'));
        $this->assertDatabaseCount('contacts', 0);
    }
}
