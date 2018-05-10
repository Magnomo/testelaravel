<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
</head>
<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<ul class="nav navbar-nav">
			<li class="active"><a href="#">Inicio</a></li>
			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Produtos<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="{{url('produto')}}">Listar</a></li>
					<li><a href="{{url('produto/create')}}">Cadastrar</a></li>
				</ul>
			</li>
			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Clientes<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="{{url('cliente')}}">Listar</a></li>
					<li><a href="{{url('cliente/create')}}">Cadastrar</a></li>
				</ul>
			</li>
			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Usuarios<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="{{url('user')}}">Listar</a></li>
					<li><a href="{{url('user/create')}}">Cadastrar</a></li>
				</ul>
			</li>
			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Vendas<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="{{url('venda')}}">Listar</a></li>
					<li><a href="{{url('venda/create')}}">Cadastrar</a></li>
				</ul>
			</li>
			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Categorias<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="{{url('categoria')}}">Listar</a></li>
					<li><a href="{{url('categoria/create')}}">Cadastrar</a></li>
				</ul>
			</li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="#"><span class="glyphicon glyphicon-user"></span> cadastrar</a></li>
			<li><a href="#" data-toggle="modal" data-target="#modalCadastro"><span class="glyphicon glyphicon-log-in"></span> Entrar</a></li>
		</ul>
	</div>
</nav>
<body data-url="{{ url('/') }}">
	@if(Session::has('error'))
	<p class="alert alert-info">{{ Session::get('error') }}</p>
	@endif
	<div class="row">		
		<div class="container-fluid">
			<div class="col-xs-12 col-md-6 col-md-offset-3">
				@include('template.alerts')
				@yield('content')
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  
	<script type="text/javascript" src="{{ asset('assets/js/jquery.mask.js') }}"></script>		
	<script type="text/javascript" src="{{ asset('assets/js/main.js')}}"></script>	
	@yield('js')
</body>
</html>
