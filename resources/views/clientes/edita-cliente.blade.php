@extends('layout')

@section('conteudo-principal')
	<form method="POST" action="/clientes/{{ $cliente['id'] }}/editar">
	{!! csrf_field() !!}
	<div class="container">
	<div class="row">
		<div class="col-sm-3 col-xs-12">
		<label>Nome</label>
		<input value="{{ $cliente['nome'] }}" type="text" name="nome" class="form-control"required>
		</div>
		<div class="col-sm-3 col-xs-12">
			<label>Nascimento</label>
			<input value="{{ $cliente['data_nascimento'] }}" type="text" class="form-control"required name="data_nascimento">
		</div>
		<div class="col-sm-3 col-xs-12">
			<label>Estado Civil</label>
			<input value="{{ $cliente['estado_civil'] }}"type="text" class="form-control" name="estado_civil" required>
		</div>
		<div class="col-sm-3 col-xs-12">
			<label>Telefone</label>
			<input value="{{ $cliente['telefone'] }}"type="text" class="form-control" name="telefone" required>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-3 col-xs-12">
			<label>Endereço</label>
			<input value="{{ $cliente['endereco'] }}"type="text" class="form-control"name="endereco" required>
		</div>
		<div class="col-sm-3 col-xs-12">
			<label>Usuário</label>
			<input value="{{ $cliente['usuario'] }}"type="text" class="form-control" name="usuario" required>
		</div>
		<div class="col-sm-3 col-xs-12">
			<label>Senha</label>
			<input value="{{ $cliente['senha'] }}"type="text" class="form-control" name="senha" required>
		</div>
		<div class="col-sm-3 col-xs-12">
			<label>CPF</label>
			<input required value="{{ $cliente['cpf'] }}" type="text" class="form-control" name="cpf">
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12 col-xs-12" style="width: 100%; text-align: center; margin-top: 20px">
			<button type="submit" class="btn btn-success">Editar Cliente</button>
		</div>
		<div class="col-sm-12 col-xs-12" style="width: 100%; text-align: center; margin-top: 50px">
			<a href="/clientes"><img src="/img/botao-voltar.jpg"></a>
		</div>
	</div>
	
</form>
@stop