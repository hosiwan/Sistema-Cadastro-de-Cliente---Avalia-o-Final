@extends('layout')

@section('conteudo-principal')
<div>
	<a href="/produtos/criar-produto">Criar Produto</a>
</div>
<div>
	<form method="GET" action="/produtos">
		<input type="text" value="{{ $busca }}" name="busca"/>
		<button type="submit">Pesquisar</button>
		@if($busca)
			<a href="/produtos">Limpar Busca</a>
		@endif
	</form>

</div>
@if(count($produtos))
	<table>
			<thead>
				<tr>
					<th>#</th>
					<th>Nome</th>
					<th>Descrição</th>
					<th>Quantidade</th>
					<th>Preço</th>
					<th>Ações</th>
				</tr>
			</thead>
			<tbody>
				@foreach($produtos as $produto)
					<tr>
						<td>{{ $produto['id'] }}</td>
						<td>{{ $produto['nome'] }}</td>
						<td>{{ $produto['descricao'] }}</td>
						<td>{{ $produto['quantidade'] }}</td>
						<td
							@if($produto['preco'] < 2)
								style="background-color: red"
							@else
								style="background-color: green"
							@endif
						>
							{{ $produto['preco'] }}
						</td>
						<td>
							<a href="/produtos/{{ $produto['id']}}/editar">Editar</a>
							<button>Deletar</button>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
@else
	<h3>
		Não foi localizado produtos com o filtro: {{ $busca }}
	</h3>
@endif
@stop