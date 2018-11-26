@extends('layout')

@section('conteudo-principal')
	<form method="POST" action="/produtos/{{ $produto['id'] }}/editar">
	{!! csrf_field() !!}
	<div>
		<label>Nome</label>
		<input value="{{ $produto['nome'] }}" type="text" name="nome" required>
	</div>
	<div>
		<label>Descrição</label>
		<input value="{{ $produto['descricao'] }}" type="text" required name="descricao">
	</div>
	<div>
		<label>Preço</label>
		<input value="{{ $produto['preco'] }}"type="text" name="preco" required>
	</div>
	<div>
		<label>Quantidade</label>
		<input required value="{{ $produto['quantidade'] }}" type="text" name="quantidade">
	</div>
	<button type="submit">Editar Produto</button>
	<a href="/produtos">Retornar</a>
</form>
@stop