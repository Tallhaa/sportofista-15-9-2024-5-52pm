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
                $sql = "SELECT * FROM `trainee`";
                $result = mysqli_query($conn, $sql);
                
                  ?>
                    <?php
                    if(mysqli_num_rows($result)>0)
                    {
                            foreach($result as $row)
                            {
                                ?>
                <div class="col-md-5 ">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo " upload-images/".$row['img'];?>" alt="" height=340px >
                        <div class="card-body">

                            <dl class='row py-4'>
                                <dt class='col-sm-6'>Name:</dt>
                                <dd class='col-sm-6'>
                                    <?php echo $row['name'];?>
                                </dd>
                                <dt class='col-sm-6'>Trainer Category:</dt>
                                <dd class='col-sm-6'>
                                    <?php echo $row['category'];?>
                                </dd>
                                <dt class='col-sm-6'>Training Experience:</dt>
                                <dd class='col-sm-6'>
                                    <?php echo $row['exp'];?>
                                </dd>
                                <dt class='col-sm-6'>Contact No.:</dt>
                                <dd class='col-sm-5'>
                                    <?php echo $row['contact'];?>
                                </dd>
                                <dt class='col-sm-6'>Email:</dt>
                                <dd class='col-sm-6'>
                                    <?php echo $row['email'];?>
                                </dd>
                                <dt class='col-sm-6'>Address:</dt>
                                <dd class='col-sm-6'>
                                    <?php echo $row['address'];?>
                                </dd>
                                <dt class='col-sm-6'>Fee:</dt>
                                <dd class='col-sm-6'>
                                    <?php echo $row['fee'];?>
                                </dd>
                                <dt class='col-sm-6'>Ratings:</dt>
                                <dd class='col-sm-6'>
                                    <?php echo $row['ratings'];?>
                                </dd>
                            </dl>
                            <div class='form-group text-center'>
                                <a name=' id=' class='btn btn-outline-primary px-5 rounded' href=''
                                    role='button'>Hire</a>
                            </div>

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
include ('footer.php')
?>