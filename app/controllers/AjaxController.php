<?php

class AjaxController extends BaseController {


	public function cidades($estado_id){
		return json_encode(Cidade::where('estado_id','=',$estado_id)->get());
	}


	public function estados($pais_id){
		return json_encode(Estado::where('pais_id','=',$pais_id)->get());
	}

	public function produtoExistente(){
		$venda = Venda::find(Input::get('venda'));
		$venda->produtos()->detach(Input::get('produto'));
	}


}