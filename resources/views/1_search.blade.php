<!DOCTYPE html>
<html lang="en">
<head>
    @include("layouts/head")
    <title>Search</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
    integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
    crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
    integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
    crossorigin=""></script>
    <style>
      #map {
        height: 800px;
        width: 800px;
      }
    </style>
</head>
<body>
@include("layouts/navbar_dashboard")
    
    <h1>Book a Professional!</h1>
    <form action="/professionals" method="POST">
      @csrf
      <div class="form-group">
        <label for="dropdown1">Expertise</label>
        <select name="expertise" class="form-control" id="dropdown1">
          <option value="Skin Care Specialist">Skin Care Specialist</option>
          <option value="Reflexologist">Reflexologist</option>
          <option value="Reiki Practitioner">Reiki Practitioner</option>
          <option value="Makeup Artist">Makeup Artist</option>
          <option value="Hairstylist">Hairstylist</option>
        </select>
      </div>
      <div class="form-group">
        <label for="dropdown2">Rates</label>
        <select name="rate" class="form-control" id="dropdown2">
          <option value="1000">PHP 1000 and below</option>
          <option value="2000">PHP 2000 and below</option>
          <option value="3000">PHP 3000 and below</option>
        </select>
      </div>
      <div class="form-group">
        <label for="dropdown3">Locations</label>
        <select name="location" class="form-control" id="dropdown3">
          <option value="'NCR'">National Capital Region (NCR)</option>
          <option value="CAR">Cordillera Administrative Region(CAR)</option>
          <option value="Region I">Ilocos Region (Region I)</option>
          <option value="Region II">Cagayan Valley (Region II)</option>
          <option value="Region III">Central Luzon (Region III)</option>
          <option value="Region IV-A">Calabarzon (Region IV-A)</option>
          <option value="Region IV-B">Mimaropa (Region IV-B)[</option>
          <option value="Region V">Bicol Region (Region V)</option>
          <option value="Region VI">Western Visayas (Region VI)</option>
          <option value="Region VII">Central Visayas (Region VII)</option>
          <option value="Region VIII">Eastern Visayas (Region VIII)</option>
          <option value="Region IX">Zamboanga Peninsula (Region IX)</option>
          <option value="Region X">Northern Mindanao (Region X)</option>
          <option value="Region XI">Davao Region (Region XI)</option>
          <option value="Region XII">Soccsksargen (Region XII)</option>
          <option value="Region XIII">Caraga (Region XIII)</option>
          <option value="BARMM">Bangsamoro(BARMM)</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Search</button>
    </form>

    <h1>Professionals</h1>
    <p>Expertise: {{$expertise}}</p>
    <p>Rates:  {{$rate}}</p>
    <p>Location:  {{$location}}</p>

    @if (count($results) > 0)
        <ul>
        @foreach ($results as $r)
            <li>
                <form action="/bookings" method="POST">
                  @csrf
                  <input type="hidden" name="professional_id" value="{{$r->professional_id}}">
                  <h5>Username: {{$r->username}}</h5>
                  <h5>Expertise: {{$r->expertise}}</h5>
                  <h5>Availability: {{$r->availability}}</h5>
                  <h5>Rates: {{$r->rates}}</h5>
                  <h5>Location: {{$r->location}}</h5>
                  <button type="submit" class="btn btn-primary">Book Now!</button>
                </form>
            </li>
        @endforeach
        </ul>
    @else
        <p>Nothing to show here</p>
    @endif



    <div class="container">
      <h1>User Location: Manila</h1>
      <h2>Showing Nearby Professionals</h2>
      <div id="map"></div>
    </div>
    
    
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