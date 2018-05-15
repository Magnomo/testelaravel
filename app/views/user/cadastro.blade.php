@extends('template.layout')
@section('content')
<div class= "row">
	<?= Form::open(array('url'=>$data['url'], 'method'=>$data['method']))?>
	<div class="col-sm-8"  >
		<h3 class="text-center">Formulario de cadastro</h3>
		<hr>
		<div class="col-sm-4"><label>Nome:</label>
		</div>
		<div class="col-sm-12">
			{{Form::text('nome', isset($usuario->cliente->nome)? $usuario->cliente->nome:null, array('class'=>'form-control'))}}
			{{$errors->first('nome')}}
		</div>
		<div class="col-sm-4"><label>CPF:</label>
		</div>
		<div class="col-sm-12">
			{{Form::text('cpf', isset($usuario->cliente->cpf)? $usuario->cliente->cpf:null, array('class'=>'form-control cpf'))}}
			{{$errors->first('cpf')}}
		</div>
		<div class="col-sm-4"><label>Email:</label>
		</div>
		<div class="col-sm-12">
			{{Form::text('email', isset($usuario)? $usuario->email:null, array('class'=>'form-control'))}}
			{{$errors->first('email')}}
		</div>
		<div class="col-sm-4"><label>Senha:</label>
		</div>
		<div class="col-sm-12">
			{{Form::password('password', array('class'=>'form-control'))}}
			{{$errors->first('password')}}
		</div>
		<div class="col-sm-12"><label>
			@if(isset($usuario))
			Nova senha 
			@else 
			Confirmar Senha 
		@endif</label>
	</div>
	<div class="col-sm-12">
		{{Form::password('password_confirmation', array('class'=>'form-control'))}}
		{{$errors->first('password_confirmation')}}
	</div>
	<div class="col-sm-2" >
		{{Form::submit('Cadastrar!', array('class' => 'btn btn-success'))}}
	</div>
</div>


{{Form::close()}}
</div>
@stop
@section('js')
<script type="text/javascript">
	$(document).ready(function(){
		$('.cpf').mask('999.999.999-99');
	});
</script>
@stop