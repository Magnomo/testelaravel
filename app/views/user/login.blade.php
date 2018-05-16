@extends('template.layout')
@section('content')
<div class="modal-dialog row" id='form'>
	<div class='col-sm-12'>
		<h1 id='demonio'>Entrar</h1><br>
		<?= Form::open(array('url'=>$data['url'], 'method'=>$data['method']))?>

		<!-- <input type="text" name="nome" placeholder="Usuario"> -->
		{{Form::text('email',null, array('class'=>'form-control'))}}
		{{$errors->first('email')}}
		<!-- <input type="password" name="senha" placeholder="Senha"> -->
		{{Form::password('password', array('class'=>'form-control'))}}
		{{$errors->first('password')}}
		<!-- <input type="submit" name="Cadastrar" class="login loginmodal-submit" value="Login"> -->
		{{Form::submit('Entrar', array('class' => 'btn btn-success'))}}


		<div class="login-help">
			<a href="{{url('user/inscrever')}}">cadastrar</a> - <a href="#">esqueci minha senha</a>
			{{Form::close()}}

		</div>
	</div>
</div>
<style>
#form{
	background-color:#708090;
	box-shadow: 2px 3px 1px #000011;
}
#demonio{
	color:white;
}
</style>

@stop

@stop