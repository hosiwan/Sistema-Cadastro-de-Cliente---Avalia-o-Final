<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClientesController extends Controller
{

    public function listar(Request $request)
    {
    	$busca = $request->get('busca');

    	if ($request->has('busca')) {
    		$clientes = Cliente::where('nome', 'like', "%{$busca}%")->get();
    	} else {
    		$clientes = Cliente::all();
    	}


		return view('clientes.lista-clientes', [
			'clientes' => $clientes,
			'busca' => $busca
		]);
    }

    public function formulario_criar()
    {
    	return view('clientes.criar-clientes');
    }

    public function criar_cliente(Request $request)
    {
        $validador = \Validator::make(
            $request->all(), [
            'nome' => 'required',
            'data_nascimento' => 'required',
            'estado_civil' => 'required|numeric',
            'telefone' => 'required|min:1|numeric',
            'endereco' => 'required',
            'usuario' => 'required',
            'senha' => 'required',
            'cpf' => 'required'
        ]);

        if ($validador->passes()) {
        	$cliente = new Cliente();

    		$cliente->nome = $request->get('nome');
            $cliente->data_nascimento = $request->get('data_nascimento');
            $cliente->estado_civil = $request->get('estado_civil');
            $cliente->telefone = $request->get('telefone');
            $cliente->endereco = $request->get('endereco');
            $cliente->usuario = $request->get('usuario');
            $cliente->senha = $request->get('senha');
            $cliente->cpf = $request->get('cpf');
    		$cliente->save();            
		  return redirect('/clientes');
        }

        return redirect()->back()->withInput()->withErrors($validador);
    }

    public function editar($id)
    {
    	$cliente = cliente::find($id);
    	
    	return view('clientes.edita-cliente', [
    		'cliente' => $cliente
    	]);
    }

    public function alterar(Request $request, $id)
    {
        $cliente = Cliente::find($id);

        $cliente->nome = $request->get('nome');
        $cliente->data_nascimento = $request->get('data_nascimento');
        $cliente->estado_civil = $request->get('estado_civil');
        $cliente->telefone = $request->get('telefone');
        $cliente->endereco = $request->get('endereco');
        $cliente->usuario = $request->get('usuario');
        $cliente->senha = $request->get('senha');
        $cliente->cpf = $request->get('cpf');

        $cliente->save();

        return redirect('/clientes');
    }

    public function deletar($id)
    {
        $cliente = cliente::find($id);

        $cliente->delete();

        return redirect('/clientes');
    }
}
