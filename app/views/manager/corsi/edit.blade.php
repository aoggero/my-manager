@extends('manager.layout')

@section('content')
<div>
	<h1>Modifica il corso</h1>
	
	<!-- will be used to show any messages -->
	@if (Session::has('message'))
		<div class="alert alert-info">{{ Session::get('message') }}</div>
	@endif

	{{ HTML::ul($errors->all()) }}

	{{ Form::model($corso, array('route' => array('corsi.update', $corso->id), 'method' => 'PUT')) }}

		<div class="form-group">
			{{ Form::label('codice', 'Codice') }}
			{{ Form::text('codice', Input::old('codice'), array('class' => 'form-control')) }}
		</div>
		<div class="form-group">
			{{ Form::label('facolta', 'Facolta') }}
			{{ Form::text('facolta', Input::old('facolta'), array('class' => 'form-control')) }}
		</div>
		<div class="form-group">
			{{ Form::label('corso', 'Corso') }}
			{{ Form::text('corso', Input::old('corso'), array('class' => 'form-control')) }}
		</div>		
		<div class="form-group">
			{{ Form::label('descrizione', 'Descrizione') }}
			{{ Form::text('descrizione', Input::old('descrizione'), array('class' => 'form-control')) }}
		</div>		

		{{ Form::submit('Salva', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}	
	
</div>
@stop
