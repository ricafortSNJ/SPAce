<!DOCTYPE html>
<html lang="en">

<head>
    @include("layouts/00_head")
    <title>Test</title>
</head>

<body>
@include("layouts/00_nav-login")
<h1>Login</h1>
<form action="/test_login" method="POST">
    @csrf
    <label>Email address:</label>
    <input type="email" name="email_address"></input><br>
    <label>Password:</label>
    <input type="password" name="password"></input><br>
    <button type="submit">Login</button>
</form>
</body>

</html>