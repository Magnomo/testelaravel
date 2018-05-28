@extends ("layout.layout")
@section ("title","Criação")
@section ("content")


<div class="row cabecalho">
	<div class="col-xs-9 ">
		<h1 style="padding: 15px">Usuários Cadastrados</h1>
	</div> 


	<div class="container">

		<div class="table-responsive col-sm-10" >



			<table class="table table-striped table-bordered table-holver">

				<thead>
					<tr>
						<th>Nome</th>
						<th>Email</th>	
						<th>Ação</th>			
					</tr>
				</thead>

				<tbody>

					@foreach ($usuarios as $usuario)

					<tr>

						<td class="">{{$usuario->nome}}</td>
						<td class="">{{$usuario->email}}</td>

						<td class="">
							<a href="{{ url('usuario/atualizacao/'.$usuario->id)}}"  ><span class="glyphicon glyphicon-ok text-sucess"></a>
								<a href="{{ url('usuario/deletar/'.$usuario->id) }}"><span class="glyphicon glyphicon-trash text-danger"></span></a>
							</td>

						</tr>

						@endforeach



					</tbody>
				</table>

				<a href="{{url('usuarios/cadastro')}}" class="btn btn-primary" data-toggle="modal" >Cadastrar novos produtos</a>
				<a href="{{url('/')}}" class="btn btn-primary pull-right" data-toggle="modal" >Voltar ao menu principal</a>


			</div>
		</div>
@stop