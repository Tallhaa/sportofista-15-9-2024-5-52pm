<?php
include ('header.php')
?>
<?php
include ('sidebar.php')
?>
<?php
$fillAlert= false;
$showAlert = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  include 'dbconnect.php';
    $tournament_name=$_POST['name'];
    $manager=$_POST['manager'];
    $manager_email=$_POST['manager_email'];
    $club_name=$_POST['club_name'];
    $club_address=$_POST['club_address'];
    $matches=$_POST['matches'];
    $startdate=$_POST['startdate'];
    $enddate=$_POST['enddate'];
    $fee=3000;
    $win_prize=20000;
    echo 
    $sql = "INSERT INTO `tournament` (`tournament_id`, `tournament_name`, `tournament_manager`, `manager_email`, `club_name`, `club_address`, `tournament_matches`, `start_date`, `end_date`, `tournament_fee`, `win_prize`) 
    VALUES (NULL, '$tournament_name', '$manager', '$manager_email', '$club_name', '$club_address', '$matches', '$startdate', '$enddate', '$fee', '$win_prize')";
    $result = mysqli_query($conn,$sql);
    if($result)
    {
      $showAlert=true;
    }
    else
    {
      echo "your not added".mysqli_error($conn);
    }

}
?>
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Tournament Registration</h1>
        <div class="container align-content-center  p-5">
            <div class="row">
                <div class="col-6 m-auto p-5 border shadow">
                    <?php
                if ($showAlert) {
                  echo '
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Your record has been successfully added
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
                if($fillAlert){
                  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong></strong> Please fill up the entry fields.
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
                }
                  ?>
                    <form action="" class="py-3" method="post">

                        <div class="form-group">
                            <label for="">Tournament Name</label>
                            <input type="text" name="name" id="" class="form-control" placeholder=""
                                aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Tournament Manager</label>
                            <input type="text" name="manager" id="" class="form-control" placeholder=""
                                aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Manager Email</label>
                            <input type="email" name="manager_email" id="" class="form-control" placeholder=""
                                aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Club Name</label>
                            <input type="text" name="club_name" id="" class="form-control" placeholder=""
                                aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Club Address</label>
                            <input type="text" name="club_address" id="" class="form-control" placeholder=""
                                aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Tounament Matches</label>
                            <input type="text" name="matches" id="" class="form-control" placeholder=""
                                aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Start Date</label>
                            <input type="datetime-local" name="startdate" id="" class="form-control" placeholder=""
                                aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">End Date</label>
                            <input type="datetime-local" name="enddate" id="" class="form-control" placeholder=""
                                aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Tournament Fee</label>
                            <input class="form-control" type="text" placeholder="Rs.3000"  readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Win Prize</label>
                            <input class="form-control" type="text" placeholder="Rs.20000"  readonly>
                        </div>

                        <button class="btn btn-primary mt-3" type="submit">Confirm</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<?php
include ('footer.php')
?>