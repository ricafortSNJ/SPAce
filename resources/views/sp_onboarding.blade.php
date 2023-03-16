<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SPAce - Beauty & Spa</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    
    
    @include("layouts/sp_head")

    <!-- Function used to shrink nav bar removing paddings and adding black background -->
    <script>
        $(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
                $('.nav').addClass('affix');
                console.log("OK");
            } else {
                $('.nav').removeClass('affix');
            }
        });
    </script>
</head>
<body>
    <nav class="nav">
        <div class="container">
            <div class="logo" style="display: table-cell; vertical-align: middle;">
                <a class="navbar-brand" href="#"><img src="img/logo.png"
                  style="height: auto; width: 50px; padding-bottom: 5px; padding-top: 4px;" /></a>
                  <a href="#home"><img src="img/sitename no tagline.png"
                    style="height: auto; width: 125px; padding-bottom: 25px; padding-left: 10px; padding-top: 5px;" /></a>
            </div>
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                    <li><a href="/sp_index">Home</a></li>
                    <li><a href="index.html#about">About</a></li>
                    <li><a href="index.html#services">Services</a></li>
                    <li><a href="index.html#testimonial">Testimonial</a></li>
                    <li><a href="index.html#pricing">Pricing</a></li>
                    <li><a href="index.html#contact">Contact</a></li>
                    <li><a href="/sp_index">How it works</a></li>
                </ul>
            </div>
            <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </div>
    </nav>

    <!-- Carousel Start -->
    <section id="home">
        <div class="container-fluid p-0 mb-5 pb-5">
            <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#header-carousel" data-slide-to="1"></li>
                    <li data-target="#header-carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item position-relative active" style="min-height: 100vh;">
                        <img class="position-absolute w-100 h-100" src="img/client1.jpg" style="object-fit: cover;">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 900px;">
                                <div style="position: relative; text-align: center;">
                                    <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" id="sitelogo" style="letter-spacing: 3px;"><img class="position-absolute" src="img/sitename.png" style="object-fit: cover; height: 150px; width: auto; top: 0; left: 50%; transform: translateX(-50%); "><br></h6>
                                    <h3 class="display-3 text-capitalize text-white mb-3" style="margin-top: 120px;">Register</h3>
                                  </div>
                                  
                                  
                                <p class="mx-md-5 px-5">Register with us and enjoy the perks only members can fully enjoy. Your relaxation and pampering awaits.</p>
                                <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Sign up</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item position-relative" style="min-height: 100vh;">
                        <img class="position-absolute w-100 h-100" src="img/onboarding.jpg" style="object-fit: cover;">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 900px;">
                                <div style="position: relative; text-align: center;">
                                    <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;"><img class="position-absolute" src="img/sitename.png" style="object-fit: cover; height: 150px; width: auto; top: 0; left: 50%; transform: translateX(-50%); "><br></h6>
                                    <h3 class="display-3 text-capitalize text-white mb-3" style="margin-top: 120px;">Join the team!</h3>
                                  </div>
                                <p class="mx-md-5 px-5">Start an exciting career as a freelance specialist with us, a data-driven and service-focused company.</p>
                                <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Sign with us</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item position-relative" style="min-height: 100vh;">
                        <img class="position-absolute w-100 h-100" src="img/carousel-3.jpg" style="object-fit: cover;">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 900px;">
                                <div style="position: relative; text-align: center;">
                                    <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;"><img class="position-absolute" src="img/sitename.png" style="object-fit: cover; height: 150px; width: auto; top: 0; left: 50%; transform: translateX(-50%); "><br></h6>
                                    <h3 class="display-3 text-capitalize text-white mb-3" style="margin-top: 140px;">Massage Treatment</h3>
                                  </div>
                               
                                <p class="mx-md-5 px-5">Our licensed massage therapists offer custom therapeutic techniques to relieve stress and enhance overall well-being at the comfort of your home.</p>
                                <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Make Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- Carousel End -->
        
