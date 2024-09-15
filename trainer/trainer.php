<?php
include ('dbconnect.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link rel="stylesheet" href="../assets/fontawesome-free-5.15.4-web/css/all.css">
  <!-- Vendor CSS Files -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="trainer.php" class="logo d-flex align-items-center">
        <span class="d-none d-lg-block">Sportofista</span>
      </a>
      <i class=" toggle-sidebar-btn"><i class="fa fa-bars" aria-hidden="true"></i></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <span class="d-none d-md-block dropdown-toggle ps-2">Trainer</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">

            <li>
              <a class="dropdown-item d-flex align-items-center" href="">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="./logout.php">
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

    <ul class="sidebar-nav" id="sidebar-nav" >

     <li class="nav-item">
      <a class="nav-link " href="trainer.php">
        <span> <i class="fas fa-tachometer-alt    "></i> Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
        <span> <i class="fas fa-user"></i> My Players</span>
      </a>
      <ul id="components-nav" class="nav-content active" data-bs-parent="#sidebar-nav">
        <li><a href="add_players.php">Add New Players</a></li>
        <li><a href="player_profiles.php">Players Profiles</a></li>
        <li><a href="edit_player.php">Edit/Delete Players</a></li>

      </ul>
    </li><!-- End Components Nav -->
    </ul>

  </aside>
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>My Players</h1>
    <div class="container">
            <div class="row">
                <div class='col-md-6 py-3'>
                    <?php
                $sql = "SELECT * FROM `tplayers`";
                $result = mysqli_query($conn, $sql);
                
                  ?>

                    <?php
                  if(mysqli_num_rows($result)>0)
                  {
                        foreach($result as $row)
                        {
                            ?>
                    <div class='card'>

                        <img src="<?php echo "top_players/".$row['player_img'];?>" alt="">
                        <div class='card-body'>
                            <dl class='row py-2'>
                                <dt class='col-sm-4'>Name:</dt>
                                <dd class='col-sm-6'>
                                    <?php echo $row['player_name']; ?>
                                </dd>
                                <dt class='col-sm-4'>Email:</dt>
                                <dd class='col-sm-6'><?php echo $row['email'];?></dd>
                                <dt class='col-md-4'>Player Type:</dt>
                                <dd class='col-sm-6'><?php echo $row['player_type'];?></dd>
                                <dt class='col-md-4'>Game Type:</dt>
                                <dd class='col-md-6'><?php echo $row['game_type'];?></dd>
                                <dt class='col-md-4'>Address:</dt>
                                <dd class='col-md-6'><?php $row['address'];?></dd>
                                <dt class='col-md-4'>Contact:</dt>
                                <dd class='col-md-6'><?php echo $row['contact'];?></dd>
                                <dt class='col-md-4'>Player Status:</dt>
                                <dd class='col-md-6'><?php echo $row['status'];?></dd>
                            </dl>
                        </div>
                    </div>

                        <?php
                    }
                    }

                      ?>




                </div>
            </div>
        </div>
</main><!-- End Sidebar-->

  <!-- Vendor JS Files -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>