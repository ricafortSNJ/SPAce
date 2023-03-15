<!DOCTYPE html>
<html lang="en">
<head>
    @include("layouts/head")
    <title>Home</title>
</head>
<body>
    @include("layouts/navbar_dashboard")
    <h1>HOME</h1>
    @if (count($user) > 0)
        @foreach ($user as $u)
        <h1>Welcome Customer!</h1>
        <ul>
            <li>User ID: {{$u->user_id}}</li>
            <li>Email Address: {{$u->email_address}}</li>
            <li>User Type: {{$u->user_type}}</li>
        </ul>
        @endforeach
    @else
        <p>Nothing to show here</p>
    @endif
    <a href="/logout">Logout</a>


</body>
</html>