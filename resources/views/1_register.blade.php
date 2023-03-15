<!DOCTYPE html>
<html lang="en">
<head>
    @include("layouts/head")
    <title>Register</title>
</head>
<body>
    @include("layouts/navbar_login")
    <h1>Register</h1>
    <form action="/register" method="POST">
        @csrf
        <label>Email address:</label>
        <input type="email" name="email_address"></input><br>
        <label>Password:</label>
        <input type="password" name="password"></input><br>
        <label>Confirm password:</label>
        <input type="password" name="con_password"></input><br>
        <button type="submit">Submit</button>
    </form>


</body>
</html>