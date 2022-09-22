<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Establishment;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'phone' => ['required', 'string', 'min:10'],
            'cpf' => ['required', 'string', 'min:11'],
            'cnpj' => ['required', 'string', 'min:14'],
            'companyName' => ['required', 'string'],
            'tradingName' => ['required', 'string'],
            'addressUser' => ['required', 'string'],
            'addressCompany' => ['required', 'string'],
            'type' => ['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $establishment = Establishment::create([
            'company_name' => $data['companyName'],
            'trading_name' => $data['tradingName'],
            'cnpj' => $data['cnpj'],   
            'email' => $data['email'],
            'phone' => $data['companyPhone'],
            'address' => $data['addressCompany'],
        ]);

        return User::create([
            'name' => $data['name'],
            'cpf' => $data['cpf'],
            'email' => $data['email'],
            'password' => \Hash::make($data['password']),
            'establishment_id' => $establishment->id,
            'phone' => $data['phone'],
            'type' => $data['type'],
            'address' => $data['addressUser'],
        ]);
    }
}
