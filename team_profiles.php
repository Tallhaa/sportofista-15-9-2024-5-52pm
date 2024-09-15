<?php
 include ('header.php')
 ?>
<?php
 include ('sidebar.php')
 ?>
<?php
include ('dbconnect.php');
?>
<main id="main" class="main">
    <div class="pagetitle">
        <div class="container">
            <div class="row">

            
                    <?php
                $sql = "SELECT * FROM `teams`";
                $result = mysqli_query($conn, $sql);
                
                  ?>

                    <?php
                  if(mysqli_num_rows($result)>0)
                  {
                        foreach($result as $row)
                        {
                            ?>
                            <div class='col-md-6'>
                                <div class='card'>
            
                                    <img src="<?php echo "upload-images/".$row['team_image'];?>" alt="">
                                    <div class='card-body'>
                                        <dl class='row py-2'>
                                            <dt class='col-sm-4'>Name:</dt>
                                            <dd class='col-sm-6'>
                                                <?php echo $row['team_name']; ?>
                                            </dd>
                                            <dt class='col-md-4'>Team Players:</dt>
                                            <dd class='col-sm-6'><?php echo $row['team_players'];?></dd>
                                            <dt class='col-md-4'>Team Type:</dt>
                                            <dd class='col-md-6'><?php echo $row['team_type'];?></dd>
                                            <dt class='col-md-4'>Total Players:</dt>
                                            <dd class='col-md-6'><?php echo $row['total_players'];?></dd>
                                           
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
    </div>
</main>
<?php
 include ('footer.php')
 ?>