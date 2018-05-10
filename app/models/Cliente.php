<?php
use Illuminate\Database\Eloquent\SoftDeletingTrait;
class Cliente extends Eloquent{	
	use SoftDeletingTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'clientes';

	protected $fillable = array('nome','cpf');
  	public $timestamps = true;
	

	public function vendas(){
		return $this->hasMany('Venda');
	}
	public function usuario(){
		return $this->belongsTo('Cliente');
	}
	

}