<!DOCTYPE html>
<html lang="en">
<head>
    @include("layouts/head")
    <title>Bookings</title>
</head>
<body>
@include("layouts/navbar_dashboard")
    
    <h1>Bookings Page</h1>
    @if (count($user_bookings) > 0)
        <ul>
        @foreach ($user_bookings as $ub)
            <li>
                <h5>Booking ID: {{$ub->booking_id}}</h5>
                <h5>Customer Username: {{$ub->username}}</h5>
                <h5>Professional ID: {{$ub->professional_id}}</h5>
                <h5>Date: {{$ub->date}}</h5>
                <h5>Time: {{$ub->time}}</h5>
                <h5>Status: {{$ub->status}}</h5>
            </li>
        @endforeach
        </ul>
    @else
        <p>Nothing to show here</p>
    @endif
    
</body>
</html>