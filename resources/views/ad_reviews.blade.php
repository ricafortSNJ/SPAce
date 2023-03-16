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
                    <img src="assets/imgs/che.jpg" alt="">
                </div>
            </div>

                <!-- ================= Therapists ================ -->
                <div class="users">
                    <div class="cardHeader">
                        <h2>REVIEWS</h2>
                    </div>

                    <table class="table">
                        <tr>
                            <th>Review ID</th>
                            <th>Booking ID</th>
                            <th>Reviewer</th>
                            <th>Reviewee</th>
                            <th>Rating</th>
                            <th>Review</th>
                            <th>Options</th>
                        </tr>
                        <tr>
                            <td>Insert Here->review_id}}</td>
                            <td>Insert Here->booking_id}}</td>
                            <td>Insert Here->reviewer}}</td>
                            <td>Insert Here->reviewee}}</td>
                            <td>Insert Here->rating}}</td>
                            <td>Insert Here->review}}</td>
                            <td>
                                <div class="col-lg-4" style="text-align: center;">
                                    <button class="btn more-info">More Info</button>
                                    <button class="btn edit">Edit</button>
                                    <button class="btn delete">Delete</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Insert Here->review_id}}</td>
                            <td>Insert Here->booking_id}}</td>
                            <td>Insert Here->reviewer}}</td>
                            <td>Insert Here->reviewee}}</td>
                            <td>Insert Here->rating}}</td>
                            <td>Insert Here->review}}</td>
                            <td>
                                <div class="col-lg-4" style="text-align: center;">
                                    <button class="btn more-info">More Info</button>
                                    <button class="btn edit">Edit</button>
                                    <button class="btn delete">Delete</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Insert Here->review_id}}</td>
                            <td>Insert Here->booking_id}}</td>
                            <td>Insert Here->reviewer}}</td>
                            <td>Insert Here->reviewee}}</td>
                            <td>Insert Here->rating}}</td>
                            <td>Insert Here->review}}</td>
                            <td>
                                <div class="col-lg-4" style="text-align: center;">
                                    <button class="btn more-info">More Info</button>
                                    <button class="btn edit">Edit</button>
                                    <button class="btn delete">Delete</button>
                                </div>
                            </td>
                        </tr>
                       

                    </table>
                    <div class="col-lg-4" style="text-align: center;">
                        
                        <button class="btn create-new">Create New</button>
                        
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