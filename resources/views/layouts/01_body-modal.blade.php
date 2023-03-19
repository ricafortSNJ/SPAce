<div class="w3-container">

<div id="id01" class="w3-modal">
 <div class="w3-modal-content w3-card-4 w3-animate-zoom">
  <header class="w3-container" style="background-color: #2d4b5a;"> 
   <span onclick="document.getElementById('id01').style.display='none'" 
   class="w3-button w3-blue w3-xlarge w3-display-topright">&times;</span>
   <img src="1_assets/img/sitename.png"
                    style="height: auto; width: 125px; padding-bottom: 25px;  padding-top: 5px; align-items: center;" />
  </header>

  <div class="w3-bar w3-border-bottom" id="bg">
   <button class="tablink w3-bar-item w3-button" onclick="openCity(event, 'Signup')" >Signup</button>
   <button class="tablink w3-bar-item w3-button" onclick="openCity(event, 'Login')">Login</button>
   
  </div>

  <div id="Signup" class="w3-container city" id="bg">
  
   <form class="w3-container" action="/test_register" method="POST">
        @csrf
    <div class="w3-section" id="bg">
      <label><b>Email Address</b></label>
      <input class="w3-input w3-border w3-margin-bottom" type="email" placeholder="Enter Email" name="email_address" required>
      <label><b>Password</b></label>
      <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="password" required>
      <button class="w3-button w3-block  w3-section w3-padding" type="submit" style="background-color: #2d4b5a; color: white;">Sign Up</button>
      <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me
    </div>
  </form>
  </div>

  <div id="Login" class="w3-container city">
    <form class="w3-container" action="/test_login" method="POST">
        @csrf
        <div class="w3-section">
      <label><b>Email Address</b></label>
      <input class="w3-input w3-border w3-margin-bottom" type="email" placeholder="Enter Email" name="email_address" required>
      <label><b>Password</b></label>
      <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="password" required>
          <button class="w3-button w3-block  w3-section w3-padding" type="submit" style="background-color: #2d4b5a; color: white;" >Login</button>
          <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me
        </div>
      </form>
  </div>


  <div class="w3-container w3-light-grey w3-padding">
   <button class="btn w3-right" 
   onclick="document.getElementById('id01').style.display='none'">Close</button>
  </div>
 </div>
</div>

</div>

<script>
document.getElementsByClassName("tablink")[0].click();

function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].classList.remove("w3-light-grey");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.classList.add("w3-light-grey");
}
</script>