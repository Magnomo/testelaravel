@extends ("layout.layout")
@section ("title","Criação")<!-- Atribuição de titúlo p/ página -->
@section ("content")

<div class="container col ">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h3 style="padding-left: 50px">Cadastro de Vendas</h3>
			


				<form method="POST" action="{{ url('venda/cadastrar') }}">

					<div class="container_informacoes">

						
							<div class="form-group col-md-12">
								<label>Escolha o cliente:</label>
								<select class="form-control" name="pessoa">
									<option>Selecione uma opção</option>
									@foreach($pessoas as $pessoa)
										<option value="{{$pessoa->id}}">{{$pessoa->nome}}</option>
									@endforeach
								</select>
							</div>	
						

						<div class="adicionarProduto">

							
								<div class="form-group col-md-9">
									<label>Escolha os produtos:</label>
									<select class="form-control" name="produtos[0]">
										<option>Selecione</option>
										@foreach($produtos as $produto)
											<option value="{{$produto->id}}">{{$produto->nome}}</option>
										@endforeach
									</select>
								</div>
							

							
								<div class="form-group col-md-3">
									<label>Quantidade:</label>
									<input type="text" name="quantidades[0]" class="form-control" placeholder="Quantidade">
								</div>	
							

						</div>

						<div id="inserir"></div>

						<div class="text-center">
							<button type="button" onclick="adicionarProduto()" class="btn btn-default">+</button>
						</div>

					</div>

					
					<div style="padding-left: 50px">
						<button type="submit" class="btn btn-success" >Cadastrar</button>
						<a href="{{url('/')}}" class="btn btn-primary pull-right" data-toggle="modal" >Voltar ao menu principal</a>
					</div>	

					



			</form>	

			

		</div>
	</div>
</div>

@stop

@section('js')

<script type="text/javascript">
	
	var indice = 1

	function adicionarProduto(){

		var ultimo = document.querySelectorAll(".adicionarProduto")
		ultimo = ultimo[ultimo.length -1]

		$("#inserir").append("<div class='adicionarProduto'><div class='col-md-9'><div class='form-group'><label>Escolha os produtos:</label><select class='form-control' name='produtos["+indice+"]'><option>Selecione uma opção</option>@foreach($produtos as $produto)<option value='{{$produto->id}}'>{{$produto->nome}}</option>@endforeach</select></div></div>						<div class='col-md-3'><div class='form-group'><label>Quantidade:</label><input type='text' name='quantidades["+indice+"]' class='form-control' placeholder='Quantidade'></div</div></div>")

		indice++

	}

</script>

@stop