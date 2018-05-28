@extends ("layout.layout")
@section ("title","Criação")<!-- Atribuição de titúlo p/ página -->
@section ("content")



<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h3>Cadastro de Produtos</h3>

				<form method="POST" action="{{ url('produto/cadastrar') }}">
					<div class="container_informacoes">

					<div class="form-group">
						<label>Nome:</label>
						<input type="text" name="nome" class="form-control" value="" placeholder="Digite o nome do produto">
					</div>
					<div class="form-group">
						<label>Código:</label>
						<input type="text" name="codigo" class="form-control" placeholder="Digite o código do produto">
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