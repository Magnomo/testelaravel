<?php
class VendaValidator{
	public static function rules($id){
		$rules = ['nome'=>'required',
				  'qtd'=> 'required'];
		return $rules;

	}
	public static function messages(){
		$messages = ['required'=>'O campo :atribute é requerido'];
		return $messages;

	}
}
?>