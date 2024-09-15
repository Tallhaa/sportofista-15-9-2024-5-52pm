<?php
include('dbconnect.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendor/fontawesome-free-5.0.1/web-fonts-with-css/css/fontawesome-all.css">
    <link rel="stylesheet" href="style2.css">

</head>

<body>
    <div id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h1 id="logo">Sportofista</h1>
                </div>
                <div class="col-md-8 ">
                    <ul id="menu" class="float-md-end">
                        <li><a href="index.php">
                                <h5>Home</h5>
                            </a></li>
                        <li><a href="about.html">
                                <h5>About Us</h5>
                            </a></li>
                        <li><a href="login.php">
                                <h5>Login</h5>
                            </a></li>
                        <li><a href="register.php">
                                <h5>Register</h5>
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="banner">
    </div>

    <section class="" style="background-color:#fff ; padding-bottom: 5%; ">
        <div class="container section">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-head">
                        Our Members
                    </h2>
                </div>
            </div>
        </div>
        <div id="carouselId" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                <li data-target="#carouselId" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <?php
                        $sql = "SELECT * FROM `member_profile`";
                        $result = mysqli_query($conn, $sql);
                        
                        ?>
                <div class="carousel-item active">
                    <div class="row">
                        <?php
                  if(mysqli_num_rows($result)>0)
                  {
                        foreach($result as $row)
                        {
                            ?>
                        <div class='col-md-3 mx-md-auto'>
                            <div class='card shadow'>
                                <img class="card-img-top" src="<?php echo " upload-images/".$row['img'];?>" alt=""
                                style="height: 340px ;">
                                <div class='card-body'>
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
                                        <dt class='col-sm-6'>Tournament Win:</dt>
                                        <dd class='col-sm-6'>
                                            <?php echo $row['tournament_win'];?>
                                        </dd>

                                    </dl>
                                    <a name=' id=' class='btn btn-outline-primary rounded-5 px-4 text-center' href='member_page.php' role='button'>View
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    }

                      ?>
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="row">
                        <?php
                        if(mysqli_num_rows($result)>0)
                        {
                              foreach($result as $row)
                              {
                                  ?>
                        <div class='col-md-3 mx-md-auto'>
                            <div class='card shadow'>
                                <img class="card-img-top" src="<?php echo " upload-images/".$row['img'];?>" alt=""
                                style="height: 340px ;">
                                <div class='card-body'>
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
                                        <dt class='col-sm-6'>Tournament Win:</dt>
                                        <dd class='col-sm-6'>
                                            <?php echo $row['tournament_win'];?>
                                        </dd>

                                    </dl>
                                    <a name='' class='btn btn-outline-primary rounded-5 py px-5' href='member_page.php' role='button'>View More</a>
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
            <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>

            </a>
            <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
    </section>

    <section class="" style="background-color:#273c75 ; padding-bottom: 5%; ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section1">
                        Top Players
                    </h2>
                </div>
            </div>
        </div>
        <div id="carouselId" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselId" data-slide-to="0"></li>
                <li data-target="#carouselId" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="row">
                        <?php
                        $sql = "SELECT * FROM `top_players`";
                        $result = mysqli_query($conn, $sql);
                        
                        ?>
                        <?php
                  if(mysqli_num_rows($result)>0)
                  {
                        foreach($result as $row)
                        {
                            ?>
                        <div class='col-md-3 mx-md-auto'>
                            <div class='card shadow'>
                                <img class="card-img-top" src="<?php echo " upload-images/".$row['img'];?>" alt=""
                                style="height: 340px ;">
                                <div class='card-body'>
                                    <dl class='row'>
                                        <dt class='col-sm-4'>Name:</dt>
                                        <dd class='col-sm-6'>
                                            <?php echo $row['player_name'];?>
                                        </dd>
                                        <dt class='col-sm-4'>Club Name:</dt>
                                        <dd class='col-sm-6'>
                                            <?php echo $row['club_name'];?>
                                        </dd>
                                        <dt class='col-sm-4'>Play Type:</dt>
                                        <dd class='col-sm-5'>
                                            <?php echo $row['play_type'];?>
                                        </dd>
                                        <dt class='col-sm-4'>Top Score:</dt>
                                        <dd class='col-sm-6'>
                                            <?php echo $row['top_score'];?>
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
                <div class="carousel-item ">
                    <div class="row">
                        <?php
                        $sql = "SELECT * FROM `top_players`";
                        $result = mysqli_query($conn, $sql);
                        
                        ?>
                        <?php
                  if(mysqli_num_rows($result)>0)
                  {
                        foreach($result as $row)
                        {
                            ?>
                        <div class='col-md-3 mx-md-auto'>
                            <div class='card shadow'>
                                <img class="card-img-top" src="<?php echo " upload-images/".$row['img'];?>" alt=""
                                style="height: 340px ;">
                                <div class='card-body'>
                                    <dl class='row'>
                                        <dt class='col-sm-4'>Name:</dt>
                                        <dd class='col-sm-6'>
                                            <?php echo $row['player_name'];?>
                                        </dd>
                                        <dt class='col-sm-4'>Club Name:</dt>
                                        <dd class='col-sm-6'>
                                            <?php echo $row['club_name'];?>
                                        </dd>
                                        <dt class='col-sm-4'>Play Type:</dt>
                                        <dd class='col-sm-5'>
                                            <?php echo $row['play_type'];?>
                                        </dd>
                                        <dt class='col-sm-4'>Top Score:</dt>
                                        <dd class='col-sm-6'>
                                            <?php echo $row['top_score'];?>
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

            <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>

            </a>
            <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
    </section>
    <section class="" style="background-color:#fff ; padding-bottom: 5%; ">
        <div class="container section">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-head">
                        Upcoming Tournaments
                    </h2>
                </div>
            </div>
        </div>
        <div id="carouselId" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                <li data-target="#carouselId" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="row">

                        <div class="col-md-8 mx-md-auto">
                            <div class="card border shadow-lg">
                                <img class="card-img-top" src="images/crick.jpg" alt="" style="height: 340px ;">
                                <div class="card-body">
                                    <dl class="row">
                                        <dt class="col-sm-4">Place:</dt>
                                        <dd class="col-sm-6">Lahore</dd>
                                        <dt class="col-sm-4">Game:</dt>
                                        <dd class="col-sm-6">Cricket</dd>
                                        <dt class="col-sm-4">Entry Fee:</dt>
                                        <dd class="col-sm-5">3000</dd>
                                        <dt class="col-sm-4">Win Prize</dt>
                                        <dd class="col-sm-6">20000</dd>
                                    </dl>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="row">
                        <div class="col-md-8 mx-md-auto">
                            <div class="card border shadow-lg">
                                <img class="card-img-top" src="images/20465809.jpg" alt="" style="height: 340px ;">
                                <div class="card-body">
                                    <dl class="row">
                                        <dt class="col-sm-4">Place:</dt>
                                        <dd class="col-sm-6">Lahore</dd>
                                        <dt class="col-sm-4">Game:</dt>
                                        <dd class="col-sm-6">Cricket</dd>
                                        <dt class="col-sm-4">Entry Fee:</dt>
                                        <dd class="col-sm-5">3000</dd>
                                        <dt class="col-sm-4">Win Prize</dt>
                                        <dd class="col-sm-6">20000</dd>
                                    </dl>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="row">
                        <div class="col-md-8 mx-md-auto">
                            <div class="card shadow">
                                <img class="card-img-top" src="images/1.jpg" alt="" style="height: 340px ;">
                                <div class="card-body">
                                    <dl class="row">
                                        <dt class="col-sm-4">Place:</dt>
                                        <dd class="col-sm-6">Lahore</dd>
                                        <dt class="col-sm-4">Game:</dt>
                                        <dd class="col-sm-6">Cricket</dd>
                                        <dt class="col-sm-4">Entry Fee:</dt>
                                        <dd class="col-sm-5">3000</dd>
                                        <dt class="col-sm-4">Win Prize</dt>
                                        <dd class="col-sm-6">20000</dd>
                                    </dl>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>

            </a>
            <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
    </section>
    <section class="" style="background-color: #273c75 ; padding-bottom: 5%; ">
        <div class="container section">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section2">
                        Upcoming Events
                    </h2>
                </div>
            </div>
        </div>
        <div id="carouselId" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                <li data-target="#carouselId" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="row">

                        <div class="col-md-8 mx-md-auto">
                            <div class="card border shadow-lg">
                                <img class="card-img-top" src="images/crick.jpg" alt="" style="height: 340px ;">
                                <div class="card-body">
                                    <dl class="row">
                                        <dt class="col-sm-4">Place:</dt>
                                        <dd class="col-sm-6">Lahore</dd>
                                        <dt class="col-sm-4">Game:</dt>
                                        <dd class="col-sm-6">Cricket</dd>
                                        <dt class="col-sm-4">Entry Fee:</dt>
                                        <dd class="col-sm-5">4000</dd>
                                        <dt class="col-sm-4">Win Prize</dt>
                                        <dd class="col-sm-6">20000</dd>
                                    </dl>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="row">
                        <div class="col-md-8 mx-md-auto">
                            <div class="card border shadow-lg">
                                <img class="card-img-top" src="images/20465809.jpg" alt="" style="height: 340px ;">
                                <div class="card-body">
                                    <dl class="row">
                                        <dt class="col-sm-4">Place:</dt>
                                        <dd class="col-sm-6">Lahore</dd>
                                        <dt class="col-sm-4">Game:</dt>
                                        <dd class="col-sm-6">Cricket</dd>
                                        <dt class="col-sm-4">Entry Fee:</dt>
                                        <dd class="col-sm-5">4000</dd>
                                        <dt class="col-sm-4">Win Prize</dt>
                                        <dd class="col-sm-6">20000</dd>
                                    </dl>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="row">
                        <div class="col-md-8 mx-md-auto">
                            <div class="card shadow">
                                <img class="card-img-top" src="images/1.jpg" alt="" style="height: 340px ;">
                                <div class="card-body">
                                    <dl class="row">
                                        <dt class="col-sm-4">Place:</dt>
                                        <dd class="col-sm-6">Lahore</dd>
                                        <dt class="col-sm-4">Game:</dt>
                                        <dd class="col-sm-6">Cricket</dd>
                                        <dt class="col-sm-4">Entry Fee:</dt>
                                        <dd class="col-sm-5">4000</dd>
                                        <dt class="col-sm-4">Win Prize</dt>
                                        <dd class="col-sm-6">20000</dd>
                                    </dl>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>

            </a>
            <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
    </section>
    <div class="container section">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-head">
                    Our Services
                </h2>
            </div>
            <div class="col-md-4">
                <div class="service-box">
                    <i class="fas fa-check-circle fa-4x "></i>
                    <h3>User Friendly System</h3>
                    <p>We are providing easy to use system even your students and players can easilly use it.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-box">
                    <i class="fas fa-trophy fa-4x"></i>
                    <h3>Sports Tournament/Events</h3>
                    <p>We will provide you the sporst tournaments and event facility to our customers and members.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-box">
                    <i class="fas fa-address-card fa-4x"></i>
                    <h3>Extra Facilities</h3>
                    <p>We are also providing sports accessories, ground booking and trainer for training players to our
                        member where they can play and fulfill there sports need.</p>
                </div>
            </div>
        </div>
    </div>
    <div id="footer-sidebar">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-widget">
                        <h4>Mission</h4>
                        <p>Our mission is to facilitate and provide different sports services to sports club and sports
                            institutes. Where they can get different kind of sports services like ground,
                            accessories,<br>
                            tournament and events bookings. The goal of our sports site is to provide digital and hassle
                            free sports environment. </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-widget">
                        <h4>Services</h4>
                        <ul>
                            <li><a href="">Booking</a></li>
                            <li><a href="">Sports Festivals & Events</a></li>
                            <li><a href="">Sports Tournaments</a></li>
                            <li><a href="">Trainer</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-widget">
                        <h4>Address</h4>
                        <Address>
                            <b>Sportofista.</b><br>
                            Jia Musa,Shahdara, Lahore<br>
                            Phone: +921234567890
                        </Address>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">Copyright 2022. <i class="fa fa-copyright" aria-hidden="true"></i></div>
                <div class="col-md-6">
                    <ul id="social-icons" class="float-md-end">
                        <i class="fa fa-facebook-official" aria-hidden="true"></i>
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>