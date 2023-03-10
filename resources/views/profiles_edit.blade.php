<!DOCTYPE html>
<html lang="en">
<head>
    @include("layouts/head")
    <title>Users</title>
</head>
<body>
    @include("layouts/navbar")
    
    <h1>Edit User Page</h1>
    @foreach ($user as $u)
    <form action="/admin/users/{{$u -> user_id}}" method="POST">
        @method('PUT')
        @csrf
        <label>Email address</label>
        <input type="email" name="email_address" value="{{$u -> email_address}}"></input><br>
        <label>Password</label>
        <input type="text" name="password" value="{{$u -> password}}"></input><br>
        <label>Customer?</label>
        <input type="text" name="is_customer" value="{{$u -> is_customer}}"></input><br>
        <label>Professional?</label>
        <input type="text" name="is_professional" value="{{$u -> is_professional}}"></input><br>
        <button type="submit">Submit</button>
    </form>
    
    @endforeach
</body>
</html>