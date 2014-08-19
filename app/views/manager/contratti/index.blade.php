@extends('manager.layout')


<!--
	http://culttt.com/2013/08/19/creating-forms-in-laravel-4/
	http://stackoverflow.com/questions/17373323/laravel-3-x-route-issue-page-not-found-even-with-the-route-set
-->

@section('head')
<script>
	/*
	$(document).ready(function() {
		$.fn.editable.defaults.mode = 'inline';
		$('#codice').editable();
	});
	*/
</script>
@stop

@section('content')
<div>
	<h1>Contratti</h1>

	<!-- will be used to show any messages -->
	@if (Session::has('message'))
		<div class="alert alert-info">{{ Session::get('message') }}</div>
	@endif

	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<td>ID</td>
				<td>Numero Contratto</td>
				<td>Nome Docente</td>
				<td>Corso</td>
				<td>Actions</td>
			</tr>
		</thead>
		<tbody>
		@foreach($contratti as $contratto)
			<tr>
				<td>{{ $contratto->id }}</td>
				<td>{{ $contratto->numero_contratto }}</td>
				<td>{{ $contratto->docente->nome }}</td>
				<td></td>
				
				<td>


					{{ Form::open(array('url' => 'contratti/' . $contratto->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Cancella', array('class' => 'btn btn-warning')) }}
					{{ Form::close() }}

					<a class="btn btn-small btn-success" href="{{ URL::to('contratti/' . $contratto->id) }}">Visualizza</a>
					<a class="btn btn-small btn-info" href="{{ URL::to('contratti/' . $contratto->id . '/edit') }}">Modifica</a>

				</td>
			</tr>
			
		@endforeach
		</tbody>
	</table>
</div>
@stop