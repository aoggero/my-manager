<?php

	class Contratto extends Eloquent {

		protected $table = 'contratti';
	
		//protected $fillable = array('numero_contratto', 'anno', 'monte_ore', 'costo_contr', 'costo_azienda');

		public function docente() {
			return $this->belongsTo('Docente');
		}

		public function allegati() {
			return $this->hasMany('Allegato');
		}
		
	}

?>