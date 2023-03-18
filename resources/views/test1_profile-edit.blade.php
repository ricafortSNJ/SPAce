<!DOCTYPE html>
<html lang="en">
<head>
    @include("layouts/00_head")
    <title>Profile</title>
</head>
<body>
@include("layouts/00_nav")
    

    <h1>Edit User Page</h1>
    @foreach ($user as $u)
    <form action="/test1_profile/edit" method="POST">
        @csrf
        <label>First Name</label>
        <input type="text" name="first_name" value="{{$u -> first_name}}"></input><br>
        <label>Last Name</label>
        <input type="text" name="last_name" value="{{$u -> last_name}}"></input><br>
        <label>Mobile Number</label>
        <input type="text" name="mobile_number" value="{{$u -> mobile_number}}"></input><br>
        <label>Email address</label>
        <input type="email" name="email_address" value="{{$u -> email_address}}"></input><br>
        <label>Username</label>
        <input type="text" name="username" value="{{$u -> username}}"></input><br>
        <label>Social Media</label>
        <input type="text" name="social_media" value="{{$u -> social_media}}"></input><br>
        <label>Location</label>
        <input type="text" name="location" value="{{$u -> location}}"></input><br>
        <button type="submit">Submit</button>
    </form>
    
    @endforeach
    
</body>
</html>