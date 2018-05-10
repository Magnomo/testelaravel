<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProdutosVenda extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('produtos_venda', function(Blueprint $table)
		{
			$table->integer('produto_id')->unsigned();
			$table->integer('venda_id')->unsigned();
			$table->integer('qtd');	

		});
		Schema::table('produtos_venda', function(Blueprint $table)
		{
			$table->foreign('produto_id')->references('id')->on('produtos')->on_delete('restrict');
			$table->foreign('venda_id')->references('id')->on('vendas')->on_delete('restrict');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('produtos_venda');
	}

}
