<!DOCTYPE html>
<html lang="en">
<head>
    @include("layouts/00_head")
    <title>Bookings</title>
</head>
<body>
@include("layouts/00_nav")
    
    <h1>Bookings Page</h1>
    @if (count($user_bookings) > 0)
        <ul>
        @foreach ($user_bookings as $ub)
            <li>
                <h5>Booking ID: {{$ub->booking_id}}</h5>
                <h5>Professional Name: {{$ub->username}}</h5>
                <h5>Date: {{$ub->date}}</h5>
                <h5>Time: {{$ub->time}}</h5>
                <h5>Status: {{$ub->status}}</h5>
            </li>
            <a class="btn btn-dark" href="#">Message</a>
            @if ($ub->status == 'Pending')
            <a class="btn btn-danger" href="#">{{$ub->status}}</a>
            @endif
            @if ($ub->status == 'Paid')
            <a class="btn btn-success" href="#">{{$ub->status}}</a>
            <a class="btn btn-success" href="#">Review</a>
            @endif
            @if ($ub->status == 'Cancelled')
            <a class="btn btn-secondary" href="#">{{$ub->status}}</a>
            @endif
            @if ($ub->status == 'Approved')
            <a class="btn btn-primary" href="#">{{$ub->status}}</a>
            <a class="btn btn-primary" href="#">PAY</a>
            @endif
        @endforeach
        </ul>
    @else
        <p>Nothing to show here</p>
    @endif
    
</body>
</html>