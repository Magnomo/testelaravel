<?php
class Venda extends Eloquent{

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'vendas';
	public $timestamps = true;
	

	public function produtos()
	{
		return $this->belongsToMany('Produto', 'produtos_venda')->withPivot('qtd');
	}
	public function cliente()
	{
		return $this->belongsTo('Cliente');
	}
}