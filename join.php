<?php
include ('dbconnect.php');
?>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="player.php" class="logo d-flex align-items-center">
                <span class="d-none d-lg-block">Sportofista</span>
            </a>
            <i class=" toggle-sidebar-btn"><i class="fa fa-bars" aria-hidden="true"></i></i>
        </div><!-- End Logo -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <span class="d-none d-md-block dropdown-toggle ps-2"> <i class="fas fa-user"></i>Guest
                            Player</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">

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
                <a class="nav-link " href="player.php">
                    <span> <i class="fas fa-tachometer-alt    "></i> Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                    <span> <i class="fas fa-user    "></i>Menus</span>
                </a>
                <ul id="components-nav" class="nav-content active " data-bs-parent="#sidebar-nav">
                    <li><a href="join.php">Club joining</a></li>
                    <li><a href="">Edit Profile</a></li>
                </ul>
            </li>
        </ul>

    </aside>
    <!-- Button trigger modal -->
    <!-- Modal -->
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center">Club Joing</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="post" class="form">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="username">Your Name</label>
                            <input type="text" name="player_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Play Type</label>
                            <input type="text" name="player_type" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Game Type</label>
                            <input type="text" name="game_type" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Address</label>
                            <input type="text" name="address" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Contact No.</label>
                            <input type="text" type="number" name="contact" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Send Request</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
    <main id="main" class="main">
        <div class="pagetitle">
            <div class="container">
                <div class="row justify-content-center py-5">
                    <h3 class="text-center">Member Details</h3>
                    <hr>
                    <?php
                $sql = "SELECT * FROM `member_profile`";
                $result = mysqli_query($conn, $sql);
                
                  ?>
                    <?php

        if(mysqli_num_rows($result)>0)
        {
                foreach($result as $row)
                {
                    ?>
                    <div class="col-md-4 py-4">
                        <div class="card shadow">
                            <img class="card-img-top" src="<?php echo " upload-images/".$row['img'];?>" alt="">
                            <div class="card-body">
                                <h4 class="text-center">
                                    <?php echo $row['name'];?>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 py-4">
                        <div class="card shadow">
                            <h3 class="text-center py-3">Member Profile</h3>
                            <hr>
                            <div class="card-body">
                                <dl class='row'>
                                    <dt class='col-sm-6'>Name:</dt>
                                    <dd class='col-sm-6'>
                                        <?php echo $row['name'];?>
                                    </dd>
                                    <dt class='col-sm-6'>Club Name:</dt>
                                    <dd class='col-sm-6'>
                                        <?php echo $row['club_name'];?>
                                    </dd>
                                    <dt class='col-sm-6'>Club Type:</dt>
                                    <dd class='col-sm-5'>
                                        <?php echo $row['club_type'];?>
                                    </dd>

                                    <dt class='col-sm-6'>Club Address:</dt>
                                    <dd class='col-sm-6'>
                                        <?php echo $row['address'];?>
                                    </dd>
                                    <dt class='col-sm-6'>Total Players:</dt>
                                    <dd class='col-sm-6'>
                                        <?php echo $row['total_players'];?>
                                    </dd>
                                    <dt class='col-sm-6'>Total Teams:</dt>
                                    <dd class='col-sm-6'>
                                        <?php echo $row['total_teams'];?>
                                    </dd>
                                    <dt class='col-sm-6'>Tournament Win:</dt>
                                    <dd class='col-sm-6'>
                                        <?php echo $row['tournament_win'];?>
                                    </dd>
                                    <dt class='col-sm-6'>Top Player:</dt>
                                    <dd class='col-sm-6'>
                                        <?php echo $row['top_player'];?>
                                    </dd>
                                    <dt class='col-sm-6'>Top Team:</dt>
                                    <dd class='col-sm-6'>
                                        <?php echo $row['top_team'];?>
                                    </dd>

                                </dl>
                                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal"
                                    data-target="#modelId">
                                    Join
                                </button>
                            </div>
                        </div>
                    </div>
                    <?php
                          }
                          }
      
                            ?>
                    <hr>
                </div>
            </div>
        </div>
    </main>
    <script src="../assets/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="vendor/datatables.min.js"></script>
    <!-- Template Main JS File -->
</body>

</html>