@extends('template.layout')
@section('content')
	<h3 class="text-center">Cadastro de Produto</h3>
	<?= Form::open(array('url'=>$data['url'], 'method'=>$data['method']))?>
	<div class="form-group">
		<label>Nome</label>
		{{Form::text('nome', isset($produto)? $produto->nome:null, array('class'=>'form-control' ))}}
		{{$errors->first('nome')}}	

	</div>

	<div class="form-group">
		<label>Preço</label>		
		{{Form::text('preco', isset($produto)? $produto->preco:null, array('class'=>'form-control' ))}}	
		{{$errors->first('preco')}}		
	</div>

	<div class="form-group">
		<label>Categoria</label>		
		{{Form::select('categoria', $data['categorias'], isset($produto)? $produto->categorias()->first()->id:null,array('class'=>'form-control' ))}}
		{{$errors->first('categoria')}}		
	</div>
	{{Form::submit('Cadastrar!', array('class' => 'btn btn-success'))}}




	{{Form::close()}}
@stop

@section('js')
@stop