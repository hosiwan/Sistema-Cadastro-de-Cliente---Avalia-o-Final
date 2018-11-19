<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutosController extends Controller
{
    public function listar(Request $request)
    {
    	$busca = $request->get('busca');

    	if ($request->has('busca')) {
    		$produtos = Produto::where('nome', 'like', "%{$busca}%")->get();
    	} else {
    		$produtos = Produto::all();
    	}


		return view('produtos.lista-produtos', [
			'produtos' => $produtos,
			'busca' => $busca
		]);
    }

    public function formulario_criar()
    {
    	return view('produtos.criar-produtos');
    }

    public function criar_produto(Request $request)
    {
    	$produto = new Produto();

		$produto->nome = $request->get('nome');
		$produto->descricao = $request->get('descricao');
		$produto->preco = $request->get('preco');
		$produto->quantidade = $request->get('quantidade');
		$produto->save();

		return redirect('/produtos');
    }

    public function editar($id)
    {
    	$produto = Produto::find($id);
    	
    	return view('produtos.edita-produto', [
    		'produto' => $produto
    	]);
    }
}
