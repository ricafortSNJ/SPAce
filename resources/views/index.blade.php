<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="img/logoFinal.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- <link rel="stylesheet" href="./index.css"> -->
  <link href="{{ asset('css/index.css') }}" rel="stylesheet">
  <script src="index.js"></script>
  <script src="logout.js"></script>
  <style>
  
  </style>
  <title>SPAce</title>
</head>
<body>
      <!-- Navbar Start -->
    <div class="container-fluid p-0">
      <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5" >
          
          <a class="navbar-brand" href="#"><img src="img/logo.png"
              style="width: 60px" /></a>
              <h1 class="m-0">SPAce</h1>
          </a>
          <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
              <div class="navbar-nav m-auto py-0">
                  <a href="index.html" class="nav-item nav-link active">Home</a>
                  <a href="about.html" class="nav-item nav-link">About</a>
                  <a href="service.html" class="nav-item nav-link">Services</a>
                  <a href="price.html" class="nav-item nav-link">Pricing</a>
                  <div class="nav-item dropdown">
                      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                      <div class="dropdown-menu rounded-0 m-0">
                          <a href="appointment.html" class="dropdown-item">Appointment</a>
                          <a href="opening.html" class="dropdown-item">Open Hours</a>
                          <a href="team.html" class="dropdown-item">Our Team</a>
                          <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                      </div>
                  </div>
                  <a href="contact.html" class="nav-item nav-link">Contact</a>
              </div>
              <a href="" class="btn d-none d-lg-block" id="button">Book Now</a>
          </div>
      </nav>
  </div>
  <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5">
      <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
          <ol class="carousel-indicators">
              <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
              <li data-target="#header-carousel" data-slide-to="1"></li>
              <li data-target="#header-carousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
              <div class="carousel-item position-relative active" style="min-height: 100vh;">
                  <img class="position-absolute w-100 h-100" src="img/massage.jpg" style="object-fit: cover;">
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
                  <img class="position-absolute w-100 h-100" src="img/facial.avif" style="object-fit: cover;">
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
                  <img class="position-absolute w-100 h-100" src="img/cellulite.jpg" style="object-fit: cover;">
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

   <!-- About Start -->
   <div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 pb-5 pb-lg-0">
                <img class="img-fluid w-100" src="img/about.jpeg" alt="">
            </div>
            <div class="col-lg-6">
                <h6 class="d-inline-block text-primary text-uppercase bg-light py-1 px-2">About Us</h6>
                <h1 class="mb-4">Your Best Spa, Beauty & Skin Care Center</h1>
                <p class="pl-4 border-left border-primary">Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam dolore sed et. Sit rebum labore sit sit ut vero no sit. Et elitr stet dolor sed sit et sed ipsum et kasd erat duo eos et erat</p>
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
 <!-- Service Start -->
 <div class="container-fluid px-0 py-5 my-5">
  <div class="row mx-0 justify-content-center text-center">
      <div class="col-lg-6">
          <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">Our Service</h6>
          <h1>Spa & Beauty Services</h1>
      </div>
  </div>
  <div class="owl-carousel service-carousel">
      <div class="service-item position-relative">
          <img class="img-fluid" src="img/service-1.jpg" alt="">
          <div class="service-text text-center">
              <h4 class="text-white font-weight-medium px-3">Body Massage</h4>
              <p class="text-white px-3 mb-3">Elitr labore sit dolor erat est lorem diam sea ipsum diam dolor duo sit ipsum</p>
              <div class="w-100 bg-white text-center p-4" >
                  <a class="btn btn-primary" href="">Make Order</a>
              </div>
          </div>
      </div>
      <div class="service-item position-relative">
          <img class="img-fluid" src="img/service-2.jpg" alt="">
          <div class="service-text text-center">
              <h4 class="text-white font-weight-medium px-3">Stone Therapy</h4>
              <p class="text-white px-3 mb-3">Elitr labore sit dolor erat est lorem diam sea ipsum diam dolor duo sit ipsum</p>
              <div class="w-100 bg-white text-center p-4" >
                  <a class="btn btn-primary" href="">Make Order</a>
              </div>
          </div>
      </div>
      <div class="service-item position-relative">
          <img class="img-fluid" src="img/service-3.jpg" alt="">
          <div class="service-text text-center">
              <h4 class="text-white font-weight-medium px-3">Facial Therapy</h4>
              <p class="text-white px-3 mb-3">Elitr labore sit dolor erat est lorem diam sea ipsum diam dolor duo sit ipsum</p>
              <div class="w-100 bg-white text-center p-4" >
                  <a class="btn btn-primary" href="">Make Order</a>
              </div>
          </div>
      </div>
      <div class="service-item position-relative">
          <img class="img-fluid" src="img/service-4.jpg" alt="">
          <div class="service-text text-center">
              <h4 class="text-white font-weight-medium px-3">Skin Care</h4>
              <p class="text-white px-3 mb-3">Elitr labore sit dolor erat est lorem diam sea ipsum diam dolor duo sit ipsum</p>
              <div class="w-100 bg-white text-center p-4" >
                  <a class="btn btn-primary" href="">Make Order</a>
              </div>
          </div>
      </div>
      <div class="service-item position-relative">
          <img class="img-fluid" src="img/service-5.jpg" alt="">
          <div class="service-text text-center">
              <h4 class="text-white font-weight-medium px-3">Stream Bath</h4>
              <p class="text-white px-3 mb-3">Elitr labore sit dolor erat est lorem diam sea ipsum diam dolor duo sit ipsum</p>
              <div class="w-100 bg-white text-center p-4" >
                  <a class="btn btn-primary" href="">Make Order</a>
              </div>
          </div>
      </div>
      <div class="service-item position-relative">
          <img class="img-fluid" src="img/service-6.jpg" alt="">
          <div class="service-text text-center">
              <h4 class="text-white font-weight-medium px-3">Face Masking</h4>
              <p class="text-white px-3 mb-3">Elitr labore sit dolor erat est lorem diam sea ipsum diam dolor duo sit ipsum</p>
              <div class="w-100 bg-white text-center p-4" >
                  <a class="btn btn-primary" href="">Make Order</a>
              </div>
          </div>
      </div>
  </div>
  <div class="row justify-content-center bg-appointment mx-0">
      <div class="col-lg-6 py-5">
          <div class="p-5 my-5" style="background: rgba(33, 30, 28, 0.7);">
              <h1 class="text-white text-center mb-4">Make Appointment</h1>
              <form>
                  <div class="form-row">
                      <div class="col-sm-6">
                          <div class="form-group">
                              <input type="text" class="form-control bg-transparent p-4" placeholder="Your Name" required="required" />
                          </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="form-group">
                              <input type="email" class="form-control bg-transparent p-4" placeholder="Your Email" required="required" />
                          </div>
                      </div>
                  </div>
                  <div class="form-row">
                      <div class="col-sm-6">
                          <div class="form-group">
                              <div class="date" id="date" data-target-input="nearest">
                                  <input type="text" class="form-control bg-transparent p-4 datetimepicker-input" placeholder="Select Date" data-target="#date" data-toggle="datetimepicker"/>
                              </div>
                          </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="form-group">
                              <div class="time" id="time" data-target-input="nearest">
                                  <input type="text" class="form-control bg-transparent p-4 datetimepicker-input" placeholder="Select Time" data-target="#time" data-toggle="datetimepicker"/>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="form-row">
                      <div class="col-sm-6">
                          <div class="form-group">
                              <select class="custom-select bg-transparent px-4" style="height: 47px;">
                                  <option selected>Select A Service</option>
                                  <option value="1">Service 1</option>
                                  <option value="2">Service 1</option>
                                  <option value="3">Service 1</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-sm-6">
                          <button class="btn btn-primary btn-block" type="submit" style="height: 47px;">Make Appointment</button>
                      </div>
                  </div>
              </form>
          </div>
      </div>
  </div>
