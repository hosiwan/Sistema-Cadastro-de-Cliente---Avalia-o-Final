@extends('layout')

@section('conteudo-principal')
	{{ $errors }}
<form method="POST" action="/produtos/criar-produto">
	{!! csrf_field() !!}
	<div>
		<label>Nome</label>
		<input value="{{ old('nome') }}" type="text" required name="nome">
	</div>
	<div>
		<label>Descrição</label>
		<input value="{{ old('descricao') }}" type="text" required name="descricao">
	</div>
	<div>
		<label>Preço</label>
		<input value="{{ old('preco') }}" type="text" required name="preco">
	</div>
	<div>
		<label>Quantidade</label>
		<input value="{{ old('quantidade') }}" type="text" required name="quantidade">
	</div>
	<button type="submit">Criar Produto</button>
</form>
@stop