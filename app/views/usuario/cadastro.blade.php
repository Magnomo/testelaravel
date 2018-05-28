@extends ("layout.layout")
@section ("title","Criação")<!-- Atribuição de titúlo p/ página -->
@section ("content")



<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h3>Cadastro de Usuário</h3>

				<form method="POST" action="{{url('usuario/cadastrar')}}">
					<div class="container_informacoes">

					<div class="form-group">
						<label>Nome:</label>
						<input type="text" name="nome" class="form-control" value="" placeholder="Digite o nome">
					</div>
					<div class="form-group">
						<label>Email:</label>
						<input type="text" name="email" class="form-control" placeholder="Digite o email">
					</div>
					<div class="form-group">
						<label>Password:</label>
						<input type="password" name="password" class="form-control" placeholder="Digite a senha">
					</div>	

					<div>
						<button type="submit" class="btn btn-success" >Cadastrar</button>
					</div>	

					</div>
				</form>	

		</div>
	</div>
</div>


@stop