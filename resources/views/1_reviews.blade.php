<!DOCTYPE html>
<html lang="en">
<head>
    @include("layouts/head")
    <title>Review</title>
</head>
<body>
@include("layouts/navbar_dashboard")
    
    <h1>Review Page</h1>
    <h3>Reviews Given</h3>
    @if (count($user_reviews) > 0)
        <ul>
        @foreach ($user_reviews as $ur)
            <li>
                <h5>Review by Username: {{$ur->username}}</h5>
                <h5>Booking Id: {{$ur->booking_id}}</h5>
                <h5>Rating: {{$ur->rating}}</h5>
                <h5>Review: {{$ur->review}}</h5>
                <h5>Last Update: {{$ur->last_update}}</h5>
            </li>
        @endforeach
        </ul>
    @else
        <p>Nothing to show here</p>
    @endif

    
    <h3>Reviews Received</h3>
    @if (count($professional_reviews) > 0)
        <ul>
        @foreach ($professional_reviews as $pr)
            <li>
                <h5>Review by Username: {{$pr->username}}</h5>
                <h5>Booking Id: {{$pr->booking_id}}</h5>
                <h5>Rating: {{$pr->rating}}</h5>
                <h5>Review: {{$pr->review}}</h5>
                <h5>Last Update: {{$pr->last_update}}</h5>
            </li>
        @endforeach
        </ul>
    @else
        <p>Nothing to show here</p>
    @endif
    
</body>
</html>