@extends('template.layout')
@section('content')
<?= Form::open(array('url'=>$data['url'], 'method'=>$data['method']))?>
<div class="form-group" id='formVenda'>
	<div class ="form-group">
		<div class ="input-group">
			<label>Cliente: {{Auth::user()->cliente->nome}}</label>
		</div>
	</div>
	<label>Produtos</label>
	<?php
	if(Input::old('produto')!==null){
		$produtos = Input::old('produto');
	}else{
		$produtos=['1'];
	}
	?>
	@foreach($produtos as $key=> $prod)
	<div class =" produto row " >
		<div class ="col-sm-4">
			{{Form::select('produto['.$key.']',$data['produtos'], null, array('class'=>'form-control select_produto'))}}
			{{$errors->first('produto.'.$key)}}
		</div>
		<div class="col-sm-2">
			<!--<input type="text" name="preco" placeholder="preço" class='form-control'> -->
			{{Form::text('preco', null, array('class'=>'form-control preco','disabled' , 'placeholder'=> 'preço'))}}
		</div>
		<div class="col-sm-2">
			{{Form::text('qtd['.$key.']', null, array('class'=>'form-control' ,'placeholder'=>'quant.'))}}
			{{$errors->first('qtd.'.$key)}}
		</div>
		<div class="input-group-btn col-sm-4">

			<button type="button" class="btn btn-danger btn_remover">Remover</button>
		</div>
	</div>
	@endforeach
<button type="button" class="btn btn-success btn_inserir" >Inserir</button>
{{Form::submit('Salvar',array('class'=>'btn btn-success '))}}
</div>
{{Form::close()}}
@stop
@section('js')
<script type="text/javascript" >
	$(document).on('click', '.btn_inserir',function() {
		console.log($('div.produto').first());
		clone= $('div.produto').first().clone();
		clone.find('input, select').val("");
		clone.insertAfter($('div.produto').last());
		recontar();
	});
	$(document).on('click', '.btn_remover', function(){
		if($('div.produto').length>1){
			$(this).parents("div.produto").remove();
		}
	})
	$(document).on('change', 'select.select_produto',function(){
		if($(this).val() !="" ){
			select = $(this);
			$.ajax({
				url:'http://localhost/testelaravel/ajax/venda/'+$(this).val()
			}).done(function(preco){
				select.parents('div.produto').find('input.preco').val(preco);
				console.log($(this));
			})
		}
	})
	function recontar(){
		
		$.each($('div.produto'),function(index, element){
			$.each($(this).find('input,select'),function(){
				name = $(this).attr('name').replace(/\d+/,index);
				$(this).attr('name',name)
			})
			$(this).find('input,select').attr('name').replace(/\d+/,index)
		})
	}
</script>
@stop
