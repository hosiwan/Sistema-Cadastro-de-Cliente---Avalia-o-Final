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

	$produtos = [
		[
			'id' => 1,
			'nome' => 'Arroz',
			'descricao' => 'Arroz tio joão',
			'preco' => 5.00,
			'quantidade' => 5
		],
		[
			'id' => 2,
			'nome' => 'Feijão',
			'descricao' => 'Feijão tio joão',
			'preco' => 1.00,
			'quantidade' => 1
		]
	];

	return view('produtos.lista-produtos', [
		'produtos' => $produtos
	]);

});

Route::get('/produtos/criar-produto', function () {
	echo "Criar produto";
});

Route::get('/', function () {
    return view('welcome');
});
