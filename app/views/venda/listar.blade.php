@extends('template.layout')
@section('content')
<div class="row">
	
	<table class="table table-striped text-center">
		<thead>
			<tr>
				<td>Cliente</td>
				<td>id Compra</td>
				<td colspan="2">Opções</td>
			</tr>
		</thead>
		<tbody>
			@foreach($vendas->all() as $key=>$venda)
			<tr>
				<td>{{$venda->cliente->nome}}</td>
				<td>{{$venda->id}}</td>
				<td>
					<a href="{{url('venda/'.$venda->id)}}" class="btn btn-default btn-sm" >
          <span class="glyphicon glyphicon-eye-open"></span> ver
        </a></td>
				<td><a href="{{url('venda/'. $venda->id .'/edit')}}">Editar</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop
@section('js')