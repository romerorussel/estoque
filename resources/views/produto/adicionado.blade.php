@extends('layouts.app')

@section('content')

	@if($retorno)
	
		<div class="alert-success">
			<p><b>Succeso! </b>Produto cadastrado com sucesso</p>
		</div>

	@else

		<div class="alert-danger">
			<b>Erro! </b>Não foi possível inserir o produto, verifique se preencheu todos os campos
		</div>

	@endif

@stop