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
    <link rel="stylesheet" href="/2_assets/css/profile.css">


    <style type="text/css">@media print{.form-section{display:inline!important}.form-pagebreak{display:none!important}.form-section-closed{height:auto!important}.page-section{position:initial!important}}</style>
    <link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?v=3.3.40087&themeRevisionID=5f30e2a790832f3e96009402"/>
    <link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/css/styles/payment/payment_styles.css?3.3.40087" />
    <link type="text/css" rel="stylesheet" href="https://cdn03.jotfor.ms/css/styles/payment/payment_feature.css?3.3.40087" />
    <style type="text/css" id="form-designer-style">
    /* Injected CSS Code */
    

@media (max-width: 20px) {
  img {
    max-width: 30%;
  }
}

img {
  max-width: 75%;
  height: auto;
}

* {
  font-family: "Poppins", sans-serif;
 
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.navigation {
  /* font-size: 1.3rem; */
  color: #2d4b5a !important;
}

section {
  margin: 20px;
}

input::-webkit-file-upload-button {
  position: absolute;
  padding: 10px 20px;
  background-color: peru;
  border: none;
  border-radius: 5px;
  color: white;
  text-transform: uppercase;
  box-shadow: 0px 3px 3px -2px rgba(0,0,0,0.2), 0px 3px 4px 0px rgba(0,0,0,0.14), 0px 1px 8px 0px rgba(0,0,0,0.12);
  transition: 100ms ease-out;
  cursor: pointer;
}

input::-webkit-file-upload-button:hover {
  background-color: #bd6e1f;
  box-shadow: 0px 3px 5px -1px rgba(0,0,0,0.2), 0px 5px 8px 0px rgba(0,0,0,0.14), 0px 1px 14px 0px rgba(0,0,0,0.12)
}

    /* Injected CSS Code */
</style>

<script src="https://cdn01.jotfor.ms/static/prototype.forms.js?3.3.40087" type="text/javascript"></script>
<script src="https://cdn02.jotfor.ms/static/jotform.forms.js?3.3.40087" type="text/javascript"></script>
<script src="https://cdn03.jotfor.ms/js/vendor/jquery-1.8.0.min.js?v=3.3.40087" type="text/javascript"></script>
<script defer src="https://cdn01.jotfor.ms/js/vendor/maskedinput.min.js?v=3.3.40087" type="text/javascript"></script>
<script defer src="https://cdn02.jotfor.ms/js/vendor/jquery.maskedinput.min.js?v=3.3.40087" type="text/javascript"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/punycode/1.4.1/punycode.js"></script>
<script src="https://cdn03.jotfor.ms/s/umd/c5cf966c651/for-appointment-field.js?v=3.3.40087" type="text/javascript"></script>



</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container-fluid">
        
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
                            @foreach ($user as $u)
                                <img src="/image_uploads/{{$u->image}}" alt="nhan">
                            </div>
                            <div class="card__name">
                                <h2>{{$u->username}}</h2>
                            </div>
                            <div class="card__job">
                                <span>User ID: 2023-U{{$u->user_id}}</span>
                            </div>
                            @endforeach
                            <div class="card__link">
                                <a href="https://www.facebook.com/profile.php?id=100091118220444">
                                    <ion-icon name="logo-facebook"></ion-icon>
                                </a>
                                <a href="https://twitter.com/space032023">
                                    <ion-icon name="logo-twitter"></ion-icon>
                                </a>
                                <a href="https://www.instagram.com/space_relaxationgateway/">
                                    <ion-icon name="logo-instagram"></ion-icon>
                                </a>
                                <a href="https://www.linkedin.com">
                                    <ion-icon name="logo-linkedin"></ion-icon>
                                </a>
                            </div>
                            <div style="border:0; text-align: center;">
                                <form action="/test1_profile/upload" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="file" name="image"></input><br>
                                    <button style="border: 1px solid #ccc; padding: 6px 12px; color:#dca56a; background-color: #2d4b5a;" type="submit">Submit</button>
                                </form>

                            </div>
                            <a href="#" >
                                <span class="icon" >
                                  <img src="/2_assets/imgs/sitenamedbg.png" style="margin-top: 100px;" />
                                </span>
                                
                            </a>
                        </div>
                    </div>

                    
                </div>
                
                
                
                <!-- ================= Therapists ================ -->
                <div class="therapists">
                    <table>
                        <thead>
                            <tr>
                              <th>Label</th>
                              <th>Data</th>
                            </tr>
                          </thead>
                        <tbody>
                        @if (count($user) > 0)
                        @foreach ($user as $u)
                        <form method="POST" action="/02_profile/edit">
                        @csrf
                          <tr>
                            <td>First Name:</td>
                            <td style="text-align: center;" contenteditable="true">
                            <input type="text" name="first_name" value="{{$u -> first_name}}"></input><br>
                            </td>
                          </tr>
                          <tr>
                            <td>Last Name</td>
                            <td style="text-align: center;" contenteditable="true">
                            <input type="text" name="last_name" value="{{$u -> last_name}}"></input><br>
                            </td>
                          </tr>
                          <tr>
                            <td>Email: </td>
                            <td style="text-align: center;" contenteditable="true">
                            <input type="text" name="email_address" value="{{$u -> email_address}}"></input><br>
                            </td>
                          </tr>
                          <tr>
                            <td>Contact#:</td>
                            <td style="text-align: center;" contenteditable="true">
                            <input type="text" name="mobile_number" value="{{$u -> mobile_number}}"></input><br>
                            </td>
                          </tr>
                          <tr>
                            <td>Address:</td>
                            <td style="text-align: center;" contenteditable="true">
                            <input type="text" name="location" value="{{$u -> location}}"></input><br>
                            </td>
                          </tr>
                        @endforeach
                        @endif
                        </tbody>
                    </table>
                    <div class="editProfile">
                        
                    <button class="editButton" type="submit">Save</button>
                      </form>
                    </div>
                        
                        




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