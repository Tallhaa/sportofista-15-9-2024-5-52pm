<?php include('../dbconnect.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Club Owner</title>
  <link rel="stylesheet" href="../css/bootstrap.css">

</head>

<body>
  <section class="section profile">
    <div class="row p-md-5">
      <h4 style="text-align: center;">Profile Details</h4>
      <hr>



        <div class='col-md-8'>
          <?php
                $sql = "SELECT * FROM `club_owner`";
                $result = mysqli_query($conn, $sql);
                
                  ?>

          <?php
                  if(mysqli_num_rows($result)>0)
                  {
                        foreach($result as $row)
                        {
                            ?>
          <div class='card'>
            <div class='card-body'>
              <dl class='row py-2'>
                <dt class='col-sm-4'>Name:</dt>
                <dd class='col-sm-6'>
                  <?php echo $row['name']; ?>
                </dd>
                <dt class='col-md-4'>Club Name:</dt>
                <dd class='col-sm-6'>
                  <?php echo $row['club_name'];?>
                </dd>
                <dt class='col-md-4'>Club Type:</dt>
                <dd class='col-md-6'>
                  <?php echo $row['club_type'];?>
                </dd>
                <dt class='col-md-4'>Address:</dt>
                <dd class='col-md-6'>
                  <?php echo $row['address'];?>
                </dd>
                <dt class='col-md-4'>Contact:</dt>
                <dd class='col-md-6'>
                  <?php echo $row['contact'];?>
                </dd>
                <dt class='col-sm-4'>Email:</dt>
                <dd class='col-sm-6'>
                  <?php echo $row['email'];?>
                </dd>


              </dl>
            </div>
          </div>

          <?php
                    }
                    }

                      ?>

        </div>
      </div>
  </section>



  <script src="../js/bootstrap.js"></script>
</body>

</html>