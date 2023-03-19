<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- CSS link -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-8Kv7V9e9r1n7IQWmAT+Rv/OVlUDJtA/7tTzKZTn+2uJ9sLRsLTrjKPPyI+FiN1jB" crossorigin="anonymous">

<!-- JavaScript links -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-6Z0lRgzJUgVRoC5K0vf0yLqNSv5eTU6RITg6iCrz2U4ny4L4OnhKj3qBo/VX5U5S" crossorigin="anonymous"></script>



    <title>Messaging</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="/3_assets/css/messaging.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        
    @include("layouts/03_nav")

        <!-- ========================= Main ==================== -->
        <div class="main">
            
        
        @include("layouts/03_topbar")

        
            <div class="therapists">
                <div class="cardHeader">
                    <h2>Messages</h2>
                </div>

                <table>
                    <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="/3_assets/imgs/f1.jpg" alt=""></div>
                        </td>
                        <td>
                            <h4>Violet <br /> 
                                <span>Meet me at 6pm.</span><br />
                            </h4>
                        </td>
                    </tr>

                    <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="/3_assets/imgs/f2.jpg" alt=""></div>
                        </td>
                        <td>
                            <h4>Maryjane <br /> 
                                <span>Can you send me your exact address?</span><br />
                            </h4>
                        </td>
                    </tr>
                    
                    <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="/3_assets/imgs/f1.jpg" alt=""></div>
                        </td>
                        <td>
                            <h4>Violet <br /> 
                                <span>Meet me at 6pm.</span><br />
                            </h4>
                        </td>
                    </tr>

                    <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="/3_assets/imgs/f2.jpg" alt=""></div>
                        </td>
                        <td>
                            <h4>Maryjane <br /> 
                                <span>Can you send me your exact address?</span><br />
                            </h4>
                        </td>
                    </tr>
                    <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="/3_assets/imgs/f1.jpg" alt=""></div>
                        </td>
                        <td>
                            <h4>Violet <br /> 
                                <span>Meet me at 6pm.</span><br />
                            </h4>
                        </td>
                    </tr>

                    <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="/3_assets/imgs/f2.jpg" alt=""></div>
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
    <script src="/3_assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>