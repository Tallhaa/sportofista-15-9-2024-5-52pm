<?php
include ('trainer.header.php')
?>
<?php
include ('trainer.sidebar.php')
?>
<?php
include ('dbconnect.php');
?>
<main id="main" class="main">
    <div class="pagetitle">
    <div class="container">
            <div class="row">
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
                            <div class='col-md-6'>

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
                            </div>

                        <?php
                    }
                    }

                      ?>




                </div>
            </div>
        </div>
</main>
<?php
 include ('trainer.footer.php')
 ?>