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

                <!-- ================= Therapists ================ -->
                <div class="therapists">
                    <div class="cardHeader">
                        <h2>Messages</h2>
                    </div>

                    <table>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets_u/imgs/f1.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Violet <br /> 
                                    <span>Meet me at 6pm.</span><br />
                                </h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets_u/imgs/f2.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Maryjane <br /> 
                                    <span>Can you send me your exact address?</span><br />
                                </h4>
                            </td>
                        </tr>
                        
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets_u/imgs/f1.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Violet <br /> 
                                    <span>Meet me at 6pm.</span><br />
                                </h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets_u/imgs/f2.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Maryjane <br /> 
                                    <span>Can you send me your exact address?</span><br />
                                </h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets_u/imgs/f1.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Violet <br /> 
                                    <span>Meet me at 6pm.</span><br />
                                </h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets_u/imgs/f2.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Maryjane <br /> 
                                    <span>Can you send me your exact address?</span><br />
                                </h4>
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