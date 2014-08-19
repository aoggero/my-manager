@extends('manager.layout')

@section('content')
<div>
	<h1>Showing {{ $docente->nome }}</h1>

	<div class="jumbotron text-center">
		<h2>{{ $docente->nome }} {{ $docente->cognome }}</h2>
		<p>
			<strong>Posizione Fiscale:</strong> {{ $docente->posizione_fiscale }}<br>
			<strong>Numero Contratto Arca:</strong> {{ $docente->num_contratto_arca }}<br>
			<strong>Numero Fornitore Arca:</strong> {{ $docente->num_fornitore_arca }}
		</p>
	</div>
</div>
@stop