// add hovered class to selected list item
let list = document.querySelectorAll(".navigation li");

function activeLink() {
  list.forEach((item) => {
    item.classList.remove("hovered");
  });
  this.classList.add("hovered");
}

list.forEach((item) => item.addEventListener("mouseover", activeLink));

// Menu Toggle
let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");

toggle.onclick = function () {
  navigation.classList.toggle("active");
  main.classList.toggle("active");
};

 // Map Object + Center
 var map = L.map('map').setView([14.5995, 121.0364], 10); // Manila
      
 // Actual Map
 L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
   attribution: '&copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
   maxZoom: 18
 }).addTo(map);
 
 // List of Locations
 var markers = [
   { position: [14.5547, 121.0211], title: 'Makati' },
   { position: [14.5176, 121.0685], title: 'Taguig' },
   { position: [14.5794, 121.0327], title: 'Mandaluyong' }
 ];
 
 
 // Generate Pins
 markers.forEach(function(marker) {
   L.marker(marker.position).bindPopup(marker.title).addTo(map);
 });