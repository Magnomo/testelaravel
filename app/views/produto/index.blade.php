@extends ("layout.layout")
@section ("title","Criação")
@section ("content")

<div class="container">
	<div class="row cabecalho">
		<div class="col-xs-9 ">
			<h1 style="padding: 15px">Produtos Cadastrados</h1>
		</div> 


		<div class="table-responsive col-sm-10" >



			<table class="table table-striped table-bordered table-holver">

				<thead>
					<tr>
						<th>Nome</th>
						<th>Código</th>	
						<th>Ação</th>			
					</tr>
				</thead>

				<tbody>

					@foreach ($produtos as $produto)

					<tr>

						<td class="">{{$produto->nome}}</td>
						<td class="">{{$produto->codigo}}</td>

						<td class="">
							<a href="{{ url('produto/atualizacao/'.$produto->id)}}"  ><span class="glyphicon glyphicon-ok text-sucess"></a>
								<a href="{{ url('produto/deletar/'.$produto->id) }}"><span class="glyphicon glyphicon-trash text-danger"></span></a>
							</td>

						</tr>

						@endforeach



					</tbody>
				</table>

				<a href="{{url('produto/cadastro')}}" class="btn btn-primary" data-toggle="modal" >Cadastrar novos produtos</a>
				<a href="{{url('/')}}" class="btn btn-primary pull-right" data-toggle="modal" >Voltar ao menu principal</a>

			</div>
		</div>

@stop