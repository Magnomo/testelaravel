<?php
use Illuminate\Database\Eloquent\SoftDeletingTrait;
class Produto extends Eloquent{	
	use SoftDeletingTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'produtos';

	protected $fillable = array('nome','preco');
	public $timestamps = true;
	

	public function categorias()
	{
		return $this->belongsToMany('Categoria', 'produtos_categorias');
	}
	public function vendas()
	{
		return $this->belongsToMany('Venda', 'produtos_vendas');
	}
}