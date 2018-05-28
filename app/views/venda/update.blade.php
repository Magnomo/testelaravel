@extends ("layout.layout")
@section ("title","Criação")<!-- Atribuição de titúlo p/ página -->
@section ("content")
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Atualização de Venda</h1>

			<form method="POST" action="{{ url('venda/atualizar/') }}">
				<input type="text" name="id" value="{{$venda->id}}" hidden="true">


				<h4>Atualize os produtos</h4>

				@foreach($produtos_venda as $key => $produto_venda)
				<div id="produtoAntigo{{$key}}">
					<div class="col-md-8">
						<label>Produto:</label>
						<select readonly style="background: #eee; pointer-events: none; touch-action: none;" required name="produtos[{{$key}}][tipo]" class="form-control">
							@foreach($produtos as $produto)
								@if($produto->id == $produto_venda->id)
									<option value="{{$produto_venda->id}}" selected="true">{{$produto_venda->nome}}</option>
								@else
									<option value="{{$produto->id}}">{{$produto->nome}}</option>
								@endif
							@endforeach
						</select>
					</div>

					<div class="form-group col-md-3">
						<label>Quantidade:</label>
						<input required type="text" name="produtos[{{$key}}][quantidade]" class="form-control" value="{{$produto_venda->pivot->quantidade}}">
					</div>
					<div class="col-md-1">
						<label></label>
						<button type="button" class="btn btn-danger text-center form-control" onclick="deletarProdutoExistente({{$key}}, {{$produto_venda->id}}, {{$venda->id}})">X</button>
					</div>
				</div>

				@endforeach



				<div id="inserir"></div>	

				<div class="col-md-12 text-center">
					<button type="button" onclick="adicionarProduto()" class="btn btn-default">+</button>
				</div>							

				<div>
					<button type="submit" class="btn btn-success" >Atualizar</button>								
				</div>
			</form>					

		</div>
	</div>
</div>
@stop

@section('js')

<script type="text/javascript">

	var indice = {{$key}}+1

	function adicionarProduto(){

		var ultimo = document.querySelectorAll(".adicionarProduto")
		ultimo = ultimo[ultimo.length -1]

		$("#inserir").append("<div id='produto"+indice+"' class='adicionarProduto'><div class='col-md-8'><div class='form-group'><label>Escolha os produtos:</label><select required class='form-control' name='produtos["+indice+"][tipo]'><option>Selecione uma opção</option>@foreach($produtos as $produto)<option value='{{$produto->id}}'>{{$produto->nome}}</option>@endforeach</select></div></div><div class='col-md-3'><div class='form-group'><label>Quantidade:</label><input type='text' required name='produtos["+indice+"][quantidade]' class='form-control' placeholder='Quantidade'></div></div><div class='col-md-1'><label></label><button type='button' style='margin-top: 22px' class='btn btn-danger text-center form-control' onclick='deletarProduto("+indice+")'>X</button></div></div>")

		indice++

	}

	function deletarProdutoExistente(id, produto, venda){
		$("#produtoAntigo"+id).remove()

		$.ajax({
			type: "post",
			dataType: "json",
			data: {produto, venda},
			url: "{{ url('ajax/produtoExistente') }}",
			success: function(data){
			}
		});
	}



	function deletarProduto(id){
		$("#produto"+id).remove()
	}
</script>

@stop