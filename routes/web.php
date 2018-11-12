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

Route::get('/produtos', function () {
	$produtos = \App\Produto::all();

	return view('produtos.lista-produtos', [
		'produtos' => $produtos
	]);

});

Route::get('/produtos/criar-produto', function () {
	return view('produtos.criar-produtos');
});

use \Illuminate\Http\Request;

Route::post('/produtos/criar-produto', function () {
	$produto = new App\Produto();

	$produto->nome = Request::get('nome');
	$produto->descricao = Request::get('descricao');
	$produto->preco = Request::get('preco');
	$produto->quantidade = Request::get('quantidade');
	$produto->save();
});

Route::get('/', function () {
    return view('welcome');
});
