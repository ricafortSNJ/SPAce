<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookings</title>
<!-- CSS link -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-8Kv7V9e9r1n7IQWmAT+Rv/OVlUDJtA/7tTzKZTn+2uJ9sLRsLTrjKPPyI+FiN1jB" crossorigin="anonymous">

<!-- JavaScript links -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-6Z0lRgzJUgVRoC5K0vf0yLqNSv5eTU6RITg6iCrz2U4ny4L4OnhKj3qBo/VX5U5S" crossorigin="anonymous"></script>



    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="/2_assets/css/booking.css">
    
    @include("layouts/02_head")
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
    @include("layouts/02_nav")

        <!-- ========================= Main ==================== -->
        <div class="main">
            
        @include("layouts/02_topbar")

<div class="booking-wrapper">
    
              @if (count($user_bookings) > 0)
              @foreach ($user_bookings as $ub)
              @if ($loop->iteration > 5)
              @break
              @endif
              <div class="booking-card">
                <div class="user-profile">
                  <img src="/image_uploads/{{$ub->professional_id}}.jpg" alt="Therapist Profile Picture">
                </div>
                <div class="user-info">
                  <h2><span>{{$ub->username}}</span></h2>
                  <p>Contact #: <span>{{$ub->mobile_number}}</span></p>
                  <p>BookingID: <span>2023-123-{{$ub->booking_id}}</span></p>
                  <p>Address: <span>{{$ub->location}}</span></p>
                  <div class="time-sched"><p>Schedule: <span>{{$ub->date}} {{$ub->time}}</span></p></div>

                  <div class="services-wrapper"><p>Expertise: {{$ub->expertise}}</p></div>


                </div>
                <div class="status-badge status-ongoing">{{$ub->status}}</div>
                @if ($ub->status =='Paid')
                <div class="buttons">
                  <div class="buttons">
                    <button class="decline">Review</button>
                  </div>
                </div>
                @elseif ($ub->status =='Approved')
                <div class="buttons">
                  <div class="buttons">
                    <button class="accept">Pay</button>
                  </div>
                </div>
                @endif
              </div>
              @endforeach
              @else
              <p>Nothing to show here</p>
              @endif

    </div>

    <!-- =========== Scripts =========  -->


<script>const statusBadge = document.querySelector('.status-badge');

    // Set the status of the booking
    const status = 'completed'; // Replace with actual booking status
    
    // Add the corresponding status class to the badge element
    if (status === 'completed') {
      statusBadge.classList.add('status-completed');
    } else if (status === 'cancelled') {
      statusBadge.classList.add('status-cancelled');
    } else if (status === 'ongoing') {
      statusBadge.classList.add('status-ongoing');
    }</script>
    <script src="/2_assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>