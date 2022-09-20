<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MenuTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_the_aplication_redirect_returns_when_the_route_accessed()
    {
        $response = $this->get('/');

        $response->assertStatus(302);

        $response->assertRedirect('/login');

    }
    // protected function setUp(): void 
    // {
    //     parent::setUp();
    //     $this->post('/register', [
    //         'name' => 'wesley',
    //         'email' => 'wesle@gmail.com',
    //         'password' => 'topsecret',
    //         'password_confirmation' => 'topsecret',
    //         'companyName' => '',
    //         'trandingName' => '',
    //         'address' => '',
    //         'phone' => '',
    //         'cnpj' => '',
    //     ]);
    // }
}
