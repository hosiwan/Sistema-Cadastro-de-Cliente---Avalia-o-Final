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
        $validador = \Validator::make(
            $request->all(), [
            'nome' => 'required',
            'descricao' => 'required',
            'preco' => 'required|numeric',
            'quantidade' => 'required|min:1|numeric'
        ]);

        if ($validador->passes()) {
        	$produto = new Produto();

    		$produto->nome = $request->get('nome');
    		$produto->descricao = $request->get('descricao');
    		$produto->preco = $request->get('preco');
    		$produto->quantidade = $request->get('quantidade');
    		$produto->save();            
		  return redirect('/produtos');
        }

        return redirect()->back()->withInput()->withErrors($);
    }

    public function editar($id)
    {
    	$produto = Produto::find($id);
    	
    	return view('produtos.edita-produto', [
    		'produto' => $produto
    	]);
    }

    public function alterar(Request $request, $id)
    {
        $produto = Produto::find($id);

        $produto->nome = $request->get('nome');
        $produto->descricao = $request->get('descricao');
        $produto->preco = $request->get('preco');
        $produto->quantidade = $request->get('quantidade');

        $produto->save();

        return redirect('/produtos');
    }

    public function deletar($id)
    {
        $produto = Produto::find($id);

        $produto->delete();

        return redirect('/produtos');
    }
}
