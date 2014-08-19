<?php

	class Corso extends Eloquent {

		protected $fillable = array('codice', 'facolta', 'corso', 'descrizione');

		protected $table = 'corsi';
	}

?>