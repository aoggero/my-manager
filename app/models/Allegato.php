<?php

	class Allegato extends Eloquent {

		protected $fillable = array('nome', 'cognome', 'posizione_fiscale');

		public function corso() {
			return $this->hasOne('Corso');
		}

		public function contratto() {
			return $this->belongsTo('Contratto');
		}

	}

?>