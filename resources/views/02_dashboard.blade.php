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
                        <form action="/02_dashboard" method="POST">
                          @csrf
                            
                              <div class="wrapper">
                                <div class="search-container">
                                    <select class="w3-select w3-border" name="expertise">
                                        <option value="" disabled selected>Expertise</option>
                                        <option value="Skin Care Specialist">Skin Care Specialist</option>
                                        <option value="Reflexologist">Reflexologist</option>
                                        <option value="Reiki Practitioner">Reiki Practitioner</option>
                                        <option value="Makeup Artist">Makeup Artist</option>
                                        <option value="Hairstylist">Hairstylist</option>
                                      </select> <br/>
                                      <select class="w3-select w3-border" name="rate">
                                        <option value="" disabled selected>Rates</option>
                                        <option value="1000">PHP 1000 and below</option>
                                        <option value="2000">PHP 2000 and below</option>
                                        <option value="3000">PHP 3000 and below</option>
                                      </select> <br/>
                                      <select class="w3-select w3-border" name="location">
                                        <option value="" disabled selected>Search for location</option>
                                        <option value="'NCR'">National Capital Region (NCR)</option>
                                        <option value="'CAR'">Cordillera Administrative Region(CAR)</option>
                                        <option value="'Region I'">Ilocos Region (Region I)</option>
                                        <option value="'Region II'">Cagayan Valley (Region II)</option>
                                        <option value="'Region III'">Central Luzon (Region III)</option>
                                        <option value="'Region IV-A'">Calabarzon (Region IV-A)</option>
                                        <option value="'Region IV-B'">Mimaropa (Region IV-B)[</option>
                                        <option value="'Region V'">Bicol Region (Region V)</option>
                                        <option value="'Region VI'">Western Visayas (Region VI)</option>
                                        <option value="'Region VII'">Central Visayas (Region VII)</option>
                                        <option value="'Region VIII'">Eastern Visayas (Region VIII)</option>
                                        <option value="'Region IX'">Zamboanga Peninsula (Region IX)</option>
                                        <option value="'Region X'">Northern Mindanao (Region X)</option>
                                        <option value="'Region XI'">Davao Region (Region XI)</option>
                                        <option value="'Region XII'">Soccsksargen (Region XII)</option>
                                        <option value="'Region XIII'">Caraga (Region XIII)</option>
                                        <option value="'BARMM'">Bangsamoro(BARMM)</option>
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
                    @foreach ($results as $r)
                        <tr>
                            <td width="80px">
                              <div class="imgBx"><img src="/2_assets/imgs/f2.jpg" alt=""></div>
                            </td>
                            <td  width="250px">
                              <div class="info-container">
                                <h4>{{$r->username}}<br /> 
                                  <span>{{$r->location}}</span>
                                  <br>
                                  <small>Expertise: {{$r->expertise}}</small>
                                  <br>
                                  <small>Rates: {{$r->rates}}</small>
                                  <br>
                                  <small>Availability: {{$r->availability}}</small>
                                </h4>
                            <!-- </tr>
                            <tr> -->
                                <td>
                                <div class="icons">
                                  <button class="btn" style="margin-left: 10px;"><i class="las la-user-circle"></i></button>
                                  <span style="margin-left: 10px;">    </span>
                                  <button class="btn"><i class="las la-comment"></i></button>
                                  
                                <form action="/02_bookings" method="POST">
                                  @csrf
                                  <button class="btn book-now">Book Now</button>
                                </form>

                                
                                </div>
                              </div>
                            </td>
                        </tr>
                      @endforeach
                          

                        

                        
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

    <script>
      // List of Locations
      var markers = [
        @if ($expertise)
        @foreach ($results as $r)
        { position: [{{$r->lat}}, {{$r->lng}}], title: '{{$r->location}}' },
        @endforeach
        @endif
      ];


      // Map Object + Center
      var map = L.map('map').setView([14.5995, 121.0364], 12); // Manila
      
      // Actual Map
      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
        maxZoom: 18
      }).addTo(map);
      
      
      // Generate Pins
      markers.forEach(function(marker) {
        L.marker(marker.position).bindPopup(marker.title).addTo(map);
      });
      
    </script>
</body>

</html>