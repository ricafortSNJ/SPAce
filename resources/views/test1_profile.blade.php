<!DOCTYPE html>
<html lang="en">
<head>
    @include("layouts/00_head")
    <title>Profile</title>
</head>
<body>
@include("layouts/00_nav")
    
    <h1>Profile Page</h1>
    @foreach ($user as $u)
    <img src="image_uploads/{{$u->image}}"/>
    @endforeach
    <form action="/test1_profile/upload" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Upload photo:</label>
        <input type="file" name="image"></input><br>
        <button type="submit">Submit</button>
    </form>

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
        </ul>
        @endforeach
    @else
        <p>Nothing to show here</p>
    @endif

    <a class="btn btn-warning" href="test1_profile/edit">Edit</a>
    
    
</body>
</html>