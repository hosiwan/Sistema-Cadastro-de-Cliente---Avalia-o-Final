<?php

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


Route::get('/clientes/', 'ClientesController@listar');

Route::get('/clientes/criar-cliente', 'ClientesController@formulario_criar');

Route::post('/clientes/criar-cliente', 'ClientesController@criar_cliente');

Route::get('/clientes/{id}/deletar', 'ClientesController@deletar');

Route::post('/clientes/{id}/editar', 'ClientesController@alterar');

Route::get('/clientes/{id}/editar', 'ClientesController@editar');


Route::get('/', function () {
    return view('bem-vindo');
});
