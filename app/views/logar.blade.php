
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

<div class="container col-md-offset-3" >
 <div class=" login-form col-md-6 col-md-offset-5" style="border: 0px solid black; margin: 5%; padding: 5%; border-radius: 1%; box-shadow: 0 0 black; -webkit-box-shadow: 0px 2px 20px 0px rgba(0,0,0,0.50); background-color: white;">
  	<header>
  		<h2 class="text-center">Entre com seu <b>usuário</b> e <b>senha</b></h2>
  	</header>	

  	<form method="POST" action="{{ url('login') }}">
  		<div class="form-group">
  			<div class="input-group">
  				<div class="input-group-addon">
  					<span class="glyphicon glyphicon-user"></span>	
  				</div>
  				<input type="text" name="email" class="form-control" placeholder="Email">  			
  			</div>
  		</div>

  		<div class="form-group">
  			<div class="input-group">
  				<div class="input-group-addon">
  					<span class="glyphicon glyphicon-option-horizontal"></span>	
  				</div>
  				<input type="password" name="password" class="form-control" placeholder="Senha">  			
  			</div>
  		</div>

  		<footer>  			
  			<button type="submit" class="btn btn-primary pull-right">Entrar</button>
  		</footer>

  	</form>

  </div>
</div>



</body>

</html>
