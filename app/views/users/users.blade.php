@extends('layout')

<head>

	<link id="dataTableStyle" rel="stylesheet" href="css/jquery.dataTables.css" type="text/css" />

	<script src="js/jquery-1.8.3.min.js"></script>
	<script src="js/jquery-ui-1.10.4.min.js"></script>
	<script src="js/jquery.dataTables.js"></script>
	<script src="js/jquery.jeditable.js"></script>
	<script src="js/jquery.dataTables.editable.js"></script>

	<script>
		jQuery(document).ready(function() {
			jQuery('#userList').dataTable().makeEditable({
				sUpdateURL: "UpdateUser.php",
				oAddNewRowButtonOptions: { 
					label: "Add...",
									icons: { primary: 'ui-icon-plus' }
								},
								oDeleteRowButtonOptions: {
					label: "Remove",
									icons: { primary: 'ui-icon-trash' }
								},
								oAddNewRowOkButtonOptions: {
					label: "Confirm",
									icons: { primary: 'ui-icon-check' },
									name: "action",
									value: "add-new"
								},
								oAddNewRowCancelButtonOptions: { 
					label: "Close",
									class: "back-class",
									name: "action",
									value: "cancel-add",
									icons: { primary: 'ui-icon-close' }
								},
								oAddNewRowFormOptions: {
					title: 'Add a new browser - form',
									show: "blind",
									hide: "explode"
				}
			});
		} );
	</script>
</head>

@section('content')
	<div>
		
		<table id="userList" class="display" width="100%">
			<thead>
				<th>Name</th>
				<th>Email</th>
			</thead>
			<tbody>
				
			<?php $i = 0?>
				
			@foreach($users as $user)
				<?php $i++?>
				<tr id="<?php echo $i?>">
					<td>{{ $user->name }}</td>
					<td>{{ $user->email }}</td>
				
				</tr>
			@endforeach
			</tbody>
		</table>

	</div>
	
	<div class="add_delete_toolbar" />
	
	<form id="formAddNewRow" action="#" title="Add new record">
		<label for="engine">Rendering engine</label><br />
		<input type="text" name="engine" id="name" class="required" rel="0" />
		<br />
		<label for="browser">Browser</label><br />
		<input type="text" name="browser" id="browser" rel="1" />
		<br />
		<label for="platforms">Platform(s)</label><br />
		<textarea name="platforms" id="platforms" rel="2"></textarea>
		<br />
		<label for="version">Engine version</label><br />
		<select name="version" id="version" rel="3">
				<option>1.5</option>
				<option>1.7</option>
				<option>1.8</option>
		</select>
		<br />
		<label for="grade">CSS grade</label><br />
		<input type="radio" name="grade" value="A" rel="4"> First<br>
		<input type="radio" name="grade" value="B" rel="4"> Second<br>
		<input type="radio" name="grade" value="C" checked rel="4"> Third
		<br />
	</form>
	
@stop