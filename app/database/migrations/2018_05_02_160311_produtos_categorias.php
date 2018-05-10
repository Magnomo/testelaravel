<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProdutosCategorias extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('produtos_categorias', function(Blueprint $table)
		{			
			$table->integer('produto_id')->unsigned();			
			$table->integer('categoria_id')->unsigned();			
		});
		
		Schema::table('produtos_categorias', function(Blueprint $table)
		{
			$table->foreign('produto_id')->references('id')->on('produtos')->on_delete('restrict');
			$table->foreign('categoria_id')->references('id')->on('categorias')->on_delete('restrict');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('produtos_categorias');
	}

}
