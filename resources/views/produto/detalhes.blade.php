<!-- Herda do layout principal -->
@extends('layouts.app')
<!-- Inicia o conteudo que será escrito dentro do layout principal -->
@section('content')

<h1>Detalhes do produto: {{$p->nome}} </h1>
<ul>
	<li>
		<b>Valor:</b> R$ {{$p->valor}}
	</li>
	<li>
		<b>Descrição:</b> {{$p->descricao or 'Nenhuma descrição informada'}}
	</li>
	<li>
		<b>Quantidade em estoque:</b> {{$p->quantidade}}
	</li>
</ul>

@stop