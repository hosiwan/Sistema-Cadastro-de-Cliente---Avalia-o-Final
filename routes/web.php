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

Route::get('/produtos', 'ProdutosController@listar');

Route::get('/produtos/criar-produto', 'ProdutosController@formulario_criar');


Route::post('/produtos/criar-produto', 'ProdutosController@criar_produto');


Route::get('/produtos/{id}/editar', 'ProdutosController@editar');


Route::get('/', function () {
    return view('welcome');
});
