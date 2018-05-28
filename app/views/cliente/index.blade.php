@extends ("layout.layout")
@section ("title","Criação")<!-- Atribuição de titúlo p/ página -->
@section ("content")

<div class="container">
	<div class="row cabecalho">
		<div class="col-xs-9 ">
			<h1 style="padding: 15px">Clientes Cadastrados</h1>
		</div> 


		<div class="table-responsive col-sm-10 " >


			<table class="table table-striped table-bordered table-holver ">

				<thead>
					<tr>
						<th>Nome</th>
						<th>Documento</th>
						<th>E-mail</th>
						<th>Telefone</th>
						<th>Ação</th>

					</tr>
				</thead>

				<tbody>

					@foreach ($pessoas as $pessoa)

					<tr>

						<td class="">{{$pessoa->nome}}</td>
						<td class="">{{$pessoa->documentos->first()->numero}}</td>
						<td class="">{{$pessoa->contatos->first()->email}}</td>
						<td class="">{{$pessoa->contatos->first()->telefone}}</td>
						<td class="">
							<a href="{{ url('cliente/atualizacao/'.$pessoa->id) }}" ><span class="glyphicon glyphicon-pencil"></a>
								<a href="{{ url('cliente/deletar/'.$pessoa->id) }}" ><span class="glyphicon glyphicon-trash text-danger"></span></a>
							</td>


						</tr>

						@endforeach

					</div>

				</tbody>
			</table>

			<a href="{{url('cliente/cadastro')}}" class="btn btn-primary" data-toggle="modal" >Cadastrar clientes</a>
			<a href="{{url('/')}}" class="btn btn-primary pull-right" data-toggle="modal" >Voltar ao menu principal</a>

		</div>
	</div>

@stop

