@extends('layout')

@section('conteudo-principal')




@foreach ($errors->all() as $erro)
<div class="alert alert-danger">
{{ $errors }}
</div>
	
@endforeach

<form method="POST" action="/clientes/criar-cliente">
	{!! csrf_field() !!}
<div class="container">
	<div class="row">
		<div class="col-sm-3 col-xs-12">
			<label>Nome</label>
			<input value="{{ old('nome') }}" type="text" required name="nome" class="form-control">
		</div>
		<div class="col-sm-3 col-xs-12">
			<label>Data de Nascimento</label>
			<input value="{{ old('data_nascimento') }}" type="text" required name="data_nascimento" class="form-control">
		</div>
		<div class="col-sm-3 col-xs-12">
			<label>Estado Civil</label>
			<input value="{{ old('estado_civil') }}" type="text" required name="estado_civil" class="form-control">
		</div>
		<div class="col-sm-3 col-xs-12">
			<label>Telefone</label>
			<input value="{{ old('telefone') }}" type="text" required name="telefone" class="form-control">
		</div>
	</div>
	<div class="row">
		<div class="col-sm-3 col-xs-12">
			<label>Endereço</label>
			<input value="{{ old('endereco') }}"type="text" name="endereco" class="form-control" required>
		</div>
		<div class="col-sm-3 col-xs-12">
			<label>Usuário</label>
			<input value="{{ old('usuario') }}"type="text" name="usuario"  class="form-control"required>
		</div>
		<div class="col-sm-3 col-xs-12">
			<label>Senha</label>
			<input value="{{ old('senha') }}"type="text" name="senha" class="form-control" required>
		</div>
		<div class="col-sm-3 col-xs-12">
			<label>CPF</label>
			<input required value="{{ old('cpf') }}" type="text" name="cpf" class="form-control">
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12 col-xs-12" style="width: 100%; text-align: center; margin-top: 20px">
			<button class="btn btn-success" type="submit">Criar Cliente</button>
		</div>
	</div>
	</div>
	
</div>
</form>

@stop