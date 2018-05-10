<?php
use Illuminate\Database\Eloquent\SoftDeletingTrait;
class Categoria extends Eloquent{	
use SoftDeletingTrait;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'categorias';

	protected $fillable = array('nome');

	public function produtos()
	{
		return $this->belongsToMany('Produto');
	}

}