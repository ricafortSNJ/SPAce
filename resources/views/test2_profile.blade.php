<!DOCTYPE html>
<html lang="en">
<head>
    @include("layouts/00_head")
    <title>Profile</title>
</head>
<body>
@include("layouts/00_nav-p")
    
    <h1>Profile Page</h1>
    @if (count($user) > 0)
        @foreach ($user as $u)
        <h1>Welcome! {{$u->first_name}} {{$u->last_name}}</h1>
        <ul>
            <li>First name: {{$u->first_name}}</li>
            <li>Last name: {{$u->last_name}}</li>
            <li>Mobile number: {{$u->mobile_number}}</li>
            <li>Email address: {{$u->email_address}}</li>
            <li>Username: {{$u->username}}</li>
            <li>Social media: {{$u->social_media}}</li>
            <li>Location: {{$u->location}}</li>
            <li>Expertise: {{$u->expertise}}</li>
            <li>Availability: {{$u->availability}}</li>
            <li>Rates: {{$u->rates}}</li>
        </ul>
        @endforeach
    @else
        <p>Nothing to show here</p>
    @endif

    <a class="btn btn-warning" href="test2_profile/edit">Edit</a>
    
    
</body>
</html>