<!-- Content -->
        <!-- About Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="row align-items-center">
                    <div class="col-lg-6 pb-5 pb-lg-0">
                        <img class="img-fluid w-100" src="img/about.jpg" alt="">
                    </div>
                    <div class="col-lg-6">
                        <h6 class="d-inline-block text-primary text-uppercase bg-light py-1 px-2">Join Us</h6>
                        <h1 class="mb-4">Be a part of SPAce!</br> 
                           </h1>
                        <p class="pl-4 border-left border-primary">"Join our community of talented freelancers and clients today and discover endless opportunities to grow and succeed!"</p>
                        
                            <div class="row pt-3">
                                <div class="col-6">
                                    <div class="bg-light text-center p-4">
                                        <h4 class="text-uppercase">Be one of our<h3 class="display-4 text-primary" data-toggle="counter-up">99</h3>
                                        Spa Specialists!</h4>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="bg-light text-center p-4">
                                        <h4 class="text-uppercase">Be one of our<h3 class="display-4 text-primary" data-toggle="counter-up">999</h3>
                                         Happy Clients!</h4>
                                    </div>
                                </div>
                            </div>
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- How it works for clients-->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="row align-items-center">
                    <h6 class="d-block text-primary text-uppercase bg-light py-1 px-2">Membership</h6></br> 
                    <h1 style="text-align:center;"></br></br>Be a member!</h1>
                    <p class="pl-4 border-left border-primary">"Join our community of satisfied clients today and discover endless opportunities to enjoy multiple promotions and be the first to get notified of special offers and discounts with these 6 easy steps: <br> <span style="color: #dca56a; margin-left: 2.5rem;">(1) Sign up, (2) Book a service, (3) Receive confirmation, (4) Receive the service, (5) Pay for the service, (6) Rate and review"</span></p>
                    <div class="accordion">
                    <ul>
                        <li tabindex="1">
                        <div>
                            <a href="#">
                            <h2>Sign up</h2>
                            <p>Provide basic information:name, email address, and phone number.</p>
                            </a>
                        </div>
                        </li>
                        <li tabindex="2">
                        <div>
                            <a href="#">
                            <h2>Book a service</h2>
                            <p>Select a service, that can be filtered by location, availability, price, date, time and rating.</p>
                            </a>
                        </div>
                        </li>
                        <li tabindex="3">
                        <div>
                            <a href="#">
                            <h2>Receive confirmation</h2>
                            <p>Receive a confirmation via email or push notification. They will also be provided with the name and photo of the freelancer who will be providing the service.</p>
                            </a>
                        </div>
                        </li>
                        <li tabindex="4">
                        <div>
                            <a href="#">
                            <h2>Receive the service</h2>
                            <p>At the specified time and location, the freelancer will arrive to provide the requested service. The client should be ready and available to receive the service, and they should provide a comfortable and safe space for the freelancer to work.</p>
                            </a>
                        </div>
                        </li>
                        <li tabindex="5">
                        <div>
                            <a href="#">
                            <h2>Pay for the service</h2>
                            <p>After the service is provided, the client will be required to provide payment, such as cash, a credit card or PayPal account.</p>
                            </a>
                        </div>
                        </li>
                        <li tabindex="6">
                        <div>
                            <a href="#">
                            <h2>Rate and review</h2>
                            <p>After the service is completed, the client will have the opportunity to rate and review the freelancer. This helps to maintain accountability and transparency on the website</p>
                            </a>
                        </div>
                        </li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add an infographic -->

