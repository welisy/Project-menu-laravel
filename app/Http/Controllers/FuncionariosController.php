<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuncionariosController extends Controller
{
    public function index()
    {
        $establishment_id = \Auth::user()->establishemnt_id;
        $users = User::where('establishment_id', $establishment_id) ->get();

        return view('users.index', ['users'=> $users]);
    }
}