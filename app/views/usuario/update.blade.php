@extends ("layout.layout")
@section ("title","Criação")<!-- Atribuição de titúlo p/ página -->
@section ("content")



<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h3>Atualização de Usuário</h3>

			<form method="POST" action="{{url('usuario/atualizar/'.$usuario->id)}}">
				<div class="container_informacoes">

					<div class="form-group">
						<label>Nome:</label>
						<input type="text" name="nome" class="form-control" value="{{$usuario->nome}}" >
					</div>
					<div class="form-group">
						<label>Email:</label>
						<input type="text" name="email" class="form-control" value="{{$usuario->email}}">
					</div>

					<div class="form-group">
						<label>Gerar senha:</label>
						<input type="password" id="verificar" name="password" class="form-control senhas" placeholder="Digite a senha antiga">
					</div>

				</div>

				
				<div class="text-center">
					<button type="submit" class="btn btn-success" >Atualizar</button>
				</div>	
			</div>

		</form>	

	</div>
</div>
</div>


@stop

