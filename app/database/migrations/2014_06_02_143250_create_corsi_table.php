<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCorsiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('corsi', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('codice', 5);
			$table->string('facolta', 100);
			$table->string('corso', 150);
			$table->string('descrizione', 255);

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
		Schema::drop('corsi');
	}

}
