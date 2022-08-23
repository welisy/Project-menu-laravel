<?php

use Illuminate\Support\Facades\Route;

//HELPER
Route::get('/', function () {
    return view('welcome');    
});

Route::get('/teste', function(){
    return view('teste');
});

Route::get('/wesley', 'App\Http\Controllers\WesleyController@wesley');

Route::get('/cardapios', 'App\Http\Controllers\CardapioController@cardapios');

Route::get('/cadastro', 'App\Http\Controllers\CadastroController@cadastro');

Route::get('/dadosempresa', 'App\Http\Controllers\DadosController@dadosempresa');

Route::get('/editcardapio', 'App\Http\Controllers\EditCardapioController@editcardapio');

Route::get('/funcionarios', 'App\Http\Controllers\FuncionariosController@funcionarios');

Route::get('/gerente', 'App\Http\Controllers\GerenteController@gerente');

Route::get('/login', 'App\Http\Controllers\LoginController@login');

Route::get('/namoradoscardapio', 'App\Http\Controllers\NamoradoscardapioController@namoradoscardapio');

Route::get('/pedidos', 'App\Http\Controllers\PedidosController@pedidos');

Route::get('/principalcardapio', 'App\Http\Controllers\PrincipalcardapioController@principalcardapio');

Route::get('/produtos', 'App\Http\Controllers\ProdutosController@produtos');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::resource('user', App\Http\Controllers\UserController::class);
});