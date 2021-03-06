<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>

	@if (session('success'))
	<div class="alert alert-success">
		{{ session('success') }}
	</div>
	@endif

	<form action="{{ route('users.update',['id' => $user->id]) }}" method="GET" role="form">
		<legend>Edit</legend>
	
		<div class="form-group">
			<label for="username">name</label>
			<input type="text" name="username" class="form-control" id="" placeholder="dien ten vao day" value="{{ $user->name }}">
		</div>
	
		<div class="form-group">
			<label for="email">email</label>
			<input type="text" name="email" class="form-control" id="" placeholder="dien email vao day" value="{{ $user->email }}">
		</div>
			
		<div class="form-group">
			<label for="">password</label>
			<input type="password" name="password" class="form-control" id="" placeholder="dien password vao day" value="{{ $user->password }}">
		</div>

		<button type="Submit" class="btn btn-primary">Update</button>
	</form>
</body>
</html>