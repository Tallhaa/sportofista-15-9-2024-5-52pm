<?php
$fillAlert=false;
$login = false;
$showError = false;
include 'dbconnect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  if ($_POST['usertype']=='Clubowner')
  {
    $usertype = $_POST['usertype'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM `club_owner` WHERE user_type = '$usertype'  AND email='$email'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($email = $_POST['email']=="" && $password=$_POST['password']=="")
    {
      $fillAlert =true;
    }
    elseif ($num == 1) {
      while($row=mysqli_fetch_assoc($result))
      {
        if(password_verify($password,$row['password']))
        {
          $login = true;
          session_start();
          $_SESSION['loggedin'] = true;
          $_SESSION['email']=$email;
          header('location: clubowner.php');

        }
        else 
        {
          $showError = 'invalid credentials';
        }
      }
  
    } 
    else {
      $showError = 'invalid credentials';
    }
  }
  if ($_POST['usertype']=='SportSocietyHead')
  {
    $usertype = $_POST['usertype'];
   
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM `sport_society_head` WHERE user_type = '$usertype' AND email='$email'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($email = $_POST['email']=="" && $password=$_POST['password']=="")
    {
      $fillAlert =true;
    }
    elseif ($num == 1) {
      while($row=mysqli_fetch_assoc($result))
      {
        if(password_verify($password,$row['password']))
        {
          $login = true;
          session_start();
          $_SESSION['loggedin'] = true;
          $_SESSION['email']=$email;
          header('location: sportsocietyhead.php');

        }
        else 
        {
          $showError = 'invalid credentials';
        }
      }
    } 
    else {
      $showError = 'invalid credentials';
    }
  }
  if ($_POST['usertype']=='Trainer')
  {
    $usertype = $_POST['usertype'];
   
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM `trainer` WHERE user_type = '$usertype'  AND email = '$email' AND password = '$password';";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($email = $_POST['email']=="" && $password=$_POST['password']=="")
    {
      $fillAlert =true;
    }
    elseif ($num == 1) {
      while($row=mysqli_fetch_assoc($result))
      {
        if(password_verify($password,$row['password']))
        {
          $login = true;
          session_start();
          $_SESSION['loggedin'] = true;
          $_SESSION['email']=$email;
          header('location: trainer.php');

        }
        else 
        {
          $showError = 'invalid credentials';
        }
      }
     
    } 
    else {
      $showError = 'invalid credentials';
    }
  }
  if ($_POST['usertype']=='Player')
  {
    $usertype = $_POST['usertype'];
   
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM `player` WHERE user_type = '$usertype' AND email = '$email'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($email = $_POST['email']=="" && $password=$_POST['password']=="")
    {
      $fillAlert =true;
    }
    elseif ($num == 1) {
      while($row=mysqli_fetch_assoc($result))
      {
        if(password_verify($password,$row['password']))
        {
          $login = true;
          session_start();
          $_SESSION['loggedin'] = true;
          $_SESSION['email']=$email;
          header('location: player.php');

        }
        else 
        {
          $showError = 'invalid credentials';
        }
      }
     
    } 
    else {
      $showError = 'invalid credentials';
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
  <title>Login</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="assets/fontawesome-free-5.15.4-web/css/all.css">
  <link rel="stylesheet" href="style3.css">
  <script src="js/bootstrap.js"></script>

</head>

<body style="background: url(images/1000_F_508803780_s4EkVq5D9TtFLiZ0X1ghZcYek0WWVvtQ.jpg);">


  <div class="container p-5">
    <div class="row justify-content-center">
      <div class="col-5 m-auto p-5">
        <div class="card align-content-center shadow" style="border-radius: 1rem ;">

          <div class="card-body text-center">

            <h4 class="text-center py-3">Sign In</h4>
            <i class="fa fa-user fa-4x pb-3" aria-hidden="true"></i>
            <form action="" method="post" class="form justify-content-center">
              <?php
                  if ($login) {
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong></strong> You successfully logged in.
                  <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button></div>';
                  }
                if ($showError) {
                  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong></strong> '. $showError . '.
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
                }
                if($fillAlert){
                  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong></strong> Please fill up the entry fields.
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
                }
                ?>


              <div class="form-group">
                
                <select class="form-select mb-3" name="usertype" aria-label="Defaut select example">
                  <option selected value="Clubowner">Club Owner</option>
                  <option value="SportSocietyHead">Sport Society Head</option>
                  <option value="Trainer">Trainer</option>
                  <option value="Player">Player</option>
                </select>
              </div>
              <div class="form-group">
                <label for="email"></label>
                <input type="email" name="email" class="form-control" placeholder="Email" required>
              </div>
              <div class="form-group">
                <label for="password"></label>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
              </div>
              <div class="form-group py-3">
                <button class="btn btn-outline-primary form-control py-md-2" type="submit"><h5>Sign In</h5></button>
                
              </div>
            </form>
                <h5>Don't Have Account!</h5>
                <a href="register.php"><h5>Sign Up</h5></a>

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