<!DOCTYPE html>
<html>
<head>
<title>Sign In</title>
</head>

<body>
<form method="post" action="/auth/login">
    {{ csrf_field() }}
    <label>Email: </label><input type="text" name="email"value="{{ old('email') }}"><br>
    <div>{{ $errors->default->first('email') }}</div>
    <label>Password: </label><input type="password" name="password"><br>
    <div>{{ $errors->default->first('password') }}</div>
    <input type="submit" value="Sign In">
</form>
</body>

</html>