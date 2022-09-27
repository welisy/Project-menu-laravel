<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
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
            'cnpj'=>'1010101010001'
        ]);
        
        \Auth::Logout();
        
    }
    /**
     * A basic feature test example.
     *
     * @return void
     */

    use RefreshDatabase;

    protected function setU(): void {
        parent::setUp();

        $this->post('/register', [
            'name' => 'wesleyD',
            'email' => 'wesleyy@gmail.com',
            'password' => '123456789',
            'password_confirmation' => '123456789',
            'address' => 'rua B. 6549',            
            'companyName' => 'Rest Runs ltda',
            'tradingName' => 'Rest Runs ',
            'cnpj' => '11594112345812',
            'phone' => '42998644851',
        ]);

        \Auth::logout();
    }

    public function test_the_aplication_returns_login_view_when_login_route_is_accessed()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);

        $response->assertSeeText('Login');
    }


    public function test_shouldnt_login_when_invalid_data()
    {
        $response = $this->post('/login');

        $response->assertInvalid(['email', 'password']);
    }

<<<<<<< HEAD
    public function test_should_login_when_valid_data()
    {
        $response = $this->post('/login', [
            'email' => 'wesleyy@gmail.com',
            'password' => '123456789',
        ]);

        $response->assertAuthenticated();
    }
=======

    public function test_should_login_when_valid_data()
    {
        $response = $this->post('/login', [
            'email' => 'welisy@gmail.com',
            'password' => '123456789',
        ]);

        $this->assertAuthenticated();
    }


>>>>>>> 35c6a9dc99f93d2ea3b839ccc4d0ccd0b4a4b8b7
}
