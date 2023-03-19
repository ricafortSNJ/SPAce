<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviews</title>
<!-- CSS link -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-8Kv7V9e9r1n7IQWmAT+Rv/OVlUDJtA/7tTzKZTn+2uJ9sLRsLTrjKPPyI+FiN1jB" crossorigin="anonymous">

<!-- JavaScript links -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-6Z0lRgzJUgVRoC5K0vf0yLqNSv5eTU6RITg6iCrz2U4ny4L4OnhKj3qBo/VX5U5S" crossorigin="anonymous"></script>



    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="/3_assets/css/reviews.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        
    @include("layouts/03_nav")

        <!-- ========================= Main ==================== -->
        <div class="main">
            
        
        @include("layouts/03_topbar")

            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">1,504</div>
                        <div class="cardName">Clients</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="person-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">80</div>
                        <div class="cardName">5 Star Ratings</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="star-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">284</div>
                        <div class="cardName">Comments</div>
                    </div>

                </div>

 </div>

            <div class="comments-container">
                
            
            <div class="review-recived">
                <h1>Reviews Received</h1>
              <hr>
              @if (count($professional_reviews) > 0)
              @foreach ($professional_reviews as $pr)
              @if ($loop->iteration > 5)
              @break
              @endif
                <div class="comment">
                  <img src="/image_uploads/{{$pr->profile_id}}.jpg" alt="Profile picture of Brian Selter">
                  <div class="comment-details">
                    <div class="comment-header">
                      <h3>By: {{$pr->username}}</h3>
                      <h5>Booking Id: {{$pr->booking_id}}</h5>
                      <span class="comment-time">Last Update: {{$pr->last_update}}</span>
                    </div>
                    <p style="color: black;">Comments: {{$pr->review}}</p>
                  </div>
                </div>
              <hr>
              @endforeach
              @else
                <p>Nothing to show here</p>
              @endif

            </div>

              <div class="review-given">
                <h1>Reviews Given</h1>
              <hr>
              @if (count($user_reviews) > 0)
              @foreach ($user_reviews as $ur)
              @if ($loop->iteration > 5)
              @break
              @endif
                <div class="comment">
                  <img src="/image_uploads/{{$ur->profile_id}}.jpg" alt="Profile picture of Brian Selter">
                  <div class="comment-details">
                    <div class="comment-header">
                      <h3>By: {{$ur->username}}</h3>
                      <h5>Booking Id: {{$ur->booking_id}}</h5>
                      <span class="comment-time">Last Update: {{$ur->last_update}}</span>
                    </div>
                    <p style="color: black;">Comments: {{$ur->review}}</p>
                  </div>
                </div>
              <hr>
              @endforeach
              @else
                <p>Nothing to show here</p>
              @endif

              </div>

            </div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="/3_assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>