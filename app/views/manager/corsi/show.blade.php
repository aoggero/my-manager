@extends('manager.layout')

@section('content')
<div>
	<h1>Showing {{ $corso->codice }}</h1>

	<div class="jumbotron text-center">
		<h2>{{ $corso->facolta }}</h2>
		<p>
			<strong>Corso:</strong> {{ $corso->corso }}<br>
			<strong>Descrizione:</strong> {{ $corso->descrizione }}
		</p>
	</div>
</div>
@stop