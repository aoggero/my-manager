@extends('manager.layout')

@section('content')
<div>
	<h1>Crea un corso</h1>

	<!-- will be used to show any messages -->
	@if (Session::has('message'))
		<div class="alert alert-info">{{ Session::get('message') }}</div>
	@endif

	{{ HTML::ul($errors->all()) }}

	{{ Form::open(array('url' => 'docenti')) }}

		<div class="form-group">
			{{ Form::label('nome', 'Nome') }}
			{{ Form::text('nome', Input::old('nome'), array('class' => 'form-control')) }}
		</div>
		<div class="form-group">
			{{ Form::label('cognome', 'Cognome') }}
			{{ Form::text('cognome', Input::old('cognome'), array('class' => 'form-control')) }}
		</div>
		<!--<div class="form-group">
			{{ Form::label('identificativo_fiscale', 'ID Fiscale') }}
			{{ Form::text('identificativo_fiscale', Input::old('identificativo_fiscale'), array('class' => 'form-control')) }}
		</div>		
		-->
		<div class="form-group">
			{{ Form::label('posizione_fiscale', 'Posizione Fiscale') }}
			{{ Form::text('posizione_fiscale', Input::old('posizione_fiscale'), array('class' => 'form-control')) }}
		</div>
		<div class="form-group">
			{{ Form::label('num_contratto_arca', 'Num Contratto Arca') }}
			{{ Form::text('num_contratto_arca', Input::old('num_contratto_arca'), array('class' => 'form-control')) }}
		</div>
		<div class="form-group">
			{{ Form::label('num_fornitore_arca', 'Num Fornitore Arca') }}
			{{ Form::text('num_fornitore_arca', Input::old('num_fornitore_arca'), array('class' => 'form-control')) }}
		</div>		

		{{ Form::submit('Crea', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}
</div>
@stop