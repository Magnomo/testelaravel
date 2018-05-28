@extends ("layout.layout")
@section ("title","Criação")
@section ("content")


<div class="container">
	<div class="row cabecalho">
		<div class="col-xs-9 ">
			<h2 style="padding: 15px">Vendas Cadastradas</h2>
			
			<div class="table-responsive col-sm-10" >


				<table class="table table-striped table-bordered table-holver">

					<thead>
						<tr>
							<th>Nome</th>
							<th>Data</th>
							<th>Valor total da venda</th>
							<th>Ação</th>	


						</tr>
					</thead>

					<tbody>

						@foreach ($vendas as $venda)

						<tr>

							<td class="">{{$venda->pessoa->nome}}</td>
							<td class="">{{$venda->dataVenda}}</td>	
							<td class="">{{$venda->valorTotal()}}</td>					
							
							<td class="">
								<a href="{{ url('venda/atualizacao/'.$venda->id) }}" ><span class="glyphicon glyphicon-ok text-sucess"></a>
									<a href="{{ url('venda/deletar/'.$venda->id) }}"><span class="glyphicon glyphicon-trash text-danger"></a>
									</td>

								</tr>

								@endforeach



							</tbody>
						</table>

						<a href="{{url('venda/cadastro')}}" class="btn btn-primary" data-toggle="modal" >Cadastrar novas vendas</a>
						<a href="{{url('/')}}" class="btn btn-primary pull-right" data-toggle="modal" >Voltar ao menu principal</a>

					</div>

				</div>
			</div> 


@stop