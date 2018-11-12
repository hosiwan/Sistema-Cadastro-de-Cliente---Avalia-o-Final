@extends('layout')

@section('conteudo-principal')
<form method="POST" action="/produtos/criar-produto">
	{!! csrf_field() !!}
	<div>
		<label>Nome</label>
		<input type="text" name="nome">
	</div>
	<div>
		<label>Descrição</label>
		<input type="text" name="descricao">
	</div>
	<div>
		<label>Preço</label>
		<input type="text" name="preco">
	</div>
	<div>
		<label>Quantidade</label>
		<input type="text" name="quantidade">
	</div>
	<button type="submit">Criar Produto</button>
</form>
@stop