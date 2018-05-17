@extends('template.layout')
@section('content')
<div class="row">
	<div class="form-group input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
		<input name="consulta" id="txt_consulta" placeholder="Consultar" type="text" class="form-control">
	</div>
	<table class=" table table-striped">
		<thead>
			<tr>
				<th>Nome</th>
				<th>Preço</th>
				<th colspan="2"></th>
			</tr>			
		</thead>
		<tbody>
			@foreach($produtos->all() as $key =>$produto)
			<tr>
				<td>{{$produto->nome}}</td>
				<td>{{$produto->preco}}</td>
				<td><a href="{{url('produto/'.$produto->id.'/edit')}}"> editar</a> </td>
				<td><a class="delete-button" href="{{url('produto/'.$produto->id)}}">Excluir</a></td>
			</tr>
			@endforeach
			@foreach($produtos->onlyTrashed()->get() as $key =>$produto)
			<tr class="danger">
				<td>{{$produto->nome}}</td>
				<td>{{$produto->preco}}</td>
				<td colspan="2"><a href="{{url('produto/'.$produto->id.'/restore')}}">Ativar</a></td>
			</tr>
			@endforeach
		</tbody>

	</table>
</div>


@stop
@section('js')