<?php
$fillAlert=false;
$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include ('dbconnect.php');
  $username = $_POST['username'];
  $password = $_POST['password'];
  $sql = "SELECT * FROM admin WHERE  username = '$username' AND password = '$password';";
  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);
  if($username=$_POST['username']=="" && $email=$_POST['password']=="")
  {
    $fillAlert =true;
  }
  elseif ($num == 1) {
    $login = true;
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['password']=$password;
    header('location: admin.php');
  } else {
    $showError = 'invalid credentials';
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link rel="stylesheet" href="assets/css/fontawesome-free-5.15.4-web/css/all.css">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body style="background: url(../images/1000_F_508803780_s4EkVq5D9TtFLiZ0X1ghZcYek0WWVvtQ.jpg);">


  <div class="container p-5">
    <div class="row justify-content-center">
      <div class="col-md-5 p-5">
        <div class="card" style="border-radius: 1rem ;">
          <?php
            if ($login) {
              echo '
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong></strong> You are successfully logged in
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            </button>
          </div>';
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
          <div class="card-body text-center">

            <h4 class="py-lg-5">Admin</h4>
            <form action="" method="post" class="form justify-content-center">
              <div class="form-group">
                <label for="username"></label>
                <input type="text" name="username" class="form-control" placeholder="User Name">
              </div>
              <div class="form-group">
                <label for="password"></label>
                <input type="password" name="password" class="form-control" placeholder="Password">
              </div>
              <button class="btn btn-outline-primary my-5 " type="submit">Login</button>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- !-- End Sidebar-->

  <!-- Vendor JS Files -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK"
    crossorigin="anonymous"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>