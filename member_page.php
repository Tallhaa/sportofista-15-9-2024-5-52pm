
<?php
include ('dbconnect.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Member Profiles</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendor/fontawesome-free-5.0.1/web-fonts-with-css/css/fontawesome-all.css">
  </head>
  <body>
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
                            <img class="card-img-top" src="<?php echo "upload-images/".$row['img'];?>" alt="">
                            <div class="card-body">
                                <h4 class="text-center"><?php echo $row['name'];?></h4>
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
