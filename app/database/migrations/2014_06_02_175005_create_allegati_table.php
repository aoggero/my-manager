<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllegatiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('allegati', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('id_corso');
			$table->string('anno');
			$table->string('monte_ore');
			$table->integer('costo_contr');
			$table->integer('costo_azienda');
			
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('allegati');
	}

}
