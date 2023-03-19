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

        <div class="profilecard-holder">

            <div class="card">
                <div class="card__img">
                    <img src="/3_assets/imgs/f2.jpg" alt="profile-pic">
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
                <div class="proffesional-aboutme">
                    <h2>About Me</h2>
                    <p>My name is Baby Lou and I am a certified massage therapist with 3 years of experience. My passion is to help my clients relieve their stress and pain through the power of touch. I offer a variety of massage techniques including Swedish Massage, Thai Massage, Ventosa, Acupuncture.</p>
                  <br>
                    <h2>Certifications and Training</h2>
                    <ul>
                      <li>Hagod Manila Massage Training Center- Massage Therapy NC II - 2020</li>
                      <li>SPAce Training Center- Massage Therapy Certification - 2021 </li>
                    </ul>
            
            
                </div>
            </div>


            <div class="details-container">
            
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
        
                <div class="editProfile">
                    <button id="editButton" class="editButton" onclick="editDetails()">Edit Details</button>
                </div>


<div class="expertise-details">
<table>
    <thead>
      <tr>
        <th>Expertise</th>
        <th>Rate</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Swedish Massage</td>
        <td>500php</td>
      </tr>
      <tr>
        <td>Thai Massage</td>
        <td>500php</td>
      </tr>
      <tr>
        <td>Ventosa</td>
        <td>350php</td>
      </tr>
      <tr>
        <td>Acupuncture</td>
        <td>400php</td>
      </tr>
    </tbody>
  </table>
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