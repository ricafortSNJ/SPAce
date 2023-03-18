<!DOCTYPE html>
<html lang="en">
<head>
    @include("layouts/00_head")
    <title>Payments</title>
</head>
<body>
@include("layouts/00_nav-p")
    
    <h1>Payments Page</h1>
    @if (count($user_payments) > 0)
        <ul>
        @foreach ($user_payments as $up)
            <li>
                <h5>Payment ID: {{$up->payment_id}}</h5>
                <h5>Booking ID: {{$up->booking_id}}</h5>
                <h5>Paid By: {{$up->username}}</h5>
                <h5>Amount: {{$up->amount}}</h5>
                <h5>Date: {{$up->date}}</h5>
                <h5>Time: {{$up->time}}</h5>
                @if ( $up->status )
                <h5>Status: PAID</h5>
                @else
                <h5>Status: UNPAID</h5>
                @endif
            </li>
            <a class="btn btn-warning" href="#">{{$up->status}}</a>
        @endforeach
        </ul>
    @else
        <p>Nothing to show here</p>
    @endif
    
</body>
</html>