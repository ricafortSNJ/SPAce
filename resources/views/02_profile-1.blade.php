<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
    integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
    crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
    integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
    crossorigin=""></script>

    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="/2_assets/css/profile.css">
    
    @include("layouts/02_head")
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
    @include("layouts/02_nav")

        <!-- ========================= Main ==================== -->
        <div class="main">
        @include("layouts/02_topbar")

            

            <!-- ================ Map ================= -->
            <div class="details">
                <div class="mapsNearU">
                    <div class="cardHeader">
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
                    </div>

                    <div class="container">
                        
                            
                        
                        
                    </div>
                </div>

                <!-- ================= Therapists ================ -->
                <div class="therapists">
                    <table>
                        <tbody>
                          <tr>
                            <td>First Name:</td>
                            <td style="text-align: center;" contenteditable="false"> Baby</td>
                          </tr>
                          <tr>
                            <td>Last Name</td>
                            <td style="text-align: center;" contenteditable="false">Lou</td>
                          </tr>
                          <tr>
                            <td>Email: </td>
                            <td style="text-align: center;" contenteditable="false">girly.girl@gmail.com</td>
                          </tr>
                          <tr>
                            <td>Contact#:</td>
                            <td style="text-align: center;" contenteditable="false">09457874155</td>
                          </tr>
                          <tr>
                            <td>Address:</td>
                            <td style="text-align: center;" contenteditable="false">143 Trinity Ave Cubao</td>
                          </tr>
                        </tbody>
                    </table>
                        
                        
                        
                        <div class="expertise-details">
                        <table>
                            <thead>
                              <tr>
                                <th>History</th>
                                <th>Date</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Swedish Massage</td>
                                <td>01/01/2023</td>
                              </tr>
                              <tr>
                                <td>Thai Massage</td>
                                <td>02/01/2023</td>
                              </tr>
                              <tr>
                                <td>Ventosa</td>
                                <td>03/01/2023</td>
                              </tr>
                              <tr>
                                <td>Acupuncture</td>
                                <td>03/10/2023</td>
                              </tr>
                            </tbody>
                            <div class="editProfile">
                                <button id="editButton" class="editButton" onclick="editDetails()">Edit Details</button>
                            </div>
                          </table>
                




            </div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="/2_assets/js/profile.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>