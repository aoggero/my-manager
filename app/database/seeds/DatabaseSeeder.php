<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('SaraManagerSeeder');
		$this->command->info('SaraManager seeds finished!');

		// $this->call('UserTableSeeder');
	}

}

class SaraManagerSeeder extends Seeder {
	
	public function run() {
	
		DB:table('docenti')->delete();
		DB:table('contratti')->delete();
		DB:table('allegati')->delete();
		DB:table('corsi')->delete();

		$corso = Corso::create(array(
			'codice' => 'DTP',
			'facolta' => 'Design',
			'corso' => 'Product Design 1',
			'descrizione' => 'Tipologia dei Materiali 1'
		));
	}
}
