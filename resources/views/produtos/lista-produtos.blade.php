@extends('layout')

@section('conteudo-principal')
<a href="/produtos/criar-produto">Criar Produto</a>
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
						<a href="#">Editar</a>
						<button>Deletar</button>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@stop