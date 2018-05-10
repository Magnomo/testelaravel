<?php 

/**
 * 
 */
class ProdutoValidator {
	
	
	public static function rules(){
		$rules =['nome'=>'required|min:5',
				'preco'=>'required|min:2',
				'categoria'=>'required|'
		];
	return $rules;
	}

	public static function messages(){
		$messages =['required'=>'o campo
		:attribute é obrigatório',
		'min'=> 'o campo :attribute deve conter no mínimo :min caracteres'
				
		];
	return $messages;
	}
}

?>