<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
    integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
    crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
    integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
    crossorigin=""></script>

    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets_u/css/style.css">
</head>

<body>

@include("layouts/user_nav")
    

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
                    <img src="assets_u/imgs/che.jpg" alt="">
                </div>
            </div>

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">1,504</div>
                        <div class="cardName">Monthly Active Users</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">80</div>
                        <div class="cardName">Products</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cart-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">284</div>
                        <div class="cardName">Testimonials</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">$11.50</div>
                        <div class="cardName">Rewards</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">1</div>
                        <div class="cardName">Appointment</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="alarm-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">5</div>
                        <div class="cardName">Services</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="diamond-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">5</div>
                        <div class="cardName">Packages</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="layers-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">0</div>
                        <div class="cardName">Gift Cards</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="gift-outline"></ion-icon>
                    </div>
                </div>
            </div>

            <!-- ================ Map ================= -->
            <div class="details">
                <div class="mapsNearU">
                    <div class="cardHeader">
                        <h2>Let's find a Therapist near you.</h2>
                        <a href="#" class="btn">View All</a>
                    </div>

                    <div class="container">
                        <div class="searchMap">
                            <form>
                            
                              <div class="wrapper">
                                <div class="search-container">
                                  <input type="text" class="expertise" placeholder="Expertise">
                                  <input type="text" class="rates" placeholder="Rates">
                                  <input type="text" class="Location" placeholder="Search for location">
                                  <button type="submit" class="button">Search</button>
                                </div>
                              </div>
                              
                              
                            </form>
                              
                            
                        </div>
                        <div id="map"></div>
                            <div>
		                        <label>Search within:</label>
                                    <button id="search-button-5km" class="btn">5 km</button>
                                    <button id="search-button-10km" class="btn">10 km</button>
                                    <button id="search-button-15km" class="btn">15 km</button>
                                    <button id="search-button-20km" class="btn">20 km</button>
	                        </div>
                        </div>
                    </div>

                <!-- ================= Therapists ================ -->
                <div class="therapists">
                    <div class="cardHeader">
                        <h2>Therapist</h2>
                    </div>

                    <table>
                        <tr>
                            <td width="60px">
                              <div class="imgBx"><img src="assets_u/imgs/f2.jpg" alt=""></div>
                            </td>
                            <td>
                              <div class="info-container">
                                <h4>Maryjane <br /> 
                                  <span>Taguig City</span>
                                  <br>
                                  <small>Expertise: [expertise]</small>
                                  <br>
                                  <small>Rates: [rates]</small>
                                  <br>
                                  <small>Location: [location]</small>
                                </h4>
                                <div class="icons">
                                  <button class="btn"><i class="las la-user-circle"></i></button>
                                  <button class="btn"><i class="las la-comment"></i></button>
                                  <button class="btn book-now">Book Now</button>
                                </div>
                              </div>
                            </td>
                        </tr>
                          

                        <tr>
                            <td width="60px">
                              <div class="imgBx"><img src="assets_u/imgs/f1.jpg" alt=""></div>
                            </td>
                            <td>
                              <h4>Violet <br /> 
                                <span>Quezon City</span>
                              </h4>
                              <div class="icons">
                                <button class="btn"><i class="las la-user-circle"></i></button>
                                <button class="btn"><i class="las la-comment"></i></button>
                                <button class="btn"><i class="las la-phone"></i></button>
                                <button class="btn book-now">Book Now</button>
                              </div>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                              <div class="imgBx"><img src="assets_u/imgs/f2.jpg" alt=""></div>
                            </td>
                            <td>
                              <h4>Maryjane <br /> 
                                <span>Taguig City</span>
                              </h4>
                              <div class="icons">
                                <button class="btn"><i class="las la-user-circle"></i></button>
                                <button class="btn"><i class="las la-comment"></i></button>
                                <button class="btn"><i class="las la-phone"></i></button>
                                <button class="btn book-now">Book Now</button>
                              </div>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                              <div class="imgBx"><img src="assets_u/imgs/f1.jpg" alt=""></div>
                            </td>
                            <td>
                              <h4>Violet <br /> 
                                <span>Quezon City</span>
                              </h4>
                              <div class="icons">
                                <button class="btn"><i class="las la-user-circle"></i></button>
                                <button class="btn"><i class="las la-comment"></i></button>
                                <button class="btn"><i class="las la-phone"></i></button>
                                <button class="btn book-now">Book Now</button>
                              </div>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                              <div class="imgBx"><img src="assets_u/imgs/f2.jpg" alt=""></div>
                            </td>
                            <td>
                              <h4>Maryjane <br /> 
                                <span>Taguig City</span>
                              </h4>
                              <div class="icons">
                                <button class="btn"><i class="las la-user-circle"></i></button>
                                <button class="btn"><i class="las la-comment"></i></button>
                                <button class="btn"><i class="las la-phone"></i></button>
                                <button class="btn book-now">Book Now</button>
                              </div>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                              <div class="imgBx"><img src="assets_u/imgs/f1.jpg" alt=""></div>
                            </td>
                            <td>
                              <h4>Violet <br /> 
                                <span>Quezon City</span>
                              </h4>
                              <div class="icons">
                                <button class="btn"><i class="las la-user-circle"></i></button>
                                <button class="btn"><i class="las la-comment"></i></button>
                                <button class="btn"><i class="las la-phone"></i></button>
                                <button class="btn book-now">Book Now</button>
                              </div>
                            </td>
                        </tr>

                        
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="assets_u/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>