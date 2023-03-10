<!DOCTYPE html>
<html lang="en">
<head>
    @include("layouts/head")
    <title>Users</title>
</head>
<body>
    @include("layouts/navbar")
    
    <h1>Add User Page</h1>
    <form action="/admin/users" method="POST">
        @csrf
        <label>Email address</label>
        <input type="email" name="email_address"></input><br>
        <label>Password</label>
        <input type="text" name="password"></input><br>
        <label>Customer?</label>
        <input type="text" name="is_customer"></input><br>
        <label>Professional?</label>
        <input type="text" name="is_professional"></input><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>