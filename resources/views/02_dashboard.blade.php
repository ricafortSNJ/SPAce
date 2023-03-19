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
    <link rel="stylesheet" href="/2_assets/css/style.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
    @include("layouts/02_nav")

        <!-- ========================= Main ==================== -->
        <div class="main">
        @include("layouts/02_topbar")

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

                <!-- <div class="card">
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
                </div> -->
            </div>

            <!-- ================ Map ================= -->
            
            <div class="details">
                <div class="mapsNearU">
                    <div class="cardHeader">
                        <h2>Let's find a Therapist near you.</h2>
                        <a href="#" class="btn">View All</a>
                    </div>

                    
                        <div class="searchMap">
                            <form>
                            
                              <div class="wrapper">
                                <div class="search-container">
                                    <select class="w3-select w3-border" name="option">
                                        <option value="" disabled selected>Expertise</option>
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                      </select> <br/>
                                      <select class="w3-select w3-border" name="option">
                                        <option value="" disabled selected>Rates</option>
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                      </select> <br/>
                                      <select class="w3-select w3-border" name="option">
                                        <option value="" disabled selected>Search for location</option>
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                      </select>
                                 
                                  <button type="submit" class="button" style="text-align: right;">Search</button>
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

                <!-- ================= Therapists ================ -->
                <div class="therapists">
                    <div class="cardHeader">
                        <h2>Therapist</h2>
                    </div>

                    <table>
                        <tr>
                            <td width="80px">
                              <div class="imgBx"><img src="/2_assets/imgs/f2.jpg" alt=""></div>
                            </td>
                            <td  width="250px">
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
                            <!-- </tr>
                            <tr> -->
                                <td>
                                <div class="icons">
                                  <button class="btn" style="margin-left: 10px;"><i class="las la-user-circle"></i></button>
                                  <span style="margin-left: 10px;">    </span>
                                  <button class="btn"><i class="las la-comment"></i></button>
                                  <button class="btn book-now">Book Now</button>
                                </div>
                              </div>
                            </td>
                        </tr>
                          

                        <tr>
                            <td width="60px">
                              <div class="imgBx"><img src="/2_assets/imgs/f2.jpg" alt=""></div>
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
                            <!-- </tr>
                            <tr> -->
                                <td>
                                <div class="icons">
                                  <button class="btn" style="margin-left: 10px;"><i class="las la-user-circle"></i></button>
                                  <span style="margin-left: 10px;">    </span>
                                  <button class="btn"><i class="las la-comment"></i></button>
                                  <button class="btn book-now">Book Now</button>
                                </div>
                              </div>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                              <div class="imgBx"><img src="/2_assets/imgs/f2.jpg" alt=""></div>
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
                            <!-- </tr>
                            <tr> -->
                                <td>
                                <div class="icons">
                                  <button class="btn" style="margin-left: 10px;"><i class="las la-user-circle"></i></button>
                                  <span style="margin-left: 10px;">    </span>
                                  <button class="btn"><i class="las la-comment"></i></button>
                                  <button class="btn book-now">Book Now</button>
                                </div>
                              </div>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                              <div class="imgBx"><img src="/2_assets/imgs/f2.jpg" alt=""></div>
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
                            <!-- </tr>
                            <tr> -->
                                <td>
                                <div class="icons">
                                  <button class="btn" style="margin-left: 10px;"><i class="las la-user-circle"></i></button>
                                  <span style="margin-left: 10px;">    </span>
                                  <button class="btn"><i class="las la-comment"></i></button>
                                  <button class="btn book-now">Book Now</button>
                                </div>
                              </div>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                              <div class="imgBx"><img src="/2_assets/imgs/f2.jpg" alt=""></div>
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
                            <!-- </tr>
                            <tr> -->
                                <td>
                                <div class="icons">
                                  <button class="btn" style="margin-left: 10px;"><i class="las la-user-circle"></i></button>
                                  <span style="margin-left: 10px;">    </span>
                                  <button class="btn"><i class="las la-comment"></i></button>
                                  <button class="btn book-now">Book Now</button>
                                </div>
                              </div>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                              <div class="imgBx"><img src="/2_assets/imgs/f2.jpg" alt=""></div>
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
                            <!-- </tr>
                            <tr> -->
                                <td>
                                <div class="icons">
                                  <button class="btn" style="margin-left: 10px;"><i class="las la-user-circle"></i></button>
                                  <span style="margin-left: 10px;">    </span>
                                  <button class="btn"><i class="las la-comment"></i></button>
                                  <button class="btn book-now">Book Now</button>
                                </div>
                              </div>
                            </td>
                        </tr>

                        
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="/2_assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>