</div>
<!-- Service End -->


<!-- Open Hours Start -->
<div class="container-fluid py-5">
  <div class="container py-5">
      <div class="row">
          <div class="col-lg-6" style="min-height: 500px;">
              <div class="position-relative h-100">
                  <img class="position-absolute w-100 h-100" src="img/opening.jpg" style="object-fit: cover;">
              </div>
          </div>
          <div class="col-lg-6 pt-5 pb-lg-5">
              <div class="hours-text bg-light p-4 p-lg-5 my-lg-5">
                  <h6 class="d-inline-block text-white text-uppercase bg-primary py-1 px-2">Open Hours</h6>
                  <h1 class="mb-4">Best Relax And Spa Zone</h1>
                  <p>Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam dolore sed et. Sit rebum labore sit sit ut vero no sit. Et elitr stet dolor sed sit et sed ipsum et kasd ut. Erat duo eos et erat sed diam duo</p>
                  <ul class="list-inline">
                      <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Mon – Fri : 9:00 AM - 7:00 PM</li>
                      <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Saturday : 9:00 AM - 6:00 PM</li>
                      <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Sunday : Closed</li>
                  </ul>
                  <a href="" class="btn btn-primary mt-2">Book Now</a>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Open Hours End -->


<!-- Pricing Start -->
<div class="container-fluid bg-pricing" style="margin: 90px 0;">
  <div class="container">
      <div class="row">
          <div class="col-lg-5" style="min-height: 500px;">
              <div class="position-relative h-100">
                  <img class="position-absolute w-100 h-100" src="img/pricing.jpg" style="object-fit: cover;">
              </div>
          </div>
          <div class="col-lg-7 pt-5 pb-lg-5">
              <div class="pricing-text bg-light p-4 p-lg-5 my-lg-5">
                  <div class="owl-carousel pricing-carousel">
                      <div class="bg-white">
                          <div class="d-flex align-items-center justify-content-between border-bottom border-primary p-4">
                              <h1 class="display-4 mb-0">
                                  <small class="align-top text-muted font-weight-medium" style="font-size: 22px; line-height: 45px;">$</small>49<small class="align-bottom text-muted font-weight-medium" style="font-size: 16px; line-height: 40px;">/Mo</small>
                              </h1>
                              <h5 class="text-primary text-uppercase m-0">Basic Plan</h5>
                          </div>
                          <div class="p-4">
                              <p><i class="fa fa-check text-success mr-2"></i>Full Body Massage</p>
                              <p><i class="fa fa-check text-success mr-2"></i>Deep Tissue Massage</p>
                              <p><i class="fa fa-check text-success mr-2"></i>Hot Stone Massage</p>
                              <p><i class="fa fa-check text-success mr-2"></i>Tissue Body Polish</p>
                              <p><i class="fa fa-check text-success mr-2"></i>Foot & Nail Care</p>
                              <a href="" class="btn btn-primary my-2">Order Now</a>
                          </div>
                      </div>
                      <div class="bg-white">
                          <div class="d-flex align-items-center justify-content-between border-bottom border-primary p-4">
                              <h1 class="display-4 mb-0">
                                  <small class="align-top text-muted font-weight-medium" style="font-size: 22px; line-height: 45px;">$</small>99<small class="align-bottom text-muted font-weight-medium" style="font-size: 16px; line-height: 40px;">/Mo</small>
                              </h1>
                              <h5 class="text-primary text-uppercase m-0">Family Plan</h5>
                          </div>
                          <div class="p-4">
                              <p><i class="fa fa-check text-success mr-2"></i>Full Body Massage</p>
                              <p><i class="fa fa-check text-success mr-2"></i>Deep Tissue Massage</p>
                              <p><i class="fa fa-check text-success mr-2"></i>Hot Stone Massage</p>
                              <p><i class="fa fa-check text-success mr-2"></i>Tissue Body Polish</p>
                              <p><i class="fa fa-check text-success mr-2"></i>Foot & Nail Care</p>
                              <a href="" class="btn btn-primary my-2">Order Now</a>
                          </div>
                      </div>
                      <div class="bg-white">
                          <div class="d-flex align-items-center justify-content-between border-bottom border-primary p-4">
                              <h1 class="display-4 mb-0">
                                  <small class="align-top text-muted font-weight-medium" style="font-size: 22px; line-height: 45px;">$</small>149<small class="align-bottom text-muted font-weight-medium" style="font-size: 16px; line-height: 40px;">/Mo</small>
                              </h1>
                              <h5 class="text-primary text-uppercase m-0">VIP Plan</h5>
                          </div>
                          <div class="p-4">
                              <p><i class="fa fa-check text-success mr-2"></i>Full Body Massage</p>
                              <p><i class="fa fa-check text-success mr-2"></i>Deep Tissue Massage</p>
                              <p><i class="fa fa-check text-success mr-2"></i>Hot Stone Massage</p>
                              <p><i class="fa fa-check text-success mr-2"></i>Tissue Body Polish</p>
                              <p><i class="fa fa-check text-success mr-2"></i>Foot & Nail Care</p>
                              <a href="" class="btn btn-primary my-2">Order Now</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Pricing End -->


