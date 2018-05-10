@extends('template.layout')
@section('content')
	<h3 class="text-center">Cadastro de categoria</h3>
	<?= Form::open(array('url'=>$data['url'], 'method'=>$data['method']))?>
	<div class="form-group">
		<label>Nome</label>		
		{{Form::text('nome', isset($categoria)? $categoria->nome:null, array('class'=>'form-control' ))}}	
		{{$errors->first('nome')}}		
	</div>
	{{Form::submit('Cadastrar!', array('class' => 'btn btn-success'))}}
	{{Form::close()}}
@stop
@section('js')
@stop