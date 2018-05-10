<?php 
 class CategoriaValidator{

	public static function rules($id){
		$rules = ['nome'=> 'required|min:3|unique:categorias,nome,'.$id];
		return $rules;
	}
	public static function messages(){
		$messages = ['required'=> 'O campo :attribute é obrigatório			',
					'min'=> 'O campo :attribute deve conter no mínimo :min caracteres',
					'unique'=> 'Esta categoria já existe'];
					return $messages;
	}
}
?>