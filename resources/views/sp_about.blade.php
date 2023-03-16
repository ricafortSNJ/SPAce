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
                  style="height: auto; width: 50px; padding-bottom: 5px;" /></a>
                  <a href="#home"><img src="img/space.png"
                    style="height: auto; width: 90px; padding-bottom: 20px;" /></a>
            </div>
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Testimonial</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">How it works</a></li>
                </ul>
            </div>
            <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </div>
    </nav>

<!-- Carousel -->
    <div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="min-height: 100vh;">
                    <img class="position-absolute w-100 h-100" src="img/carousel-1.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">Spa & Beauty Center</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">Massage Treatment</h3>
                            <p class="mx-md-5 px-5">Our licensed massage therapists offer custom therapeutic techniques to relieve stress, alleviate pain, improve mobility and enhance overall well-being in a comfortable and welcoming environment.</p>
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Make Appointment</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="min-height: 100vh;">
                    <img class="position-absolute w-100 h-100" src="img/carousel-2.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">Spa & Beauty Center</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">Facial Treatment</h3>
                            <p class="mx-md-5 px-5">Our facial treatment nourishes, revitalizes, and enhances the overall appearance of your skin, leaving you with a healthy and glowing complexion.</p>
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Make Appointment</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="min-height: 100vh;">
                    <img class="position-absolute w-100 h-100" src="img/carousel-3.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">Spa & Beauty Center</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">Cellulite Treatment</h3>
                            <p class="mx-md-5 px-5">Our cellulite treatment reduces the appearance of cellulite, improves skin texture, and promotes a smoother, more toned appearance.</p>
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Make Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                        <h6 class="d-inline-block text-primary text-uppercase bg-light py-1 px-2">About Us</h6>
                        <h1 class="mb-4">The ultimate spa experience,</br> 
                            wherever you are</h1>
                        <p class="pl-4 border-left border-primary">With SPAce, pampering can be on demand. Now, the ultimate spa experience can be experienced wherever you are we bring relaxation to you.</p>
                        <div class="row pt-3">
                            <div class="col-6">
                                <div class="bg-light text-center p-4">
                                    <h3 class="display-4 text-primary" data-toggle="counter-up">99</h3>
                                    <h6 class="text-uppercase">Spa Specialist</h6>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="bg-light text-center p-4">
                                    <h3 class="display-4 text-primary" data-toggle="counter-up">999</h3>
                                    <h6 class="text-uppercase">Happy Clients</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- How it works-->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="row align-items-center">
                    <div class="col-lg-6 pb-5 pb-lg-0">
                        <img class="img-fluid w-100" src="img/about.jpg" alt="">
                    </div>
                    <div class="col-lg-6">
                        <h6 class="d-inline-block text-primary text-uppercase bg-light py-1 px-2">Onboarding</h6>
                        <h1 class="mb-4">How it works?</br> 
                        </h1>
                        <p class="pl-4 border-left border-primary">
                            <ul>
                            Welcome to our spa website! We're glad you're here.

                            Have you ever used Uber? Our spa works in a similar way. Here's how it works:
                            
                            <li>First, you'll need to create an account on our website. You'll provide some basic information about yourself, including your name, email address, and phone number.</li>
                            
                            <li>Once you've created an account, you can browse our selection of spa services. We offer a wide range of treatments, from massages to facials to body scrubs. You can read detailed descriptions of each service and see pricing information.</li>
                            
                            <li>When you're ready to book a service, simply select the one you want and choose a date and time that works for you. You'll also have the option to choose a specific therapist, if you have a preference.</li>
                            
                            <li>Once you've made your booking, you'll receive a confirmation email with all the details. You can also log in to your account at any time to view your upcoming appointments.</li>
                            
                            <li>On the day of your appointment, your therapist will arrive at your location (whether that's your home, office, or another location of your choice). They'll bring all the necessary equipment and supplies, so all you need to do is relax and enjoy your treatment.</li>
                            
                            <li>When your treatment is complete, your therapist will clean up and pack up their equipment. You'll pay for your service through our website, using a credit or debit card.</li>
                            
                            That's it! We hope you enjoy your experience with our spa. If you have any questions or concerns, please don't hesitate to contact us.
                        </ul>
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Add an infographic -->





    <!-- Footer Start -->
    <div class="footer container-fluid position-relative py-5" style="margin-top: 90px; background-color: #2d4b5a;">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-6 pr-lg-5 mb-5">
                    <a href="index.html" class="navbar-brand">
                        <h1 class="mb-3 text-white"><span class="text-primary">SPAce</span></h1>
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
                                <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                                <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                                <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Services</a>
                                <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Pricing Plan</a>
                                <a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-5">
                            <h5 class="text-white text-uppercase mb-4">Our Services</h5>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Body Massage</a>
                                <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Stone Therapy</a>
                                <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Facial Therapy</a>
                                <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Skin Care</a>
                                <a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i>Nail Care</a>
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


   
</body>

</html>
