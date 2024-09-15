<?php
 include ('adminheader.php')
 ?>
<?php
 include ('adminsidebar.php')
 ?>
<?php include ('dbconnect.php')
?>

<?php
$insert=false;
$update=false;
$delete=false;
$fillAlert=false;
if($_SERVER['REQUEST_METHOD']=='POST')
{
    if($player_name = $_POST['name']=="" && $clubname=$_POST['category']== "")
    {
      $fillAlert = true;
      
    }

    elseif(isset($_POST['submit']) && isset($_FILES['image']))
    { 
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        move_uploaded_file($file_tmp,"../upload-images/".$file_name);
        $file_name=$_FILES['image']['name'];
        $name = $_POST['name'];
        $clubname = $_POST['clubname'];
        $clubtype = $_POST['clubtype'];
        $contact = $_POST['contact'];
        $email= $_POST['email'];
        $address = $_POST['address'];
        $total_players = $_POST['total_player'];
        $total_teams = $_POST['total_team'];
        $tournament = $_POST['tournament'];
        $top_player = $_POST['top_player'];
        $top_teams = $_POST['top_team'];
        $sql = "INSERT INTO `member_profile` (`id`, `img`, `name`, `club_name`, `club_type`, `address`, `contact`, `email`, `total_players`, `total_teams`, `tournament_win`, `top_player`, `top_team`)
         VALUES (NULL, '$file_name', '$name', '$clubname', '$clubtype', '$address', '$contact', '$email', '$total_players', '$top_teams', '$tournament', '$top_player', '$top_teams')";
        $result = mysqli_query($conn, $sql);
        if($result)
        {
          $insert=true;
        }
        else
        {
          echo "your data was not inserted Error! --->". mysqli_connect_error();
        }
      
    }  
}

?>


<main id="main" class="main">
    <div class="pagetitle">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-md-6 ">
                    <h3>Add Details</h3>
                                        <?php
                    if($insert){
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong></strong> Notes have successfully added.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                    }
                    ?>
                                        <?php
                    if($delete){
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong></strong> record was deleted successfully.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                    }
                    ?>
                                        <?php
                    if($update){
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong></strong> record is successfully updated.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                    }
                    ?>
                                        <?php
                    if($fillAlert){
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong></strong> Please fill up the entry fields.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                    }
                    ?>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" id="" class="form-control" placeholder=""
                                aria-describedby="helpId">

                        </div>
                        <div class="form-group">
                            <label for="">Club Name</label>
                            <input type="text" name="clubname" id="" class="form-control" placeholder=""
                                aria-describedby="helpId">

                        </div>
                        <div class="form-group">
                            <label for="">Club Type</label>
                            <input type="text" name="clubtype" id="" class="form-control" placeholder=""
                                aria-describedby="helpId">

                        </div>
                        <div class="form-group">
                            <label for="">Total Players</label>
                            <input type="text" name="total_player" id="" class="form-control" placeholder=""
                                aria-describedby="helpId">

                        </div>
                        <div class="form-group">
                            <label for="">Total Teams</label>
                            <input type="text" name="total_team" id="" class="form-control" placeholder=""
                                aria-describedby="helpId">

                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" id="" class="form-control" placeholder=""
                                aria-describedby="helpId">

                        </div>
                        <div class="form-group">
                            <label for="">Address</label>
                            <input type="text" name="address" id="" class="form-control" placeholder=""
                                aria-describedby="helpId">

                        </div>
                        <div class="form-group">
                            <label for="">Contact</label>
                            <input type="text" name="contact" id="" class="form-control" placeholder=""
                                aria-describedby="helpId">

                        </div>
                        <div class="form-group">
                            <label for="">Tournament Win</label>
                            <input type="text" name="tournament" id="" class="form-control" placeholder=""
                                aria-describedby="helpId">


                        </div>
                        <div class="form-group">
                            <label for="">Top Player</label>
                            <input type="text" name="top_player" id="" class="form-control" placeholder=""
                                aria-describedby="helpId">


                        </div>
                        <div class="form-group">
                            <label for="">Top Team</label>
                            <input type="text" name="top_team" id="" class="form-control" placeholder=""
                                aria-describedby="helpId">


                        </div>
                        <div class="form-group py-4">
                            <input type="file" name="image">
                            <button type="submit" name="submit" class="btn btn-primary">Add Record</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
 include ('adminfooter.php')
 ?>