@extends ("layout.layout")
@section ("title","Criação")<!-- Atribuição de titúlo p/ página -->
@section ("content")
<div class="fundo">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h3>Cadastro de clientes</h3>

				<form method="POST" action="{{ url('cliente/atualizar/'.$pessoa->id) }}">
					<div class="container_informacoes">

						<div>
							<h4>DADOS PESSOAIS</h4>
						</div>

						<div class="form-group">
							<label>Nome:</label>
							<input type="text" value="{{$pessoa->nome}}" name="nome" class="form-control" >
						</div>
						<div class="form-group">
							<label>CPF:</label>
							<input type="text" value="{{$pessoa->documentos->first()->numero}}" name="documento" class="form-control" >
						</div>
						<div class="form-group">
							<label>Data de nascimento:</label>
							<input type="text" value="{{$pessoa->dataNasc}}" name="dataNasc" class="form-control">
						</div>
						<div class="form-group">
							<label>Sexo:</label>
							<select class="form-control" name="sexo">
								<option>Selecione uma opção</option>
								@foreach($sexos as $sexo)
								<option value="{{$sexo->id}}">{{$sexo->tipo}}</option>
								@endforeach
							</select>
						</div>	

						<div class="form-group">
							<label>E-mail:</label>
							<input type="text" value="{{$pessoa->contatos->first()->email}}" name="email" class="form-control" >
						</div>
						<div class="form-group">
							<label>Telefone:</label>
							<input type="text" value="{{$pessoa->contatos->first()->telefone}}" name="telefone" class="form-control" >
						</div>

						<div>
							<h4>Atualização de Endereços </h4>
						</div>

						<div class="form-group">
							<label>País:</label>
							<select id="pais" class="form-control" name="pais">
								<option>Selecione uma opção</option>
								@foreach($paises as $pais)
								<option value="{{$pais->id}} ">{{$pais->nome}}</option>
								@endforeach
							</select>
						</div>

						<div class="form-group">
							<label>Estado:</label>
							<select id="estado" class="form-control" name="estado">
								<option>Selecione uma opção</option>
							</select>
						</div>	

						<div class="form-group">
							<label>Cidade:</label>
							<select id="cidade" class="form-control" name="cidade">
								<option>Selecione uma opção</option>
							</select>
						</div>	

						<div class="form-group">
							<label>Bairro:</label>
							<input type="text" value="{{$pessoa->enderecos->first()->bairro}}" name="bairro" class="form-control">
						</div>


						<div class="form-group">
							<label>Logradouro:</label>
							<input type="text" value="{{$pessoa->enderecos->first()->logradouro}}" name="logradouro" class="form-control">
						</div>

						<div class="cep">
							<label>CEP:</label>
							<input type="text" value="{{$pessoa->enderecos->first()->cep}}" name="cep" class="form-control">
						</div>	

					</div>
					
					<div>
						<button style="margin-bottom: 5%" class="btn btn-success">Atualizar</button>						
					</div>


				</form>	

			</div>
		</div>
	</div>
</div>
@stop
@section('js')


<script type="text/javascript">

	$("#pais").change(function(){
		var pais_id = $(this).val();

		$.ajax({
			type: "get",
			dataType: "json",
			url: "{{ url( 'ajax/estados') }}/"+ pais_id,
			success: function(result){
				$("#estado option").remove();
				$("#estado").append("<option>Selecione uma opção</option>");
				for(i = 0; i < result.length; i++){
					$("#estado").append("<option value='"+result[i].id+"'>" +result[i].nome + "</option>");
				}
			}
		}); 

	});

	$("#estado").change(function(){
		var estado_id = $(this).val();

		$.ajax({
			type: "get",
			dataType: "json",
			url: "{{ url( 'ajax/cidades') }}/"+ estado_id,
			success: function(result){
				$("#cidade option").remove();
				$("#cidade").append("<option>Selecione uma opção</option>");
				for(i = 0; i < result.length; i++){
					$("#cidade").append("<option value='"+result[i].id+"'>" +result[i].nome + "</option>");
				}
			}
		}); 

	});




</script>

@stop



