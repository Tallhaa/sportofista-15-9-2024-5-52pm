<?php
$fillAlert= false;
$showAlert = false;
$showError = false;
$error = false;
include 'dbconnect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{ 
  if($user_type = $_POST['usertype']=="clubowner")
  {
    
    $user_type = $_POST['usertype'];
    $owner_name = $_POST['owner_name'];
    $club_name = $_POST['clubname'];
    $club_type = $_POST['clubtype']; 
    $address = $_POST['address'];
    $contact_no = $_POST['contact'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    if ($username=$_POST['owner_name']=='' && $email = $_POST['email']=='')
    {
      $fillAlert=true;
    }
    else
    {
    $existSql = "SELECT * FROM `club_owner` WHERE email = '$email';";
    $result = mysqli_query($conn, $existSql);
    $numexistRows = mysqli_num_rows($result);
    if ($numexistRows > 0) 
    {
      $showError = "User Already Exits";
    } 

    if (($password == $cpassword)) 
    {
      $hash = password_hash($password,PASSWORD_DEFAULT);
      $sql = "INSERT INTO `club_owner` (`user_id`, `user_type`, `name`, `club_name`, `club_type`, `email`, `password`, `address`, `contact`) VALUES 
      (NULL, '$user_type', '$owner_name', '$club_name', ' $club_type', '$email', '$hash', '$address', '$contact_no');";
      $result = mysqli_query($conn, $sql);
      if ($result) 
      {
        $showAlert = true;
      }
    } 
    else 
    {
      $showError = 'password didnt match';
    }
    }
  }
  elseif($user_type = $_POST['usertype']=="sportsocietyhead")
  {
    $user_type = $_POST['usertype'];
    $society_head_name = $_POST['society_head_name'];
    $institute_name = $_POST['institute_name'];
    $institute_type = $_POST['institute_type']; 
    $address = $_POST['address'];
    $contact_no = $_POST['contact'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    if ($username=$_POST['society_head_name']=='' && $email = $_POST['email']=='')
    {
      $fillAlert=true;
    }
    else
    {
      $existSql = "SELECT * FROM `sport_society_head` WHERE email = '$email';";
    $result = mysqli_query($conn, $existSql);
    $numexistRows = mysqli_num_rows($result);
    if ($numexistRows > 0) 
    {
      $showError = "User Already Exits";
    } 

    if (($password == $cpassword)) 
    {
      $hash = password_hash($password,PASSWORD_DEFAULT);
      $sql = "INSERT INTO `sport_society_head` (`user_id`, `user_type`, `name`, `institute_name`, `institute_type`, `address`, `contact`, `email`, `password`) 
      VALUES (NULL, '$user_type', '$society_head_name', '$institute_name', '$institute_type', '$address', '$contact_no', '$email', '$hash');";
      $result = mysqli_query($conn, $sql);
      if ($result) 
      {
        $showAlert = true;
      }
    } 
    else 
    {
      $showError = 'password didnt match';
    }
    }
  }
  elseif($user_type = $_POST['usertype']=="trainer")
  {
    $user_type = $_POST['usertype'];
    $trainer_name = $_POST['trainer_name'];
    $trainer_exp = $_POST['trainer_exp'];
    $trainer_type = $_POST['trainer_type']; 
    $address = $_POST['address'];
    $contact_no = $_POST['contact'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    if ($username=$_POST['trainer_name']=='' && $email = $_POST['email']=='')
    {
      $fillAlert=true;
    }
    else
    {
      $existSql = "SELECT * FROM `trainer` WHERE email = '$email';";
    $result = mysqli_query($conn, $existSql);
    $numexistRows = mysqli_num_rows($result);
    if ($numexistRows > 0) 
    {
      $showError = "User Already Exits";
    } 

    if (($password == $cpassword)) 
    {
      $hash = password_hash($password,PASSWORD_DEFAULT);
      $sql = "INSERT INTO `trainer` (`user_id`, `user_type`, `trainer_name`, `trainer_exp`, `trainer_type`, `address`, `contact`, `email`, `password`) 
      VALUES (NULL, '$user_type', '$trainer_name', '$trainer_exp', '$trainer_type', '$address', '$contact_no', '$email', '$hash');";
      $result = mysqli_query($conn, $sql);
      if ($result) 
      {
        $showAlert = true;
      }
    } 
    else 
    {
      $showError = 'password didnt match';
    }
    }
  }
  
  elseif($user_type = $_POST['usertype']=="player")
  {
    $user_type = $_POST['usertype'];
    $player_name = $_POST['player_name'];
    $player_type = $_POST['player_type'];
    $game_type = $_POST['player_type']; 
    $address = $_POST['address'];
    $contact_no = $_POST['contact'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    if ($username=$_POST['player_name']=='' && $email = $_POST['email']=='')
    {
      $fillAlert=true;
    }
    else
    {
      $existSql = "SELECT * FROM `player` WHERE email = '$email';";
    $result = mysqli_query($conn, $existSql);
    $numexistRows = mysqli_num_rows($result);
    if ($numexistRows > 0) 
    {
      $showError = "User Already Exits";
    } 

    if (($password == $cpassword)) 
    {
      $hash = password_hash($password,PASSWORD_DEFAULT);
      $sql = "INSERT INTO `player` (`id`, `user_type`, `player_name`, `player_type`, `game_type`, `address`, `contact`, `email`, `password`) 
      VALUES (NULL, '$user_type', '$player_name', '$player_type', '$game_type', '$address', '$contact_no', '$email', '$hash')";
      $result = mysqli_query($conn, $sql);
      if ($result) 
      {
        $showAlert = true;
      }
    } 
    else 
    {
      $showError = 'password didnt match';
    }
    }
  }
 
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="assets/fontawesome-free-5.15.4-web/css/all.css">
  <script src="js/bootstrap.js"></script>

</head>

<body style="background: url(images/1000_F_508803780_s4EkVq5D9TtFLiZ0X1ghZcYek0WWVvtQ.jpg);">


  <div class="container align-content-center  p-5">
    <div class="row">
      <div class="col-6 m-auto p-5 bg-light border-4 shadow-lg">
        <h3 class="text-center p-3">Sign Up As:</h3>
        <ul class="nav nav-pills nav-justified mb-3" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active btn-light" id="pills-home-tab" data-bs-toggle="pill"
              data-bs-target="#club-owner" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Club
              Owner</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#sport-head"
              type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Sport Society
              Head</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#trainer"
              type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Trainer</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#player" type="button"
              role="tab" aria-controls="pills-contact" aria-selected="false">Player</button>
          </li>
        </ul>

        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="club-owner" role="tabpanel" aria-labelledby="pills-home-tab"
            tabindex="0">

            <?php
            if ($showAlert) {
              echo '
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> You are created account successfully
            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
            }
            if ($showError) {
              echo '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Error!</strong>' . $showError . '
              <button type="button" class=" btn-close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
            }
            if ($error) {
              echo '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Error!</strong>'.$error.'
              <button type="button" class=" btn-close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
            }
            if($fillAlert){
              echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong></strong> Please fill up the entry fields.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            }
              ?>
            <form action="" method="post" class="form">
              <div class="form-group">
                <select class="form-select" name="usertype" id="">
                  <option selected value="clubowner">Club Owner</option>
                </select>
              </div>
              <div class="form-group">
                <label for="username">User Name</label>
                <input type="text" name="owner_name" maxlength="16" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="email">Club Name</label>
                <input type="text" name="clubname" maxlength="16" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="email">Club Type</label>
                <input type="text" name="clubtype" maxlength="16" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="email">Address</label>
                <input type="text" name="address" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="email">Contact No.</label>
                <input type="text" type="number" name="contact" minlength="11" maxlength="11" class="form-control"
                  required>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" maxlength="16" pattern=".{8,}" title="Eight or more characters"
                  class="form-control" required>
              </div>
              <div class="form-group">
                <label for="confirmpassword">Confirm Password</label>
                <input type="password" name="cpassword" class="form-control" required>
              </div>
              <div class="form-group py-3">
                
                <button class=" btn btn-outline-primary text-center form-control"  type="submit">Sign Up</button>
              </div>
              
            </form>
          </div>
          <div class="tab-pane fade" id="sport-head" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">

            <form action="" method="post" class="form">
              <div class="form-group">
                <select class="form-select" name="usertype" id="">
                  <option selected value="sportsocietyhead">Sport Society Head</option>
                </select>
              </div>
              <div class="form-group">
                <label for="username">User Name</label>
                <input type="text" name="society_head_name" class="form-control" required pattern="[A-Za-z]" required>
              </div>
              <div class="form-group">
                <label for="email">Institute Name</label>
                <input type="text" name="institute_name" pattern="[A-Za-z]" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="email">Intitute Type</label>
                <input type="text" name="institute_type" pattern="[A-Za-z]" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="email">Address</label>
                <input type="text" name="address" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="email">Contact No.</label>
                <input type="number" type="number" name="contact" minlength="11" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" maxlength="16" pattern=".{8,}" title="Eight or more characters"
                  class="form-control" required>
              </div>
              <div class="form-group">
                <label for="confirmpassword">Confirm Password</label>
                <input type="password" name="cpassword" class="form-control" required>
              </div>
              <div class="form-group py-3">
                
                <button class=" btn btn-outline-primary text-center form-control"  type="submit">Sign Up</button>
              </div>
            </form>
          </div>
          <div class="tab-pane fade" id="trainer" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
            <form action="" method="post" class="form">
              <div class="form-group">
                <select class="form-select" name="usertype" id="">
                  <option selected value="trainer">Trainer</option>
                </select>
              </div>
              <div class="form-group">
                <label for="username">Trainer Name</label>
                <input type="text" name="trainer_name" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="email">Trainer Experience</label>
                <input type="text" name="trainer_exp" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="email">Trainer Type</label>
                <input type="text" name="trainer_type" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="email">Address</label>
                <input type="text" name="address" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="email">Contact No.</label>
                <input type="text" type="number" name="contact" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" maxlength="16" pattern=".{8,}" title="Eight or more characters"
                  class="form-control" required>
              </div>
              <div class="form-group">
                <label for="confirmpassword">Confirm Password</label>
                <input type="password" name="cpassword" class="form-control" required>
              </div>
              <div class="form-group py-3">
                
                <button class=" btn btn-outline-primary text-center form-control"  type="submit">Sign Up</button>
              </div>
            </form>
          </div>
          <div class="tab-pane fade" id="player" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
            <form action="" method="post" class="form">
              <div class="form-group">
                <select class="form-select" name="usertype" id="">
                  <option selected value="player">Player</option>
                </select>
              </div>
              <div class="form-group">
                <label for="username">Player Name</label>
                <input type="text" name="player_name" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="email">Player Type</label>
                <input type="text" name="player_type" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="email">Game Type</label>
                <input type="text" name="game_type" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="email">Address</label>
                <input type="text" name="address" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="email">Contact No.</label>
                <input type="text" type="number" name="contact" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" maxlength="16" pattern=".{8,}" title="Eight or more characters"
                  class="form-control" required>
              </div>
              <div class="form-group">
                <label for="confirmpassword">Confirm Password</label>
                <input type="password" name="cpassword" class="form-control" required>
              </div>
              <div class="form-group py-3">
                
                <button class=" btn btn-outline-primary text-center form-control"  type="submit">Sign Up</button>
              </div>
              
            </form>
          </div>
          <h5 class="text-center">Already Have Account!</h5>
            <a href="login.php" class="text-center"><h5>Sign In</h5></a>
        </div>
      </div>
    </div>
  </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>

</html>