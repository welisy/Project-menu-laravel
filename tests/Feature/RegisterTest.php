<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_the_aplication_returns_register_view_when_register_route_is_accessed()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);

        // $response->assertText('Cadastro');
    }

    public function test_shouldnt_register_user_when_invalid_data()
    {
        $response = $this->post('/register');

        $response->assertRedirect()
        ->assertInvalid(['name', 'email', 'password']);
    }

    public function test_should_register_user_when_valid_data()
    {
        $response = $this->post('/register', [
            'name' => 'wesleyD',
            'email' => 'wesleyy@gmail.com',
            'password' => '123456789',
            'password_confirmation' => '123456789',
            'cpf' => '11088271951',
            'phone' => '42998644851',
            'companyPhone' => '42998644551',
            'addressUser' => 'rua B. 6549',
            'addressCompany' => 'rua R. 1159',
            'companyName' => 'Rest Runs ltda',
            'tradingName' => 'Rest Runs ',
            'cnpj' => '11594112345812',
            'type' => 'manager',
        ]);

        $response->assertRedirect()->assertSessionHasNoErrors();

        $this->assertDatabaseHas('users', [
            'email' => 'wesleyy@gmail.com',
        ]);

        $this->assertDatabaseHas('establishments', [
            'cnpj' => '11594112345812',
        ]);
    }
}
