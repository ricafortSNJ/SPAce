<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">SPACE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link" href="/test2_dashboard">Dashboard</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="/test2_profile">Profile</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="/test2_messages">Messages</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="/test2_bookings">Bookings</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="/test2_reviews">Reviews</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="/test2_payments">Earnings</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="/logout">SIGNOUT</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="/logout">Welcome - {{Session::get("username")}}</a>
      </li>
    </div>
  </div>
</nav>