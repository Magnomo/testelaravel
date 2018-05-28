@extends ("layout.layout")
@section ("title","Criação")<!-- Atribuição de titúlo p/ página -->
@section ("content")



<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h3>Atualização de Usuário</h3>

			<form method="POST" action="{{url('usuario/atualizarPerfil')}}">
				<div class="container_informacoes">

					<div class="form-group">
						<label>Nome:</label>
						<input type="text" name="nome" class="form-control" value="{{$usuario->nome}}" >
					</div>
					<div class="form-group">
						<label>Email:</label>
						<input type="text" name="email" class="form-control" value="{{$usuario->email}}">
					</div>
				</div>

				<div class="text-center">

					<button class="btn btn-primary" type="button" onclick="senha()">Alterar senha</button>

				</div>
				
				<div id="senhas" class="container_informacoes" style="display: none">

					<div class="form-group">
						<label>Digite a senha antiga:</label>
						<input type="password" id="verificar" disabled name="password" class="form-control senhas" placeholder="Digite a senha antiga">
					</div>

					<div class="form-group">
						<label>Digite a nova senha:</label>
						<input type="password" disabled name="newpassword" class="form-control senhas" placeholder="Digite a nova senha">
					</div>	

					<div class="form-group">
						<label>Confirme a nova senha:</label>
						<input type="password" disabled name="passwordconfirm" class="form-control senhas" placeholder="Confirme a senha">
					</div>	

				</div>

				<br>

				<div class="text-center">
					<button type="submit" class="btn btn-success" >Atualizar</button>
				</div>	
			</div>

		</form>	

	</div>
</div>
</div>


@stop

@section('js')

<script type="text/javascript">

	function senha(){
		$('#senhas').toggle();
		if($("#verificar").is(":disabled")){
			$('.senhas').removeAttr('disabled');
		}else{
			$('.senhas').attr('disabled',true);
		}
	}

</script>

@stop