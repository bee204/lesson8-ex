<!DOCTYPE html>
<html>
<head>
	<title>CreateUser</title>
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

	<form action="/user/store" method="GET" role="form">
		<legend>Creat</legend>
	
		<div class="form-group">
			<label for="username">name</label>
			<input type="text" name="username" class="form-control" id="" placeholder="dien ten vao day">
		</div>
	
		<div class="form-group">
			<label for="email">email</label>
			<input type="text" name="email" class="form-control" id="" placeholder="dien email vao day">
		</div>
			
		<div class="form-group">
			<label for="">password</label>
			<input type="password" name="password" class="form-control" id="" placeholder="dien password vao day">
		</div>

		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</body>
</html>