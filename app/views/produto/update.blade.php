@extends ("layout.layout")
@section ("title","Criação")<!-- Atribuição de titúlo p/ página -->
@section ("content")
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h3>Atualização de Produto</h1>

				<form method="POST" action="{{ url('produto/atualizar/'.$produtos->id) }}">

					<div class="form-group">
						<label>Nome:</label>
						<input type="text" name="nome" class="form-control" value="{{$produtos->nome}}">
					</div>
					<div class="form-group">
						<label>Código:</label>
						<input type="text" name="codigo" class="form-control" value="{{$produtos->codigo}}">
					</div>		

					<div>
						<button type="submit" class="btn btn-success" >Atualizar</button>
					</div>		

			</form>	

		</div>
	</div>
</div>
@stop