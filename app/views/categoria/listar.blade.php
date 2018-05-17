@extends('template.layout')
@section('content')
<div class="row">
	<div class="form-group input-group">
		 <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
		  <input name="consulta" id="txt_consulta" placeholder="Consultar" type="text" class="form-control">
	 </div>
	<table class=" table table-striped text-center">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th colspan='2'>Opções</th>
			</tr>			
		</thead>
		<tbody>
			@foreach($categoria->all() as $key=> $cat) 
			<tr>
				<td>{{$cat->id}}</td>
				<td>{{$cat->nome}}</td>
				<td><a href="{{url('categoria/'.$cat->id .'/edit')}}"> Editar</a></td>
				<td><a class="delete-button" href="{{url('categoria/'.$cat->id)}}">Remover</a></td>

			</tr>
			@endforeach
			@foreach($categoria->onlyTrashed()->get() as $key=>$cat)
			<tr class='danger'>
				<td>{{$cat->nome}}</td>
				<td colspan='3'><a href="{{'categoria/'.$cat->id.'/restore'}}">Reativar</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop
@section('js')