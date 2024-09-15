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
    if($player_name = $_POST['playername']=="" && $clubname=$_POST['clubname']== "")
    {
      $fillAlert = true;
    }
   
    if(isset($_POST['submit']) && isset($_FILES['image']))
    { 
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        move_uploaded_file($file_tmp,"../upload-images/".$file_name);
        $file_name=$_FILES['image']['name'];
        $player_name=$_POST['name'];
        $clubname = $_POST['clubname'];
        $play_type = $_POST['plytype'];
        $game_type = $_POST['gtype'];
        $score = $_POST['score'];
        $wins = $_POST['wins'];
        $match = $_POST['match'];
        $rating = $_POST['rating'];
        $sql = "INSERT INTO `top_players` (`id`, `img`, `player_name`, `club_name`, `play_type`, `game_type`, `top_score`, `total_matches`, `total_wins`, `ratings`) 
        VALUES (NULL, '$file_name', '$player_name', '$clubname', '$play_type', '$game_type', '$score', '$match', '$wins', '$rating')";
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
                            <label for="">Player Name</label>
                            <input type="text" name="name" id="" class="form-control" placeholder=""
                                aria-describedby="helpId">

                        </div>
                        <div class="form-group">
                            <label for="">Club Name</label>
                            <input type="text" name="clubname" id="" class="form-control" placeholder=""
                                aria-describedby="helpId">

                        </div>
                        <div class="form-group">
                            <label for="">Play Type</label>
                            <input type="text" name="plytype" id="" class="form-control" placeholder=""
                                aria-describedby="helpId">

                        </div>
                        <div class="form-group">
                            <label for="">Game Type</label>
                            <input type="text" name="gtype" id="" class="form-control" placeholder=""
                                aria-describedby="helpId">

                        </div>
                        <div class="form-group">
                            <label for="">Top score</label>
                            <input type="text" name="score" id="" class="form-control" placeholder=""
                                aria-describedby="helpId">

                        </div>
                        <div class="form-group">
                            <label for="">Total Matches</label>
                            <input type="text" name="match" id="" class="form-control" placeholder=""
                                aria-describedby="helpId">

                        </div>
                        <div class="form-group">
                            <label for="">Total wins</label>
                            <input type="text" name="wins" id="" class="form-control" placeholder=""
                                aria-describedby="helpId">

                        </div>
                        <div class="form-group">
                            <label for="">Total Ratings</label>
                            <input type="text" name="rating" id="" class="form-control" placeholder=""
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