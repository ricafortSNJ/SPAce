<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- CSS link -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-8Kv7V9e9r1n7IQWmAT+Rv/OVlUDJtA/7tTzKZTn+2uJ9sLRsLTrjKPPyI+FiN1jB" crossorigin="anonymous">

<!-- JavaScript links -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-6Z0lRgzJUgVRoC5K0vf0yLqNSv5eTU6RITg6iCrz2U4ny4L4OnhKj3qBo/VX5U5S" crossorigin="anonymous"></script>



    <title>Reviews</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="{{ asset('assets/css/reviews.css') }}">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="">
                        <span class="icon">
                            
                    
                     <span class="title"><img src="assets/imgs/logo.png" alt="logo-spa">
                        </span>
                    </a>
                </li>

                <li>
                    <a href="/p_dashboard">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="/p_profile">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Profile</span>
                    </a>
                </li>
                <li>
                    <a href="/p_messaging">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Messages</span>
                    </a>
                </li>
                <li>
                    <a href="comments.html">
                        <span class="icon">
                            <ion-icon name="book-outline"></ion-icon>
                        </span>
                        <span class="title">Bookings</span>
                    </a>
                </li>

                <li>
                    <a href="/p_reviews">
                        <span class="icon">
                            <ion-icon name="star-outline"></ion-icon>
                        </span>
                        <span class="title">Reviews</span>
                    </a>
                </li>

                <li>
                    <a href="/p_earnings">
                        <span class="icon">
                            <ion-icon name="cash-outline"></ion-icon>
                        </span>
                        <span class="title">Earnings</span>
                    </a>
                </li>

        

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    <img src="assets/imgs/customer01.jpg" alt="">
                </div>
            </div>

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
                <div class="comment">
                  <img src="https://i.imgur.com/zQZSWrt.jpg" alt="Profile picture of Brian Selter">
                  <div class="comment-details">
                    <div class="comment-header">
                      <h3>Brian Selter</h3>
                      <span class="comment-time">12h ago</span>
                      <span class="comment-badge"><ion-icon name="star-outline"></ion-icon>Top Comment</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                  </div>
                </div>
              <hr>
                <div class="comment">
                  <img src="https://i.imgur.com/3J8lTLm.jpg" alt="Profile picture of Seltos Majito">
                  <div class="comment-details">
                    <div class="comment-header">
                      <h3>Seltos Majito</h3>
                      <span class="comment-time">2h ago</span>
                      <span class="comment-badge"><ion-icon name="star-outline"></ion-icon>Top Comment</span>
                    </div>
                    <p>Tellus in hac habitasse platea dictumst vestibulum. Lectus nulla at volutpat diam ut venenatis tellus. Aliquam etiam erat velit scelerisque in dictum non consectetur. Sagittis nisl rhoncus mattis rhoncus urna neque viverra justo nec. Tellus cras adipiscing enim eu turpis egestas pretium aenean pharetra. Aliquam faucibus purus in massa.</p>
                  </div>
                </div>
              <hr>
                <div class="comment">
                  <img src="https://i.imgur.com/agRGhBc.jpg" alt="Profile picture of Maria Santola">
                  <div class="comment-details">
                    <div class="comment-header">
                      <h3>Maria Santola</h3>
                      <span class="comment-time">12h ago</span>
                      <span class="comment-badge"><ion-icon name="star-outline"></ion-icon>Top Comment</span>
                    </div>
                    <p>Id eu nisl nunc mi ipsum faucibus. Massa massa ultricies mi quis hendrerit dolor. Arcu bibendum at varius vel pharetra vel turpis nunc eget. Habitasse platea dictumst quisque sagittis purus sit amet volutpat. Urna condimentum mattis pellentesque id. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                  </div>
                </div>
              </div>

              <div class="review-given">
                <h1>Reviews Given</h1>
              <hr>
                <div class="comment">
                  <img src="https://i.imgur.com/zQZSWrt.jpg" alt="Profile picture of Brian Selter">
                  <div class="comment-details">
                    <div class="comment-header">
                      <h3>Brian Selter</h3>
                      <span class="comment-time">12h ago</span>
                      <span class="comment-badge"><ion-icon name="star-outline"></ion-icon>Top Comment</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                  </div>
                </div>
              <hr>
                <div class="comment">
                  <img src="https://i.imgur.com/3J8lTLm.jpg" alt="Profile picture of Seltos Majito">
                  <div class="comment-details">
                    <div class="comment-header">
                      <h3>Seltos Majito</h3>
                      <span class="comment-time">2h ago</span>
                      <span class="comment-badge"><ion-icon name="star-outline"></ion-icon>Top Comment</span>
                    </div>
                    <p>Tellus in hac habitasse platea dictumst vestibulum. Lectus nulla at volutpat diam ut venenatis tellus. Aliquam etiam erat velit scelerisque in dictum non consectetur. Sagittis nisl rhoncus mattis rhoncus urna neque viverra justo nec. Tellus cras adipiscing enim eu turpis egestas pretium aenean pharetra. Aliquam faucibus purus in massa.</p>
                  </div>
                </div>
              <hr>
                <div class="comment">
                  <img src="https://i.imgur.com/agRGhBc.jpg" alt="Profile picture of Maria Santola">
                  <div class="comment-details">
                    <div class="comment-header">
                      <h3>Maria Santola</h3>
                      <span class="comment-time">12h ago</span>
                      <span class="comment-badge"><ion-icon name="star-outline"></ion-icon>Top Comment</span>
                    </div>
                    <p>Id eu nisl nunc mi ipsum faucibus. Massa massa ultricies mi quis hendrerit dolor. Arcu bibendum at varius vel pharetra vel turpis nunc eget. Habitasse platea dictumst quisque sagittis purus sit amet volutpat. Urna condimentum mattis pellentesque id. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                  </div>
                </div>
                <hr>
              </div>

            </div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="{{ asset('assets/js/p_main.js') }}"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>