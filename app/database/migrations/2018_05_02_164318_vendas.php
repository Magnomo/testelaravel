<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Vendas extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vendas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->integer('cliente_id')->unsigned();	
		});

		Schema::table('vendas', function(Blueprint $table)
		{
			$table->foreign('cliente_id')->references('id')->on('clientes')->on_delete('restrict');
		});

	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vendas');
	}

}
