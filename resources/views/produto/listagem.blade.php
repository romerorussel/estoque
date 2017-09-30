<!-- Herda do layout principal -->
@extends('layouts.app')
<!-- Inicia o conteudo que será escrito dentro do layout principal -->
@section('content')
	
	@if(empty($produtos))
	<div class="alert alert-danger">
		<p>Você não tem nenhum produto cadastrado</p>
	</div>

	@else

		<h1>Listagem de Produtos</h1>
			<table class="table table-bordered table-hover ">
				@foreach($produtos as $p)
					<tr class="{{$p->quantidade <= 1 ? 'danger' : ''}}">
						<td>{{$p->nome}}</td>
						<td>{{$p->valor}}</td>
						<td>{{$p->descricao}}</td>
						<td>{{$p->quantidade}}</td>
						<td><a href="/produtos/mostra/{{$p->id}}" class="btn btn-primary">Visualizar</a></td>
						<td><a href="/produtos/atualizar/{{$p->id}}" class="btn btn-primary">Alterar</a></td>
						<td><a href="{{action('ProdutoController@remove', $p->id)}}" class="btn btn-danger">Remover</a></td>
					</tr>
				@endforeach
			</table>
	@endif
	<div class="row">
		<div class="col-md-12">
			<h4>
				<span class="label label-danger pull-right">
					Um ou menos itens no estoque
				</span>
			</h4>
		</div>
	</div>
	<div class="row margem-top-25">
		<div class="col-md-12">
			@if(old('nome'))
				<div class="alert-success">
					<p><b>Succeso! </b>Produto {{old('nome')}} cadastrado com sucesso</p>
				</div>
			@endif
		</div>
	</div>
	
	
		
@stop