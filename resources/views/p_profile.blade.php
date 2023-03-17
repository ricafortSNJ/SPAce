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



    <title>Professional's Profile</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="{{ asset('assets/css/profile_settings.css') }}">
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

        <div class="profilecard-holder">

            <div class="card">
                <div class="card__img">
                    <img src="https://phongvu.vn/cong-nghe/wp-content/uploads/2019/09/img_7866.jpg" alt="nhan">
                </div>
                <div class="card__name">
                    <h2>Baby Lou</h2>
                </div>
                <div class="card__job">
                    <span>UserID:124578</span>
                </div>
                <div class="card__link">
                    <a href="#">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="logo-linkedin"></ion-icon>
                    </a>
                </div>
        
            </div>


            <div class="details-container">
            
<table>
<tbody>
<div id="editbutton"> <a href="edit_profile.html"><button>Edit Details</button></a> </div>

    <tr>
      <td>First Name:</td>
      <td style="text-align: center;"> Baby</td>
    </tr>
    <tr>
      <td>Last Name</td>
      <td style="text-align: center;">Lou</td>
    </tr>
    <tr>
      <td>Email: </td>
      <td style="text-align: center;">girly.girl@gmail.com</td>
    </tr>
    <tr>
      <td>Contact#:</td>
      <td style="text-align: center;">09457874155</td>
    </tr>
    <tr>
        <td>Address:</td>
        <td style="text-align: center;">143 Trinity Ave Cubao</td>
      </tr>

  </tbody>
</table>



<div class="expertise-details">
<table>
    <thead>
      <tr>
        <th>Expertise</th>
        <th>Rate</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Swedish Massage</td>
        <td>500php</td>
      </tr>
      <tr>
        <td>Thai Massage</td>
        <td>500php</td>
      </tr>
      <tr>
        <td>Ventosa</td>
        <td>350php</td>
      </tr>
      <tr>
        <td>Acupuncture</td>
        <td>400php</td>
      </tr>
    </tbody>
  </table>
</div>


            </div>
        </div>
        <div class="proffesional-aboutme">
        <h2>About Me</h2>
        <p>My name is Baby Lou and I am a certified massage therapist with 3 years of experience. My passion is to help my clients relieve their stress and pain through the power of touch. I offer a variety of massage techniques including Swedish Massage, Thai Massage, Ventosa, Acupuncture.</p>
      <br>
        <h2>Certifications and Training</h2>
        <ul>
          <li>Hagod Manila Massage Training Center- Massage Therapy NC II - 2020</li>
          <li>SPAce Training Center- Massage Therapy Certification - 2021 </li>
        </ul>


    </div>

        
    </div>



        <!-- =========== Scripts =========  -->
    <script src="{{ asset('assets/js/p_main.js') }}"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>