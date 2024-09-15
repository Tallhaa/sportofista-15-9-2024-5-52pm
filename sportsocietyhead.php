<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sportofista</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link rel="stylesheet" href="assets/fontawesome-free-5.15.4-web/css/all.css">
  <!-- Vendor CSS Files -->
  <link rel="stylesheet" type="text/css" href="vendor/datatables.min.css" />

  
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="clubowner.php" class="logo d-flex align-items-center">
        <span class="d-none d-lg-block">Sportofista</span>
      </a>
      <i class=" toggle-sidebar-btn"><i class="fa fa-bars" aria-hidden="true"></i></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <span class="d-none d-md-block dropdown-toggle ps-2"> <i class="fas fa-user"></i>Sport Society Head</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="userprofiles/sportsocietyhead.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="clubowner.php">
          <span> <i class="fas fa-tachometer-alt    "></i> Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <span> <i class="fas fa-user    "></i> Players</span>
        </a>
        <ul id="components-nav" class="nav-content active " data-bs-parent="#sidebar-nav">
          <li><a href="players.php">Add Players</a></li>
          <li><a href="player_profiles.php">Players Details</a></li>
          <li><a href="mangplayer.php">Manage Players</a></li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <span> <i class="fa fa-users" aria-hidden="true"></i> Team</span>
        </a>
        <ul id="forms-nav" class="nav-content active  " data-bs-parent="#sidebar-nav">
          <li><a href="team.php">Add Team</a></li>
          <li><a href="team_profiles.php">Team Details</a></li>
          <li><a href="mangteam.php">Manage</a></li>
        </ul>
      </li>
      <!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <span> <i class="fas fa-running"></i> Trainer</span>
        </a>
        <ul id="charts-nav" class="nav-content active  " data-bs-parent="#sidebar-nav">
          <li><a href="train.php">View</a></li>
        </ul>
      </li><!-- End Charts Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#booking-nav" data-bs-toggle="collapse" href="#">
          <span> <i class="fas fa-address-card    "></i> Booking</span>
        </a>
        <ul id="booking-nav" class="nav-content active " data-bs-parent="#sidebar-nav">
          <li><a href="eventBooking.php">Event</a></li>
          <li><a href="accessories.php">Accessories Booking</a></li>
          <li><a href="">Ground Booking</a></li>
          <li><a href="mangBooking.php">Manage Booking</a></li>
        </ul>
      </li>
    </ul>

  </aside>
  <!-- End Sidebar-->
  <main id="main" class="main">
    <div class="pagetitle">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <img class="card-img-top" src="images/sports-gear.jpg" alt="">
              <div class="card-body">
                <h3 class="card-title"> <a href="accessories.php">Accessories Booking</a></h3>

              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <img class="card-img-top" src="images/cricket3.jpg" alt="">
              <div class="card-body">
                <h3 class="card-title"> <a href="ground.html">Ground Booking</a></h3>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="card">
              <img class="card-img-top" src="images/20552173.jpg" alt="">
              <div class="card-body">
                <h3 class="card-title"> <a href="eventBooking.php">Event Registration</a></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>


  <!-- Vendor JS Files -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK"
    crossorigin="anonymous"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="vendor/datatables.min.js"></script>
  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
</body>

</html>