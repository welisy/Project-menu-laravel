<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MenuTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp():void
    {
        parent::setUp();
        
        $this->post('/register', [
            'name'=>'Welisy',
            'email'=>'welisy@gmail.com',
            'password'=>'123456789',
            'password_confirmation'=>'123456789',
            'company_name'=>'Empresa LTDA',
            'trading_name'=>'Nome Fantasia',
            'address'=>'Rua A',
            'phone'=>'(42)998644852',
            'cnpj'=>'1010101010001',
        ]);
        
        $user User::where ('email','welisy@gmail.com')->first();
        $this->actingAs($user);
        
    }
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
}
