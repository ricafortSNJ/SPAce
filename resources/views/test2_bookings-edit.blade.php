<!DOCTYPE html>
<html lang="en">
<head>
    @include("layouts/00_head")
    <title>Booking</title>
</head>
<body>
@include("layouts/00_nav-p")
    

    <h1>Edit Booking Status</h1>
    @foreach ($booking as $b)
    <form action="/test2_bookings/edit/{{$b->booking_id}}" method="POST">
        @csrf
        <label>Status</label>
        <input type="text" name="status" value="{{$b -> status}}"></input><br>
        <button type="submit">Submit</button>
    </form>
    
    @endforeach
    
</body>
</html>