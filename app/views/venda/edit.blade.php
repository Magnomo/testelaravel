@extends('template.layout')
@section('content')
<?= Form::open(array('url'=>$data['url'], 'method'=>$data['method']))?>
<div class="form-group">
	
	<div class ="form-group">
		<div class ="input-group">
			<label>Cliente:</label>
			{{Form::select('cliente', $data['clientes'],$venda->cliente->id, array('class'=>'form-control'))}}
		</div>
	</div>
	<label>Produtos</label>
	@foreach($venda->produtos as $key=> $prod )
	<div class =" produto row " >
		<div class ="col-sm-4">
			{{Form::select('produto[]',$data['produtos'], $prod->id, array('class'=>'form-control'))}}
		</div>
		<div class="col-sm-2">
			
			<!--<input type="text" name="preco" placeholder="preço" class='form-control'> -->
			{{Form::text('preco', $prod->preco, array('class'=>'form-control', 'placeholder'=> 'preço'))}}

		</div>
		<div class="col-sm-2">
			{{Form::text('qtd[]', $prod->pivot->qtd, array('class'=>'form-control' ,'placeholder'=>'quant.'))}}
		</div>

		<div class="input-group-btn col-sm-4">

			<button type="button" class="btn btn-danger btn_remover">Remover</button>
		</div>

		
	</div>
	@endforeach
	
</div>


<button type="button" class="btn btn-success btn_inserir" >Inserir</button>
{{Form::submit('Salvar',array('class'=>'btn btn-success '))}}

{{Form::close()}}
@stop
@section('js')
<script type="text/javascript">
	
	$(document).on('click', '.btn_inserir',function() {
		console.log($('div.produto').first());
		clone = $('div.produto').first().clone();
		clone.find('select,input').val("");
		clone.insertAfter($('div.produto').last());
	});
	$(document).on('click', '.btn_remover', function(){
		if($('div.produto').length>1){
			$(this).parents("div.produto").remove();
		}
	})
</script>
@stop
