<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('homepage');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/cadastro', function () {
    return view('register');
});

Route::get('/ficha/{id}/{name}', function () {
    return view('ficha');
});

Route::get('/status/{id}/{name}', function () {
    return view('status');
});

Route::get('/inventario/{id}/{name}', function () {
    return view('inventory');
});

Route::get('/habilidades/{id}/{nome}', function () {
    return view('spells');
});

Route::get('/magias', function () {
    return view('cast');
});

Route::get('/magias/{id}/{nome}', function () {
    return view('cast_detail');
});

Route::get('/bestiario/{equipe}', function () {
    return view('bestiary');
});

Route::get('/bestiario/{id}/{nome}', function () {
    return view('creature');
});