@extends('manager.layout')


<!--
	http://culttt.com/2013/08/19/creating-forms-in-laravel-4/
	http://stackoverflow.com/questions/17373323/laravel-3-x-route-issue-page-not-found-even-with-the-route-set
-->

@section('head')
<script>
	
	$(document).ready(function() {
		$.fn.editable.defaults.mode = 'inline';
		$('.nome').editable({
			url: 'docente/quick_update'
		});
	});
	
</script>
@stop

@section('content')
<div>
	<h1>Docenti</h1>

	<!-- will be used to show any messages -->
	@if (Session::has('message'))
		<div class="alert alert-info">{{ Session::get('message') }}</div>
	@endif

	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<td>ID</td>
				<td>Nome</td>
				<td>Cognome</td>
				<td>Posizione Fiscale</td>
				<td>N Contratto Arca</td>
				<td>N Fornitore Arca</td>
				<td>Actions</td>
			</tr>
		</thead>
		<tbody>
		@foreach($docenti as $docente)
	
			<tr>
				<td>{{ $docente->id }}</td>
				<td class="nome"  data-name="nome" data-pk="{{ $docente->id }}">{{ $docente->nome }}</td>
				<td>{{ $docente->cognome }}</td>
				<td>{{ $docente->posizione_fiscale }}</td>
				<td>{{ $docente->num_contratto_arca }}</td>
				<td>{{ $docente->num_fornitore_arca }}</td>

				<td>

					{{ Form::open(array('url' => 'docenti/' . $docente->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Cancella', array('class' => 'btn btn-warning')) }}
					{{ Form::close() }}

					<a class="btn btn-small btn-success" href="{{ URL::to('docenti/' . $docente->id) }}">Visualizza</a>
					<a class="btn btn-small btn-info" href="{{ URL::to('docenti/' . $docente->id . '/edit') }}">Modifica</a>

				</td>
			</tr>

		@endforeach
		</tbody>
	</table>
</div>
@stop