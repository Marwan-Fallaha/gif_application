<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

use \App\Models\User;

class UserTest extends TestCase
{
    use RefreshDatabase;
    /**
     * test if Home and History pages are showed to loged in users only.
     *
     * @test
     */
    public function only_logged_in_users_can_see_the_home_and_history_pages()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->get('/');
        $response->assertStatus(200);
        $response = $this->actingAs($user)->get('/history');
        $response->assertStatus(200);
    }
    /**
     * new user can register to the app.
     *
     * @test
     */
    public function new_user_can_create_new_account_and_redirected_to_home_page()
    {
        $user = [
            'name'      => 'test',
            'email'     => 'testemail@test.com',
            'password'  => 'passwordtest',
            'password_confirmation' => 'passwordtest'
          ];
          $response = $this->post('/register', $user);
          $response->assertRedirect('/');
          array_splice($user,2, 2);
          $this->assertDatabaseHas('users', $user);
    }
}
