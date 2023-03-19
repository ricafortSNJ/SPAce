<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payments</title>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
    integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
    crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
    integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
    crossorigin=""></script>

    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/creditcard.css">
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.payform.min.js" charset="utf-8"></script>
    <script src="assets/js/creditcard.js"></script>

    <style>
        @media (max-width: 20px) {
  img {
    max-width: 30%;
  }
}

img {
  max-width: 75%;
  height: auto;
}

#bg-video {
    position: absolute;
    right: 0;
    bottom: 0;
    min-width: 100%;
    min-height: 100%;
    z-index: 1;
  }
    </style>

</head>

<body>
  
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <img src="assets/imgs/sitenamedbg.png" alt="sitename"/>
                        </span>
                      
                    </a>
                </li>

                <li>
                    <a href="index.html">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="profile.html">
                        <span class="icon">
                            <ion-icon name="person-outline"></ion-icon>
                        </span>
                        <span class="title">Profile</span>
                    </a>
                </li>

                <li>
                    <a href="messaging.html">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Messages</span>
                    </a>
                </li>

                <li>
                    <a href="booking.html">
                        <span class="icon">
                            <ion-icon name="alarm-outline"></ion-icon>
                        </span>
                        <span class="title">Booking</span>
                    </a>
                </li>

                <li>
                    <a href="reviews.html">
                        <span class="icon">
                            <ion-icon name="star-outline"></ion-icon>
                        </span>
                        <span class="title">Reviews</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="cash-outline"></ion-icon>
                        </span>
                        <span class="title">Payment</span>
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
                    <img src="assets/imgs/che.jpg" alt="">
                </div>
            </div>

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
                        <div class="numbers">23</div>
                        <div class="cardName">Services</div>
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
                        <div class="numbers">₱1,111.50</div>
                        <div class="cardName">Rewards</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>

               
            </div>

            
            <div class="details d-flex">
                <div class="mapsNearU">
                    <div class="cardHeader">
                        <h2>Payment Form</h2>
                    </div>
                      
            <div class="col-lg-6 Yorder">
                
                                        <div class="creditCardForm">
                                            <div class="heading">
                                                <h1 class="confirm">Confirm Payment</h1>
                                            </div>
                                            <div class="payment">
                                                
                                                <form >
                                                    <div class="form-group owner">
                                                        <label for="owner">Owner</label><br>
                                                        <input type="text" class="form-control" id="owner">
                                                    </div><br>
                                                    <div class="form-group" id="card-number-field">
                                                        <label for="cardNumber">Card Number</label><br>
                                                        <input type="text" class="form-control" id="cardNumber">
                                                    </div><br>
                                                    <div class="form-group owner">
                                                        <label for="owner">CVV</label><br>
                                                        <input type="text" class="form-control" id="cvv">
                                                    </div><br>
                                                    
                                                    <div class="form-group" id="expiration-date">
                                                        <label>Expiration Date</label><br>
                                                        <select>
                                                            <option value="01">January</option>
                                                            <option value="02">February </option>
                                                            <option value="03">March</option>
                                                            <option value="04">April</option>
                                                            <option value="05">May</option>
                                                            <option value="06">June</option>
                                                            <option value="07">July</option>
                                                            <option value="08">August</option>
                                                            <option value="09">September</option>
                                                            <option value="10">October</option>
                                                            <option value="11">November</option>
                                                            <option value="12">December</option>
                                                        </select>
                                                        <select>
                                                            <option value="16"> 2016</option>
                                                            <option value="17"> 2017</option>
                                                            <option value="18"> 2018</option>
                                                            <option value="19"> 2019</option>
                                                            <option value="20"> 2020</option>
                                                            <option value="21"> 2021</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group" id="credit_cards" style="padding-right:30px;">
                                                        <img src="assets/imgs/visa.jpg" id="visa">
                                                        <img src="assets/imgs/mastercard.jpg" id="mastercard">
                                                        <img src="assets/imgs/amex.jpg" id="amex">
                                                    </div>
                                                    <div class="form-group" id="pay-now">
                                                        <button type="submit" class="btn " id="confirm-purchase">Confirm</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    
                                      
                                    </div>
                                   
                                    </div>
                        
                        
                                       
                        

                <!-- ================= Therapists ================ -->
                <div class="cardHeader" style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
                    <h2 style="text-align: center;"></h2>
                    <div style="display: flex; justify-content: center; align-items: center;">
                        <img src="assets/imgs/service-3.jpg" style="max-width: 100%; padding-right: 80px;" />
                    </div>
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