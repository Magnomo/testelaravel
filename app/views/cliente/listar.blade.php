@extends('template.layout')
@section('content')
<div class="row">
	<div class="form-group input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
		<input name="consulta" id="txt_consulta" placeholder="Consultar" type="text" class="form-control">
	</div>
	<table class=" table table-striped table-dark text-center ">
		<thead>
			<tr>
				<th>Nome</th>
				<th>CPF</th>
				<th colspan="2">Opções</th>
			</tr>			
		</thead>
		<tbody>
			@foreach($cliente->all() as $key =>$cliente)
			<tr>
				<td>{{$cliente->nome}}</td>
				<td>{{$cliente->cpf}}</td>
				<td><a href="{{url('cliente/'.$cliente->id. '/edit')}}"> editar</a> </td>
				<td><a class="delete-button" href="{{url('cliente/'.$cliente->id)}}">Excluir</a></td>
			</tr>
			@endforeach
			@foreach($cliente->onlyTrashed()->get() as $key =>$cli)
			<tr class="danger">
				<td>{{$cli->nome}}</td>
				<td>{{$cli->cpf}}</td>
				<td colspan="2"><a href="{{'cliente/'.$cli->id.'/restore'}}">Ativar</a></td>
			</tr>
			@endforeach
		</tbody>

	</table>
</div>


@stop
@section('js')