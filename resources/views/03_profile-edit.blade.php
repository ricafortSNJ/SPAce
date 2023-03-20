<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
<!-- CSS link -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-8Kv7V9e9r1n7IQWmAT+Rv/OVlUDJtA/7tTzKZTn+2uJ9sLRsLTrjKPPyI+FiN1jB" crossorigin="anonymous">

<!-- JavaScript links -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-6Z0lRgzJUgVRoC5K0vf0yLqNSv5eTU6RITg6iCrz2U4ny4L4OnhKj3qBo/VX5U5S" crossorigin="anonymous"></script>


    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="/3_assets/css/profile_settings.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        @include("layouts/03_nav")

            </ul>
        </div>

        <div class="main">
        
        @include("layouts/03_topbar")

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
                                <form action="/test2_profile/upload" method="POST" enctype="multipart/form-data">
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

        <script>
         function toggleEdit() {
    // Get all the td elements
    const tds = document.getElementsByTagName("td");
    // Loop through each td element
    for (let i = 0; i < tds.length; i++) {
      // Toggle the contenteditable attribute between true and false
      tds[i].contentEditable = tds[i].contentEditable === "true" ? "false" : "true";
    }
  }

  function editDetails() {
    // Get the button element
    var editButton = document.getElementById("editButton");
  
    // Get the table element
    var table = document.getElementsByTagName("table")[0];
  
    if (editButton.innerHTML === "Edit Details") {
      // Change the button text to "Save"
      editButton.innerHTML = "Save";
  
      // Enable editing of table cells
      for (var i = 0; i < table.rows.length; i++) {
        for (var j = 0; j < table.rows[i].cells.length; j++) {
          table.rows[i].cells[j].contentEditable = "true";
        }
      }
    } else {
      // Change the button text back to "Edit Details"
      editButton.innerHTML = "Edit Details";
  
      // Disable editing of table cells
      for (var i = 0; i < table.rows.length; i++) {
        for (var j = 0; j < table.rows[i].cells.length; j++) {
          table.rows[i].cells[j].contentEditable = "false";
        }
      }
    }
  }
            
          </script>


    <script src="/3_assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>