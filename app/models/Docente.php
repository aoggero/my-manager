<?php

	class Docente extends Eloquent {
	
		protected $table = 'docenti';

		//protected $fillable = array('nome', 'cognome', 'posizione_fiscale');
		
		public function contratti() {
			return $this->hasMany('Contratto');
		}

	}

?>