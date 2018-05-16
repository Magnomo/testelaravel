<?php 


class ClienteValidator {
	
	
	public static function rules(){
		$rules =['nome'=>'required|min:4',
				'cpf'=>'required|min:11'
		];
	return $rules;
	}

	public static function messages(){
		$messages =['required'=>'o campo
		:attribute é obrigatório',
		'min'=> 'o campo :attribute deve conter no mínimo :min caracteres',
		'digits'=> 'o campo :attribute deve conter exatamente :digits digitos' 
				
		];
	return $messages;
	}
}

?>