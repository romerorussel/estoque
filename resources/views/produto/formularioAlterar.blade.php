@extends('layouts.app')

@section('content')

	<h1>Alterar Produto Identificação: {{$id}}</h1>
	<form action="/produtos/alterar/{{$id}}" method="post" class="form form-produto">
	
		<input type="hidden" name="_token" value="{{{csrf_token()}}}" />

		<label>Nome</label>
		<input name="nome" type="text" class="form-control" />

		<label>Descrição</label>
		<input name="descricao" type="text" class="form-control" />

		<label>Valor</label>
		<input name="valor" type="text" class="form-control" />

		<label>Quantidade</label>
		<input name="quantidade" type="number" class="form-control" />

		<button type="submit" class="form-control btn btn-primary btn-block">Submit</button>
	</form>


@stop