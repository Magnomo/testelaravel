<!DOCTYPE html>
<html>
<head>


	<title>@yield('title')</title>	

	<meta charset="utf-8">
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/nossocss.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/css_layout.css') }}">
	<script src="{{ asset('assets/js/jquery-3.3.1.min.js')}}"></script>
	<script src="{{ asset('assets/js/jquery.mask.min.js')}}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

</head>

<body>
	<div>
		<nav class="navbar navbar-default">
			<div class=" container-fluid" >
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="{{url('/')}}">MERCADO</a>
				</div>
				@if(!Auth::guest())
				
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Meu Perfil <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="{{url('usuario/atualizacaoPerfil')}}">Alterar Perfil</a></li>							
							<li role="separator" class="divider"></li>
							<li><a href="{{url('logout')}}">Sair</a></li>
						</ul>
					</li>
				</ul>
				@endif
			</div>
		</nav>
	</div>



	<nav class="navbar navbar-default sidebar" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>      
			</div>

			<div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class=""><a href="{{url('/')}}">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Clientes <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a>
						<ul class="dropdown-menu forAnimate" role="menu">
							<li><a href="{{url('cliente/cadastro')}}">Cadastrar Cliente</a></li>
							<li><a href="{{url('cliente')}}">Visualizar Clientes</a></li>							
						</ul>
					</li> 

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Produtos <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-cutlery"></span></a>
						<ul class="dropdown-menu forAnimate" role="menu">
							<li><a href="{{url('produto/cadastro')}}">Cadastrar Produto</a></li>
							<li><a href="{{url('produto')}}">Visualizar Produtos</a></li>							
						</ul>
					</li> 

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Vendas <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-shopping-cart"></span></a>
						<ul class="dropdown-menu forAnimate" role="menu">
							<li><a href="{{url('venda/cadastro')}}">Realizar Venda</a></li>
							<li><a href="{{url('venda')}}">Visualizar Vendas</a></li>							
						</ul>
					</li> 

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuário <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-lock"></span></a>
						<ul class="dropdown-menu forAnimate" role="menu">
							<li><a href="{{url('usuario/cadastro')}}">Realizar Cadastro</a></li>
							<li><a href="{{url('usuario')}}">Visualizar Usuários Cadastrados</a></li>							
						</ul>
					</li> 

				</ul>
			</div>
		</div>
	</nav>


	<div class="row col-md-2">
		<div class="col-md-12">
			@include('includes.alerts')
		</div>
	</div>

	
	<div class="col-md-10">
		@yield('content')
	</div>
	@yield('js')

	@section("js")

	<script>

		function abrirFechar(nome){
			if ( $( "."+nome ).is( ":hidden" ) ) {
				$( "."+nome ).slideDown( "fast" );
			} else {
				$( "."+nome ).slideUp("fast");
			}
		}
	</script>

	@stop

</body>
<html>