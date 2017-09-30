@extends('layouts.app')

@section('content')

	<h1>Novo Produto</h1>
	<form action="/produtos/adiciona" method="post" class="form form-produto">
		<!-- this input for method post -->
		<input type="hidden" name="_token" value="{{{csrf_token()}}}" />

		<label>Nome</label>
		<input name="nome" type="text" class="form-control" value="{{old('nome')}}" />

		<label>Descrição</label>
		<input name="descricao" type="text" class="form-control" value="{{old('descricao')}}" />

		<label>Valor</label>
		<input name="valor" type="text" class="form-control" value="{{old('valor')}}" />

		<label>Quantidade</label>
		<input name="quantidade" type="number" class="form-control" value="{{old('quantidade')}}" />

		<button type="submit" class="form-control btn btn-primary btn-block">Submit</button>
	</form>

	@if(count($errors) > 0)
		<label class="alert alert-danger margem-top-25">
			<ul>
				@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</label> 
	
	@endif

@stop