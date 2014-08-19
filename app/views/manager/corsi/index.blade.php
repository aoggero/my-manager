@extends('manager.layout')


<!--
	http://culttt.com/2013/08/19/creating-forms-in-laravel-4/
	http://stackoverflow.com/questions/17373323/laravel-3-x-route-issue-page-not-found-even-with-the-route-set
-->

@section('head')
<script>
	$(document).ready(function() {
		$.fn.editable.defaults.mode = 'inline';
		$('#codice').editable();
	});
</script>
@stop

@section('content')
<div>
	<h1>Corsi</h1>

	<!-- will be used to show any messages -->
	@if (Session::has('message'))
		<div class="alert alert-info">{{ Session::get('message') }}</div>
	@endif

	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<td>ID</td>
				<td>Codice</td>
				<td>Scuola</td>
				<td>Corso</td>
				<td>Descrizione</td>
				<td>Actions</td>
			</tr>
		</thead>
		<tbody>
		@foreach($corsi as $key => $value)
			<tr>		
				<td id="id" >{{ $value->id }}</td>
				<td id="codice" data-type="text" data-pk="{{ $value->id }}" data-url="updateCorso" data-title="Enter username">{{ $value->codice }}</td>
				<td id="scuola" data-type="text" data-pk="{{ $value->id }}" data-url="/corsi/update" data-title="Enter username">{{ $value->facolta }}</td>
				<td id="corso" data-type="text" data-pk="{{ $value->id }}" data-url="/corsi/update" data-title="Enter username">{{ $value->corso }}</td>
				<td id="descrizione" data-type="text" data-pk="{{ $value->id }}" data-url="/corsi/update" data-title="Enter username">{{ $value->descrizione }}</td>

				<!-- we will also add show, edit, and delete buttons -->
				<td>

					<!-- delete the nerd (uses the destroy method DESTROY /corsi/{id} -->
					<!-- we will add this later since its a little more complicated than the other two buttons -->
					{{ Form::open(array('url' => 'corsi/' . $value->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Cancella', array('class' => 'btn btn-warning')) }}
					{{ Form::close() }}

					<!-- show the nerd (uses the show method found at GET /corsi/{id} -->
					<a class="btn btn-small btn-success" href="{{ URL::to('corsi/' . $value->id) }}">Visualizza</a>

					<!-- edit this nerd (uses the edit method found at GET /corsi/{id}/edit -->
					<a class="btn btn-small btn-info" href="{{ URL::to('corsi/' . $value->id . '/edit') }}">Modifica</a>

				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
</div>
@stop