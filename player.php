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
                    <span> <i class="fas fa-user"></i>Menus</span>
                </a>
                <ul id="components-nav" class="nav-content active " data-bs-parent="#sidebar-nav">
                    <li><a href="join.php">Club joining</a></li>
                    <li><a href="">My Performance Board</a></li>
                    <li><a href="">Edit Profile</a></li>
                </ul>
            </li>
        </ul>

    </aside>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>My Profile</h1>
            <div class="container py-5">
                <div class="row ">
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="upload-images/afridi.jpg" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Profile Picture</h4>
                               
                            </div>
                        </div>
                    </div>
                <?php
                $sql = "SELECT * FROM `player`";
                $result = mysqli_query($conn, $sql);
                
                  ?>
                        
                    <?php

                    if(mysqli_num_rows($result)>0)
                    {
                            foreach($result as $row)
                            {
                                ?>
                    <div class="col-md-6">
                        <div class="card">
                        
                            <div class="card-body">
                                <dl class='row'>
                                    <dt class='col-sm-6'>Name:</dt>
                                    <dd class='col-sm-6'>
                                        <?php echo $row['player_name'];  ?>
                                    </dd>


                                    </dd>
                                    <dt class='col-sm-6'>Player Type:</dt>
                                    <dd class='col-sm-5'>
                                    <?php echo $row['player_type'];  ?>
                                    </dd>

                                    <dt class='col-sm-6'>Game Type:</dt>
                                    <dd class='col-sm-6'>
                                    <?php echo $row['game_type'];  ?>
                                    </dd>

                                    <dt class='col-sm-6'>Addresss:</dt>
                                    <dd class='col-sm-6'>
                                    <?php echo $row['address'];  ?>
                                    </dd>
                                    <dt class='col-sm-6'>Contact:</dt>
                                    <dd class='col-sm-6'>
                                    <?php echo $row['contact'];  ?>
                                    </dd>
                                    <dt class='col-sm-6'>Email:</dt>
                                    <dd class='col-sm-6'>
                                    <?php echo $row['email'];  ?>
                                    </dd>


                                </dl>
                            </div>
                        </div>
                    </div>
                    <?php
                                }
                                }

                                ?>
                </div>
            </div>
        </div>
    </main>
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