<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuncionariosController extends Controller
{
    public function funcionarios() {
        return view('funcionarios');
    }
}