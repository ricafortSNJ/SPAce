<!DOCTYPE html>
<html lang="en">
<head>
    @include("layouts/head")
    <title>Profile</title>
</head>
<body>
@include("layouts/navbar_dashboard")
    
    <h1>Profile Page</h1>
    @if (count($user) > 0)
        @foreach ($user as $u)
        <h1>Welcome! {{$u->first_name}} {{$u->last_name}}</h1>
        <ul>
            <li>First name: {{$u->first_name}}</li>
            <li>Last name: {{$u->last_name}}</li>
            <li>Mobile number: {{$u->mobile_number}}</li>
            <li>Email address: {{$u->email_address}}</li>
            <li>Social media: {{$u->social_media}}</li>
        </ul>
        @endforeach
    @else
        <p>Nothing to show here</p>
    @endif
    
</body>
</html>