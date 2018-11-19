@extends('layout')

@section('conteudo-principal')
	<form method="POST" action="/produtos/criar-produto">
	{!! csrf_field() !!}
	<div>
		<label>Nome</label>
		<input value="{{ $produto['nome'] }}" type="text" name="nome">
	</div>
	<div>
		<label>Descrição</label>
		<input value="{{ $produto['descricao'] }}" type="text" name="descricao">
	</div>
	<div>
		<label>Preço</label>
		<input value="{{ $produto['preco'] }}"type="text" name="preco">
	</div>
	<div>
		<label>Quantidade</label>
		<input value="{{ $produto['quantidade'] }}" type="text" name="quantidade">
	</div>
	<button type="submit">Criar Produto</button>
</form>
@stop