<!-- How it works for specialists-->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row align-items-center">
            <h6 class="d-block text-primary text-uppercase bg-light py-1 px-2">Onboarding</h6></br> 
            <h1 class="d-flex justify-content-center align-items-center" style="height: 200px;"></br></br>Join our team of specialists!</h1>
            <p class="pl-40 border-left border-primary">"Join our community of talented freelancers and clients today and discover endless opportunities to grow and succeed! <br> <span style="color: #dca56a; margin-left: 2.5rem;">(1) Sign up, (2) Get checked and approved, (3) Receive bookings, (4) Provide services, (5) Get paid, (6) Rate and review"</span></p>
            <div class="accordion">
            <ul>
                <li tabindex="1">
                <div>
                    <a href="#">
                        <h2>Sign up</h2>
                        <p>Provide basic information:name, email address, and phone number;  skills, experience, and qualifications. They should also upload a profile picture and any relevant certifications or licenses.</p>
                        </a>
                </div>
                </li>
                <li tabindex="2">
                <div>
                    <a href="#">
                    <h2>Background check</h2>
                    <p>Before being approved as a freelancer on the website, they should undergo a background check to ensure they meet the required standards.</p>
                    </a>
                </div>
                </li>
                <li tabindex="3">
                <div>
                    <a href="#">
                    <h2>Receive bookings</h2>
                    <p>Freelancers should be notified via email or push notification when a booking is made, and they should be able to accept or reject the booking based on their availability.</p>
                    </a>
                </div>
                </li>
                <li tabindex="4">
                <div>
                    <a href="#">
                    <h2>Provide services</h2>
                    <p> If the freelancer accepts a booking, they should provide the requested service at the specified time and location. They should also maintain a high level of professionalism and adhere to the spa's policies and procedures.</p>
                    </a>
                </div>
                </li>
                <li tabindex="5">
                <div>
                    <a href="#">
                    <h2>Get paid</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </a>
                </div>
                </li>
                <li tabindex="6">
                <div>
                    <a href="#">
                    <h2>Rate and review</h2>
                    <p>After the service is completed, both the client and freelancer should be given the opportunity to review and rate each other. This helps to maintain accountability and transparency on the website.</p>
                    </a>
                </div>
                </li>
            </ul>
            </div>
        </div>
    </div>
</div>
<!-- Add an infographic -->

    

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- How it works accordion -->

    

    <!-- Footer Start -->
    <div class="footer container-fluid position-relative py-5" style="margin-top: 90px; background-color: #2d4b5a;">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-6 pr-lg-5 mb-5">
                    <a href="index.html" class="navbar-brand">
                        <h1 class="mb-3 text-white" style="text-align: left !important;"><span class="text-primary">SPAce</span></h1>
                    </a>
                    <p><strong><i>"Your relaxation and pampering awaits."</i></strong></p>
                    <p><i class="fa fa-map-marker-alt mr-2"></i>WD Unit 38, QQB, Metro Manila, Philippines</p>
                    <p><i class="fa fa-phone-alt mr-2"></i>(02) 620 6789</p>
                    <p><i class="fa fa-envelope mr-2"></i>info@space.com</p>
                    <div class="d-flex justify-content-start mt-4">
                        <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="https://twitter.com/home"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="https://www.linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 pl-lg-5">
                    <div class="row">
                        <div class="col-sm-6 mb-5">
                            <h5 class="text-white text-uppercase mb-4">Quick Links</h5>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-white-50 mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Home</a>
                                <a class="text-white-50 mb-2" href="index.html#about"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                                <a class="text-white-50 mb-2" href="index.html#services"><i class="fa fa-angle-right mr-2"></i>Our Services</a>
                                <a class="text-white-50 mb-2" href="index.html#pricing"><i class="fa fa-angle-right mr-2"></i>Pricing Plan</a>
                                <a class="text-white-50" href="index.html#contact"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                                <a class="text-white-50" href="./onboarding.html"><i class="fa fa-angle-right mr-2 mt-2"></i>How it works</a>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-5">
                            <h5 class="text-white text-uppercase mb-4">Our Services</h5>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-white-50 mb-2" href="index.html#services"><i class="fa fa-angle-right mr-2"></i>Body Massage</a>
                                <a class="text-white-50 mb-2" href="index.html#services"><i class="fa fa-angle-right mr-2"></i>Stone Therapy</a>
                                <a class="text-white-50 mb-2" href="index.html#services"><i class="fa fa-angle-right mr-2"></i>Facial Therapy</a>
                                <a class="text-white-50 mb-2" href="index.html#services"><i class="fa fa-angle-right mr-2"></i>Skin Care</a>
                                <a class="text-white-50" href="index.html#services"><i class="fa fa-angle-right mr-2"></i>Stream Bath</a>
                                <a class="text-white-50" href="index.html#services"><i class="fa fa-angle-right mr-2  mt-2"></i>Face Masking</a>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-5">
                            <h5 class="text-white text-uppercase mb-4">Newsletter</h5>
                            <div class="w-100">
                                <div class="input-group">
                                    <input type="text" class="form-control border-light" style="padding: 30px;" placeholder="Your Email Address">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary px-4">Sign Up</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-light border-top py-4" style="border-color: rgba(256, 256, 256, .15) !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                    <p class="m-0 text-white">&copy; <a href="#">SPAce</a>. All Rights Reserved.</p>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
