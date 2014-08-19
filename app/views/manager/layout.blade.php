<!DOCTYPE html>
<html>
	<head>
		<title>Manager</title>
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
		<script src="http://code.jquery.com/jquery-2.0.3.min.js"></script> 
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>		
		<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
		<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
		@yield('head')
	</head>
	<body>
		<div class="container-fluid">
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

				<nav class="navbar navbar-inverse">
					<div class="navbar-header">
						<a class="navbar-brand" href="{{ URL::to('manager') }}">Manager</a>
					</div>
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Docenti <span class="caret"></span></a>
							<!--<a href="{{ URL::to('docenti') }}">Docenti</a>-->
							<ul class="dropdown-menu" role="menu">
							<!--<ul class="nav navbar-nav">-->
								<li><a href="{{ URL::to('docenti') }}">Visualizza</a></li>
								<li><a href="{{ URL::to('docenti/create') }}">Crea</a></li>
							</ul>	
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Corsi <span class="caret"></span></a>
							<!--<a href="{{ URL::to('corsi') }}">Corsi</a>
							<ul class="nav navbar-nav">-->
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ URL::to('corsi') }}">Visualizza</a></li>
								<li><a href="{{ URL::to('corsi/create') }}">Crea</a></li>
							</ul>	
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Contratti <span class="caret"></span></a>
							<!--<a href="{{ URL::to('contratti') }}">Contratti</a>
							<ul class="nav navbar-nav">-->
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ URL::to('contratti') }}">Visualizza</a></li>
								<li><a href="{{ URL::to('contratti/create') }}">Crea</a></li>
							</ul>	
						</li>
					</ul>
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Search">
						</div>
						<button type="submit" class="btn btn-default">Submit</button>
					</form>
				</nav>
			</div>
	
			@yield('content')
				
		</div>
	</body>
</html>