<!-- Team Start -->
<div class="container-fluid py-5">
  <div class="container pt-5">
      <div class="row justify-content-center text-center">
          <div class="col-lg-6">
              <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">Spa Specialist</h6>
              <h1 class="mb-5">Spa & Beauty Specialist</h1>
          </div>
      </div>
      <div class="row">
          <div class="col-lg-3 col-md-6">
              <div class="team position-relative overflow-hidden mb-5">
                  <img class="img-fluid" src="img/team-1.jpg" alt="">
                  <div class="position-relative text-center">
                      <div class="team-text bg-primary text-white">
                          <h5 class="text-white text-uppercase">Olivia Mia</h5>
                          <p class="m-0">Spa & Beauty Expert</p>
                      </div>
                      <div class="team-social bg-dark text-center">
                          <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                          <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                          <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                          <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-6">
              <div class="team position-relative overflow-hidden mb-5">
                  <img class="img-fluid" src="img/team-2.jpg" alt="">
                  <div class="position-relative text-center">
                      <div class="team-text bg-primary text-white">
                          <h5 class="text-white text-uppercase">Cory Brown</h5>
                          <p class="m-0">Spa & Beauty Expert</p>
                      </div>
                      <div class="team-social bg-dark text-center">
                          <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                          <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                          <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                          <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-6">
              <div class="team position-relative overflow-hidden mb-5">
                  <img class="img-fluid" src="img/team-3.jpg" alt="">
                  <div class="position-relative text-center">
                      <div class="team-text bg-primary text-white">
                          <h5 class="text-white text-uppercase">Elizabeth Ross</h5>
                          <p class="m-0">Spa & Beauty Expert</p>
                      </div>
                      <div class="team-social bg-dark text-center">
                          <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                          <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                          <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                          <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-6">
              <div class="team position-relative overflow-hidden mb-5">
                  <img class="img-fluid" src="img/team-4.jpg" alt="">
                  <div class="position-relative text-center">
                      <div class="team-text bg-primary text-white">
                          <h5 class="text-white text-uppercase">Kelly Walke</h5>
                          <p class="m-0">Spa & Beauty Expert</p>
                      </div>
                      <div class="team-social bg-dark text-center">
                          <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                          <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                          <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                          <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Team End -->


