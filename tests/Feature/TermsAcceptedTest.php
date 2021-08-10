<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TermsAcceptedTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_without_accepted_terms_cannot_see_any_page()
    {
        $user = User::factory()->create([
            'terms_accepted' => false
        ]);

        $response = $this->actingAs($user)->get('/tasks');

        $response->assertStatus(302);

        $response->assertLocation('/terms');

        $response = $this->actingAs($user)->get('/projects');

        $response->assertStatus(302);

        $response->assertLocation('/terms');
    }
}
