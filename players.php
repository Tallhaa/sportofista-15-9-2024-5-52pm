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
  if($player_name = $_POST['playername']=="" && $email=$_POST['email']== "")
  {
    $fillAlert = true;
  }
  
  if(isset($_POST['submit']) && isset($_FILES['image']))
  { 
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      move_uploaded_file($file_tmp,"upload-images/".$file_name);
      $file_name=$_FILES['image']['name'];
      $player_name = $_POST['playername'];
      $email=$_POST['email'];
      $player_type=$_POST['playertype'];
      $game_type=$_POST['gametype'];
      $address=$_POST['address'];
      $contact=$_POST['contact'];
      $sql = "INSERT INTO `players` (`player_id`, `player_img`, `player_name`, `player_type`, `game_type`, `email`, `address`, `contact`)
       VALUES (NULL, '$file_name', '$player_name', '$player_type', '$game_type', '$email', '$address', '$contact')";
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
    <h1>Add Player</h1>
    <div class="container align-content-center  p-5  ">
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
              <label for="username">Player Name</label>
              <input type="text" name="playername" class="form-control">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
              <label for="player">Player Type</label>
              <input type="text" name="playertype" class="form-control">
            </div>
            <div class="form-group">
              <label for="game">Game Type</label>
              <input type="text" name="gametype" class="form-control">
            </div>
            <div class="form-group">
              <label for="address">Address</label>
              <input type="text" name="address" class="form-control">
            </div>
            <div class="form-group">
              <label for="contact">Contact No.</label>
              <input type="text" name="contact" class="form-control">
            </div>
            <input type="file" name="image">
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