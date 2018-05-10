@extends('template.layout')
@section('content')

<?= Form::open(array('url'=>$data['url'], 'method'=>$data['method'])) ?>
<h3 class="text-center">Cadastro de Cliente</h3>
<div class="form-group">
	<label>Nome</label>
	{{Form::text('nome', isset($cliente)?$cliente->nome:null, array('class'=>'form-control' ))}}
	{{$errors->first('nome')}}		
</div>
<div class="form-group">
	<label>CPF</label>
	{{Form::text('cpf', isset($cliente)?$cliente->cpf:null, array('class'=>'form-control cpf' ))}}	
	{{$errors->first('cpf')}}	
</div>
{{Form::submit('Cadastrar', array('class' => 'btn btn-success'))}}
{{Form::close()}}
@stop
<script type="text/javascript">
		$('.cpf').mask('999.999.999-99');

</script>
