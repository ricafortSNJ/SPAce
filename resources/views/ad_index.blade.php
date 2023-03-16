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
    <link rel="stylesheet" href="assets/css/style.css">
    
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
</head>

<body>
    <!-- =============== Navigation ================ -->
    
    @include("layouts/navbar_ad")

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
                    <img src="assets/imgs/adminprofile.jpg" alt="">
                </div>
            </div>

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">2,131</div>
                        <div class="cardName">Monthly Active Users</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">20x</div>
                        <div class="cardName">Services</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cart-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">23</div>
                        <div class="cardName">Reviews</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">₱1,311,998</div>
                        <div class="cardName">Revenue</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">214</div>
                        <div class="cardName">Bookings</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="alarm-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">322</div>
                        <div class="cardName">Vouchers</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="diamond-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">69</div>
                        <div class="cardName">Pending applications</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="layers-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">420</div>
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
                  <h2>Pending applications</h2>
                    <table>
                        <tr>
                            <td width="60px">
                              <div class="imgBx"><img src="assets/imgs/f2.jpg" alt=""></div>
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
                              <div class="imgBx"><img src="assets/imgs/f1.jpg" alt=""></div>
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
                              <div class="imgBx"><img src="assets/imgs/f2.jpg" alt=""></div>
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
                              <div class="imgBx"><img src="assets/imgs/f1.jpg" alt=""></div>
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
                              <div class="imgBx"><img src="assets/imgs/f2.jpg" alt=""></div>
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
                              <div class="imgBx"><img src="assets/imgs/f1.jpg" alt=""></div>
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

                <!-- ================= Therapists ================ -->
                <div class="therapists">
                    <div class="cardHeader">
                        <h2>Support tickets</h2>

                    </div>

                    <table>
                        <tr>
                            <td width="60px">
                              <div class="imgBx"><img src="assets/imgs/f2.jpg" alt=""></div>
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
                              <div class="imgBx"><img src="assets/imgs/f1.jpg" alt=""></div>
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
                              <div class="imgBx"><img src="assets/imgs/f2.jpg" alt=""></div>
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
                              <div class="imgBx"><img src="assets/imgs/f1.jpg" alt=""></div>
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
                              <div class="imgBx"><img src="assets/imgs/f2.jpg" alt=""></div>
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
                              <div class="imgBx"><img src="assets/imgs/f1.jpg" alt=""></div>
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
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>