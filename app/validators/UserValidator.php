<?php 
class UserValidator{

	public static function rules($id){
		$rules = ['email'=> 'required|unique:usuarios,email,'.$id,
		'password'=> 'required|confirmed|min:6',
		'nome'=>'required|min:4',
		'cpf'=>'required|digits:11'];
		return $rules;
	}
	public static function messages(){
		$messages =['required'=> 'o campo :attribute é obrigatório',
		'min'=> 'o campo :attribute deve conter no mínimo :min caracteres',
		'confirmed'=> 'Os campos :attribute e confirmar :attribute devem ser iguais ',
		'unique'=> 'este :attribute já está em uso',
		'digits'=> 'o campo :attribute deve conter exatamente :digits digitos'];
		return $messages;
	}
}
?>