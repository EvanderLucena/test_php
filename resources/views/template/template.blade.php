<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>GerOS</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body class="bg-info">


	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">GerOS</a>
		<button class="navbar navbar-toggler" type="button" data-toggle="collapse" data-target="#navBarPrincipal">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navBarPrincipal">

			<ul class="navbar-nav">
				<li class="nav-item dropdown">
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="navDrop">Cadastros</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="/clientes/lista_clientes">Clientes</a>
						<a class="dropdown-item" href="/fornecedores/lista_fornecedor">Fornecedores</a>
						<a class="dropdown-item" href="/funcionarios/lista_funcionario">Funcionários</a>
						<a class="dropdown-item" href="/produtos/lista_produto">Peças</a>
						<a class="dropdown-item" href="/servicos/lista_servico">Serviços</a>
						<a class="dropdown-item" href="/veiculos/lista_veiculo">Veículos</a>
					</div>
				</li>
			</ul>
			<ul class="navbar-nav">
				<li class="nav-item dropdown">
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="navDrop">Ordens de Serviço</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="#">Aguardando Orçamento</a>
						<a class="dropdown-item" href="#">Orçementos Prontos</a>
						<a class="dropdown-item" href="#">OS's Aprovadas</a>
						<a class="dropdown-item" href="#">OS's em Andamento</a>
						<a class="dropdown-item" href="#">OS's Concluídas</a>
						<a class="dropdown-item" href="#">OS's Finalizadas</a>
					</div>
				</li>
			</ul>
		</div>

	</nav>
	<div class="container">


		<div class="p-3 mb-2 bg-info">
			@yield('conteudo')
		</div>
	</div>
	<nav class="navbar navbar-light fixed-bottom bg-light">
		<a href="#" title="">GerOS</a>
	</nav>
</body>
</html>