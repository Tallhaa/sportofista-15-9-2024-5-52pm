<?php include('dbconnect.php')?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link rel="stylesheet" href="assets/css/fontawesome-free-5.15.4-web/css/all.css">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="admin.php" class="logo d-flex align-items-center">
        <span class="d-none d-lg-block">Sportofista</span>
      </a>
      <i class=" toggle-sidebar-btn"><i class="fa fa-bars" aria-hidden="true"></i></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Profile</span>
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
        <a class="nav-link " href="admin.php">
          <span> <i class="fas fa-tachometer-alt    "></i>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <span> <i class="fas fa-user    "></i>User Accounts</span>
        </a>
        <ul id="components-nav" class="nav-content active" data-bs-parent="#sidebar-nav">
          <li><a href="clubowners.php">Club Owners</a></li>
          <li><a href="sportsocietyheads.php">Sport Society Heads</a></li>
          <li><a href="trainers.php">Trainers</a></li>
          <li><a href="player.php">Guest Players</a></li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <span> <i class="fa fa-users" aria-hidden="true"></i>Players</span>
        </a>
        <ul id="forms-nav" class="nav-content active " data-bs-parent="#sidebar-nav">
          <li><a href="top_players.php">Top Players</a></li>
          <li><a href="mplayer.php">Manage Players</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#member" data-bs-toggle="collapse" href="#">
          <span> <i class="fa fa-users" aria-hidden="true"></i>Members</span>
        </a>
        <ul id="member" class="nav-content active " data-bs-parent="#sidebar-nav">
          <li><a href="members.php">Member Profiles</a></li>
          <li><a href="">Manage Members</a></li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <span> <i class="fas fa-running"></i> Trainer</span>
        </a>
        <ul id="charts-nav" class="nav-content active " data-bs-parent="#sidebar-nav">
          <li><a href="trainer.php">Add Trainer</a></li>
          <li><a href="mtrainer.php">Manage</a></li>
        </ul>
      </li><!-- End Charts Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#booking-nav" data-bs-toggle="collapse" href="#">
          <span> <i class="fas fa-address-card"></i>Booking</span>
        </a>
        <ul id="booking-nav" class="nav-content active " data-bs-parent="#sidebar-nav">
          <li><a href="mtournament.php">Tournament</a></li>
          <li><a href="mtevent.php">Event</a></li>
          <li><a href="">Accessories Booking</a></li>
          <li><a href="">Ground Booking</a></li>
          <li><a href="">Manage Booking</a></li>
        </ul>
      </li>
    </ul>

  </aside>
  <main id="main" class="main">
    <div class="pagetitle">
      <div class="container">
        <div class="row">
          <h1>Users Accounts</h1>
          <div class="col-md-4 py-4">
            <?php
              $sql = "SELECT * FROM `club_owner`";
              $result = mysqli_query($conn, $sql);
              $srno=0;
              while ($row = mysqli_fetch_assoc($result)){
                $srno=$srno+1;
              }
              ?>
              <div class="card" style="background-color:red ; color: aliceblue;">
                <center>
                  <h4>Club Owners</h4>
                </center>
                <div class="card-body text-center">
                  <h2 class="card-label text-center"> <?php echo $srno; ?></h2>
                <a name=" id=" class="btn btn-outline-light px-5 rounded" href="clubowners.php" role="button">Details</a>
                </div>
              </div>

          </div>
          <div class="col-md-4 py-4">
            <?php
              $sql = "SELECT * FROM `sport_society_head`";
              $result = mysqli_query($conn, $sql);
              $srno=0;
              while ($row = mysqli_fetch_assoc($result)){
                $srno=$srno+1;
                
              }
              ?>
              <div class='card' style='background-color:orange ; color: aliceblue;'>
                <center>
                  <h4>Sport Society Heads</h4>
                </center>
                <div class='card-body text-center'>
                  <h2 class='card-label text-center'><?php echo $srno;?></h2>
                <a name=' id=' class='btn btn-outline-light px-5 rounded' href='sportsocietyheads.php' role='button'>Details</a>
                </div>
              </div>

          </div>

          <div class="col-md-4 py-4">
            <?php
              $sql = "SELECT * FROM `trainer`";
              $result = mysqli_query($conn, $sql);
              $srno=0;
              while ($row = mysqli_fetch_assoc($result)){
                $srno=$srno+1;
                
                
              }
              ?>
              <div class='card' style='background-color:blue ; color: aliceblue;'>
                <center>
                  <h4>Trainers</h4>
                </center>
                <div class='card-body text-center'>
                  <h2 class='card-label text-center'><?php echo $srno; ?></h2>
                <a name=' id=' class='btn btn-outline-light px-5 rounded' href='trainers.php' role='button'>Details</a>
                </div>
              </div>

          </div>

          <div class="col-md-4 py-4">
            <?php
              $sql = "SELECT * FROM `player`";
              $result = mysqli_query($conn, $sql);
              $srno=0;
              while ($row = mysqli_fetch_assoc($result)){
                $srno=$srno+1;

                
              }
              ?>
              <div class='card' style='background-color:grey ; color: aliceblue;'>
                <center>
                  <h4>Guest Players</h4>
                </center>
                <div class='card-body text-center'>
                  <h2 class='card-label text-center'><?php echo $srno ;?></h2>
                <a name=' id=' class='btn btn-outline-light px-5 rounded' href='player.php' role='button'>Details</a>
                </div>
              </div>

          </div>

        </div>
      </div>
    </div>
    </div>
  </main>
  <!-- !-- End Sidebar-->

  <!-- Vendor JS Files -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK"
    crossorigin="anonymous"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>