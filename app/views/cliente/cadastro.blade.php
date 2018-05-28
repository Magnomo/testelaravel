@extends ("layout.layout")
@section ("title","Criação")<!-- Atribuição de titúlo p/ página -->
@section ("content")

<div class="fundo">

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h3>Cadastro de clientes</h3>

				<form method="POST" action="{{ url('cliente/cadastrar') }}">
					<div class="container_informacoes">
						
						<div>
							<h4>DADOS PESSOAIS</h4>
						</div>
						
						<div class="form-group">
							<label>Nome:</label>
							<input type="text" name="nome" class="form-control" placeholder="Digite o nome">
						</div>
						<div class="form-group">
							<label>CPF:</label>
							<input type="text" name="documento" class="form-control documento" placeholder="Digite o número do documento">
						</div>
						<div class="form-group">
							<label>Data de nascimento:</label>
							<input type="text" name="dataNasc" class="form-control nascimento" placeholder="dd/mm/aaaa">
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
							<input type="text" name="email" class="form-control" placeholder="exemplo@exemplo.com">
						</div>
						<div class="form-group">
							<label>Telefone:</label>
							<input type="text" name="telefone" class="form-control telefone" placeholder="99 99999-9999">
						</div>
					</div>

					<div class="container_informacoes">
						<div>
							<h4>ENDEREÇO</h4>
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
							<input type="text" name="bairro" class="form-control">
						</div>


						<div class="form-group">
							<label>Logradouro:</label>
							<input type="text" name="logradouro" class="form-control">
						</div>

						<div class="cep">
							<label>CEP:</label>
							<input type="text" name="cep" class="form-control cepe">						
						</div>	

				</div>
				<div>
					<button style="margin-bottom: 5%" class="btn btn-success">Cadastrar</button>
					
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

	<script type="text/javascript">
		$(document).ready(function(){
			$('.documento').mask('000.000.000-00');
			$('.nascimento').mask('00/00/0000');
			$('.cepe').mask('00000-000');

         	var SPMaskBehavior = function (val) {
             return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
           	},
           	spOptions = {
	             onKeyPress: function(val, e, field, options) {
	                 field.mask(SPMaskBehavior.apply({}, arguments), options);
	               }
           	};

           $('.telefone').mask(SPMaskBehavior, spOptions);

		})

	</script>

@stop
