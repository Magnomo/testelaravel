@extends('template.layout')
@section('content')
<div class="row">
	<div class="form-group input-group">
		 <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
		  <input name="consulta" id="txt_consulta" placeholder="Consultar" type="text" class="form-control">
	 </div>
	<table class=" table table-bordered">
		<thead>
			<tr>
				<th>Email</th>
				<th>Nome</th>
				<th colspan="2">Opções</th>
			</tr>			
		</thead>
		<tbody>
			@foreach($usuario->all() as $key =>$user)
			<tr>
				<td>{{$user->email}}</td>
				
				<td><a href="{{url('user/'.$user->id. '/edit')}}"> editar</a> </td>
				<td><a class="delete-button" href="{{url('user/'.$user->id)}}">Excluir</a></td>
			</tr>
			@endforeach
			@foreach($usuario->onlyTrashed()->get() as $key =>$us)
			<tr class="danger">
				<td>{{$us->email}}</td>
	
				<td colspan="2"><a href="{{'user/'.$us->id.'/restore'}}">Ativar</a></td> 
			</tr>
			@endforeach
		</tbody>

	</table>
</div>


@stop
@section('js')