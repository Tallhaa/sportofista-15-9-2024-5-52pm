<?php
include ('header.php')
?>
<?php
include ('sidebar.php')
?>
<?php
include ('dbconnect.php');
?>
<?php
$insert=false;
$update=false;
$delete=false;
$fillAlert=false;
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
  if($player_name = $_POST['teamname']=="" && $email=$_POST['teamplayers']== "")
  {
    $fillAlert = true;
  }
  if(isset($_POST['submit']) && isset($_FILES['img']))
  {
        $file_name = $_FILES['img']['name'];
        $file_size = $_FILES['img']['size'];
        $file_tmp = $_FILES['img']['tmp_name'];
        $file_type = $_FILES['img']['type'];
        move_uploaded_file($file_tmp,"upload-images/".$file_name);
        $file_name=$_FILES['img']['name'];
        $team_name = $_POST['teamname'];
        $team_player = $_POST['teamplayers'];
        $total_player=$_POST['totalplayers'];
        $team_type=$_POST['teamtype'];
        $sql = "INSERT INTO `teams` (`team_id`, `team_image`, `team_name`, `team_players`, `team_type`, `total_players`) 
        VALUES (NULL, '$file_name', '$team_name', '$team_player', '$team_type', '$total_player')";
        $result = mysqli_query($conn,$sql);
        echo $result;
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
    <h1>Add Team</h1>
    <div class="container align-content-center  p-5">
      <div class="row">
        <div class="col-6 m-auto p-5 border shadow">
          <form action="" method="post" enctype="multipart/form-data">
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
            <div class="form-group">
              <label for="username">Team Name</label>
              <input type="text" name="teamname" class="form-control">
            </div>
            <div class="form-group">
              <label for="email">Team Players</label>
              <input type="text" name="teamplayers" class="form-control">
            </div>
            <div class="form-group">
              <label for="email">Total Players</label>
              <input type="text" name="totalplayers" class="form-control">
            </div>
            <div class="form-group">
              <label for="email">Team Type</label>
              <input type="text" name="teamtype" class="form-control">
            </div>
            <input type="file" name="img">
            <button class="btn btn-primary mt-3" type="submit" name="submit">Add Record</button>
          </form>
    
        </div>
      </div>
    </div>
  </div>
</main>

<?php
include ('footer.php')
?>