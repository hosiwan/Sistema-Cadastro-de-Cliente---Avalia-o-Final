@extends('layout')

@section('conteudo-principal')

<div style="widows: 100%; text-align: center; margin-top: 20px; margin-bottom: 20px">
	<form method="GET" action="/clientes">
		<input type="text" value="{{ $busca }}" name="busca" style="border: 1px solid blue; border-radius: 20px; text-align: center; font-style: italic;" placeholder="Pesquisar Clientes"/>
		<button type="submit" style="border-radius: 50%; cursor: pointer"><img src='/img/lupa.gif'></button>
		@if($busca)
			<a class="btn btn-default" href="/clientes">Limpar Busca</a>
		@endif
	</form>

</div>
@if(count($clientes))
<div class="container">
	<div class="row">
	<table class="table table-hover table-striped">
			<thead>
				<tr style="background-color: blue; color: #fff">
					<th>#</th>
					<th>Nome</th>
					<th>Nascimento</th>
					<th>Estado Civil</th>
					<th>Telefone</th>
					<th>Endereço</th>
					<th>Usuário</th>
					<th>Senha</th>
					<th>CPF</th>
					<th>Ações</th>
				</tr>
			</thead>
			<tbody>
				@foreach($clientes as $cliente)
					<tr>
						<td>{{ $cliente['id'] }}</td>
						<td>{{ $cliente['nome'] }}</td>
						<td>{{ $cliente['data_nascimento'] }}</td>
						<td>{{ $cliente['estado_civil'] }}</td>
						<td>{{ $cliente['telefone'] }}</td>
						<td>{{ $cliente['endereco'] }}</td>
						<td>{{ $cliente['usuario'] }}</td>
						<td>{{ $cliente['senha'] }}</td>
						<td>{{ $cliente['cpf'] }}</td>
						<td>
							<a href="/clientes/{{ $cliente['id']}}/editar">Editar</a>
							<a href="/clientes/{{ $cliente['id'] }}/deletar">Deletar</button>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>

<div style="widows: 100%; text-align: center;">
	<a class="btn btn-primary" href="/clientes/criar-cliente">Criar Cliente</a>
</div>
@else
	<h3>
		Não foi localizado clientes com o filtro: {{ $busca }}
	</h3>
@endif
@stop