<!-- Testimonial Start -->
<div class="container-fluid py-5">
  <div class="container py-5">
      <div class="row align-items-center">
          <div class="col-lg-6 pb-5 pb-lg-0">
              <img class="img-fluid w-100" src="img/testimonial.jpg" alt="">
          </div>
          <div class="col-lg-6">
              <h6 class="d-inline-block text-primary text-uppercase bg-light py-1 px-2">Testimonial</h6>
              <h1 class="mb-4">What Our Clients Say!</h1>
              <div class="owl-carousel testimonial-carousel">
                  <div class="position-relative">
                      <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                      <div class="d-flex align-items-center mb-3">
                          <img class="img-fluid rounded-circle" src="img/testimonial-1.jpg" style="width: 60px; height: 60px;" alt="">
                          <div class="ml-3">
                              <h6 class="text-uppercase">Client Name</h6>
                              <span>Profession</span>
                          </div>
                      </div>
                      <p class="m-0">Aliquyam sed elitr elitr erat sed diam ipsum eirmod eos lorem nonumy. Tempor sea ipsum diam  sed clita dolore eos dolores magna erat dolore sed stet justo et dolor.</p>
                  </div>
                  <div class="position-relative">
                      <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                      <div class="d-flex align-items-center mb-3">
                          <img class="img-fluid rounded-circle" src="img/testimonial-2.jpg" style="width: 60px; height: 60px;" alt="">
                          <div class="ml-3">
                              <h6 class="text-uppercase">Client Name</h6>
                              <span>Profession</span>
                          </div>
                      </div>
                      <p class="m-0">Aliquyam sed elitr elitr erat sed diam ipsum eirmod eos lorem nonumy. Tempor sea ipsum diam  sed clita dolore eos dolores magna erat dolore sed stet justo et dolor.</p>
                  </div>
                  <div class="position-relative">
                      <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                      <div class="d-flex align-items-center mb-3">
                          <img class="img-fluid rounded-circle" src="img/testimonial-3.jpg" style="width: 60px; height: 60px;" alt="">
                          <div class="ml-3">
                              <h6 class="text-uppercase">Client Name</h6>
                              <span>Profession</span>
                          </div>
                      </div>
                      <p class="m-0">Aliquyam sed elitr elitr erat sed diam ipsum eirmod eos lorem nonumy. Tempor sea ipsum diam  sed clita dolore eos dolores magna erat dolore sed stet justo et dolor.</p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Testimonial End -->


<!-- Footer Start -->
<div class="footer container-fluid position-relative bg-dark py-5" style="margin-top: 90px;">
  <div class="container pt-5">
      <div class="row">
          <div class="col-lg-6 pr-lg-5 mb-5">
              <a href="index.html" class="navbar-brand">
                  <h1 class="mb-3 text-white"><span class="text-primary">SPA</span> Center</h1>
              </a>
              <p>Aliquyam sed elitr elitr erat sed diam ipsum eirmod eos lorem nonumy. Tempor sea ipsum diam  sed clita dolore eos dolores magna erat dolore sed stet justo et dolor.</p>
              <p><i class="fa fa-map-marker-alt mr-2"></i>123 Street, New York, USA</p>
              <p><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
              <p><i class="fa fa-envelope mr-2"></i>info@example.com</p>
              <div class="d-flex justify-content-start mt-4">
                  <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                  <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                  <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                  <a class="btn btn-lg btn-primary btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
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
              <p class="m-0 text-white">&copy; <a href="#">Your Site Name</a>. All Rights Reserved.</p>
          </div>
          <div class="col-md-6 text-center text-md-right">
              <p class="m-0 text-white">Designed by <a href="https://htmlcodex.com">HTML Codex</a></p>
          </div>
      </div>
  </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>




</body>
</html>