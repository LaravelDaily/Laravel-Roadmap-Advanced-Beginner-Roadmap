<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RolesTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_with_user_role_cannot_see_delete_button_on_projects_index_page()
    {
        $user = User::factory()->create([
            'terms_accepted' => true
        ]);

        $response = $this->actingAs($user)->get('/projects');

        $response->assertDontSeeText('DELETE');
    }
}
