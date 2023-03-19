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

    
    <link rel="stylesheet" href="/2_assets/css/style.css">
    <link rel="stylesheet" href="/2_assets/css/creditcard.css">
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="/2_assets/js/jquery.payform.min.js" charset="utf-8"></script>
    <script src="/2_assets/js/creditcard.js"></script>

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
        
    @include("layouts/02_nav")

  
        <div class="main">
            @include("layouts/02_topbar")

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
                                            
                                            @foreach ($booking as $b)
                                            <form action="/02_pay/{{$b->booking_id}}" method="POST">
                                            @csrf
                                                    <div class="form-group owner">
                                                        <label for="owner">Owner</label><br>
                                                        <input type="text" class="form-control" name="owner">
                                                    </div><br>
                                                    <div class="form-group" id="card-number-field">
                                                        <label for="cardNumber">Card Number</label><br>
                                                        <input type="text" class="form-control" name="card_number">
                                                    </div><br>
                                                    <div class="form-group owner">
                                                        <label for="owner">CVV</label><br>
                                                        <input type="text" class="form-control" name="cvv">
                                                    </div><br>
                                                    
                                                    <div class="form-group" id="expiration-date">
                                                        <label>Expiration Date</label><br>
                                                        <select name="month">
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
                                                        <select name="year">
                                                            <option value="23"> 2023</option>
                                                            <option value="24"> 2024</option>
                                                            <option value="25"> 2025</option>
                                                            <option value="26"> 2026</option>
                                                            <option value="27"> 2027</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group" id="credit_cards" style="padding-right:30px;">
                                                        <img src="/2_assets/imgs/visa.jpg" id="visa">
                                                        <img src="/2_assets/imgs/mastercard.jpg" id="mastercard">
                                                        <img src="/2_assets/imgs/amex.jpg" id="amex">
                                                    </div>
                                                    
                                                    <input type="hidden" name="booking_id" value="{{$b->booking_id}}">
                                                    <input type="hidden" name="user_id" value="{{$b->user_id}}">
                                                    <input type="hidden" name="amount" value="{{$b->rates}}">
                                                    <input type="hidden" name="status" value="Paid">
                                                    <div class="form-group" id="pay-now">
                                                        <button type="submit" class="btn " id="confirm-purchase">Confirm</button>
                                                    </div>
                                                </form>
                                                @endforeach
                                            </div>
                                        </div>
                                    
                                      
                                    </div>
                                   
                                    </div>
                        
                        
                                       
                        

                <!-- ================= Therapists ================ -->
                <div class="cardHeader" style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
                    <h2 style="text-align: center;"></h2>
                    <div style="display: flex; justify-content: center; align-items: center;">
                        <img src="/2_assets/imgs/service-3.jpg" style="max-width: 100%; padding-right: 80px;" />
                    </div>
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