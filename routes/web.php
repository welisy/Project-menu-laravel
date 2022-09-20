<?php

use Illuminate\Support\Facades\Route;

//HELPER
Route::get('/', function () {
    return redirect()->route('login');   
});

Route::get('/dadosempresa', 'App\Http\Controllers\DadosController@dadosempresa');

Route::get('/gerente', 'App\Http\Controllers\GerenteController@gerente');

// Route::get('/editcardapio', 'App\Http\Controllers\EditCardapioController@editcardapio');

// Route::get('/namoradoscardapio', 'App\Http\Controllers\NamoradoscardapioController@namoradoscardapio');

// Route::get('/principalcardapio', 'App\Http\Controllers\PrincipalcardapioController@principalcardapio');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::resource('user', App\Http\Controllers\UserController::class);
});

Route::middleware('auth')->group(function () {
    Route::resource('product', App\Http\Controllers\ProductController::class);
});

Route::middleware('auth')->group(function () {
    Route::resource('menu', App\Http\Controllers\MenuController::class);
});

Route::middleware('auth')->group(function () {
    Route::resource('order', App\Http\Controllers\OrderController::class);
});

Route::resource('menu.product', App\Http\Controllers\MenuController::class)
    ->only(['store', 'destroy']);

Route::get('/cardapio{menu}', 'App\Http\Controllers\MenuController@showPublic')->name('menu.public.show');