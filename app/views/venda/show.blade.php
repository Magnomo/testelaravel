@extends('template.layout')
@section('content')
<div class="row">
	
	<table class="table table-bordered text-center">
		<thead>
			<tr>
				<td>Cliente:</td>
				<td colspan="2">{{$venda->cliente->nome}}</td>
			</tr>
			<tr>

				<td>Produto</td>
				<td>valor</td>
				<td >Quantidade</td>
			</tr>
		</thead>
		<tbody>
			<?php $total=0; ?>
			@foreach($venda->produtos as $key=>$produto)
			<tr>
				<td>{{$produto->nome}}</td>
				<td>{{'R$:'.$produto->preco }}</td>
				<td>{{$produto->pivot->qtd}}</td>
				<?php $total+=$produto->pivot->qtd*$produto->preco ?>
			</tr>
			
			@endforeach
			<tr>
				<td colspan="2"><b>Total</b></td>
				<td>{{'R$:'.$total }}</td>
			</tr>

		</tbody>
	</table>
</div>
@stop
@section('js')