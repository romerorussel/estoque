<!DOCTYPE html>
<html>
<head>
	<title>Controle de Estoque</title>
	<link href="/css/app.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/css/custom.css">
</head>
<body>
<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="/produtos" class="navbar-brand">Estoque Laravel</a>
				</div>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="{{action('ProdutoController@lista')}}">Listagem</a></li>
					<li><a href="{{action('ProdutoController@novo')}}">Novo</a></li>
					
				</ul>
			</div>
		</nav>
	<div class="container">

		@yield('conteudo')

	</div>

		<footer class="footer">
			<p>Livro de Laravel da Casa do Código</p>
		</footer>
</body>
</html>