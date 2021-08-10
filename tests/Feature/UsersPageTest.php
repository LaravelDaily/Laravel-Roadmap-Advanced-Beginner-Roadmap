<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersPageTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_with_admin_role_can_view_users_index_page()
    {
        $user = User::factory()->create([
            'terms_accepted' => true
        ]);

        $user->assignRole('admin');

        $response = $this->actingAs($user)->get('/users');

        $response->assertStatus(200);
    }

    public function test_user_with_user_role_cannot_view_users_index_page()
    {
        $user = User::factory()->create([
            'terms_accepted' => true
        ]);

        $response = $this->actingAs($user)->get('/users');

        $response->assertStatus(403);
    }
}
