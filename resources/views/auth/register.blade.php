<!DOCTYPE html>
<html>
<head>
<title>Register</title>
</head>

<body>
<form method="post" action="/auth/register">
	{{ csrf_field() }}
	<label>Name: </label><input type="text" name="name" value="{{ old('name') }}"><br>
	<div>{{ $errors->default->first('name') }}</div>
	<label>Email: </label><input type="text" name="email"value="{{ old('email') }}"><br>
	<div>{{ $errors->default->first('email') }}</div>
	<label>Password: </label><input type="password" name="password"><br>
	<div>{{ $errors->default->first('password') }}</div>
	<label>Confirm Password: </label><input type="password" name="password_confirmation"><br>
	<input type="submit" value="Sign Up">
</form>
</body>

</html>