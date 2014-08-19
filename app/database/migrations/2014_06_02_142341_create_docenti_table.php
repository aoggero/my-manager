<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocentiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('docenti', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('nome');
			$table->string('cognome');
			$table->string('identificativo_fiscale');
			$table->string('posizione_fiscale');
			$table->string('num_contratto_arca');
			$table->string('num_fornitore_arca');
			
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
		Schema::drop('docenti');
	}

}
