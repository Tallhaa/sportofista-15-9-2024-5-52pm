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
?>
<?php 
if($_SERVER['REQUEST_METHOD']=='POST')
{
    include ('dbconnect.php');
    $event_name = $_POST['name'];
    $manager_name = $_POST['manager_name'];
    $mananger_email = $_POST['manager_email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $total_teams = $_POST['teams'];
    $total_player = $_POST['players'];
    $indoor = $_POST['indoor_type'];
    $outdoor = $_POST['outdoor_type'];
    $institute_name = $_POST['institute'];
    $intitute_address = $_POST['institute_address'];
    $fee = 4000;
    $sql = "INSERT INTO `event` (`event_id`, `event_name`, `event_manager`, `manager_email`, `manager_contact`, `total_teams`, `total_players`, `indoor_type`, `outdoor_type`, `institute_name`, `institute_address`, `event_fee`) VALUES (NULL, '$event_name', '$manager_name', '$mananger_email', '$contact', '$total_teams', '$total_player', '$indoor', '$outdoor', '$institute_name', '$intitute_address', '$fee')";
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        $showAlert = true;
    }
    else
    {
        echo "not inserted";
    }
}
?>
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Event Registration</h1>
        <div class="container align-content-center p-5">
            <div class="row">
                <div class="col-md-6 m-auto p-5 border shadow">
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
                    <form action="" method="post" class="py-3">
                       
                        <div class="form-group">
                            <label for="">Event Name</label>
                            <input type="text" name="name" id="" class="form-control" placeholder=""
                                aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Event Mananer</label>
                            <input type="text" name="manager_name" id="" class="form-control" placeholder=""
                                aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Manager Email</label>
                            <input type="email" name="manager_email" id="" class="form-control" placeholder=""
                                aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Manager Contact</label>
                            <input type="text" name="contact" id="" class="form-control" placeholder=""
                                aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Total Teams</label>
                            <select class="form-select" name="teams" id="">
                                <option value="">Select Team</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Total Teams</label>
                            <select class="form-select" name="players" id="">
                                <option value="">Select Players</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="game">Select Category</label>
                            <select class="form-select" name="indoor_type" id="">
                                <option value="">Select Outdoor Games</option>
                                <option value="cricket">Cricket</option>
                                <option value="rassa Kashi">Rassa Kashi</option>
                                <option value="running">Running</option>
                                <option value="football">Football</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="game">Select Category</label>
                            <select class="form-select" name="outdoor_type" id="">
                                <option value="">Select Indoor Games</option>
                                <option value="bedminton">Bedminton</option>
                                <option value="boxing">Boxing</option>
                                <option value="table Tennis">Table Tennis</option>
                                <option value="basketBall">BasketBall</option>
                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Institute Name</label>
                            <input type="text" name="institute" id="" class="form-control" placeholder=""
                                aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Institute Address</label>
                            <input type="text" name="institute_address" id="" class="form-control" placeholder=""
                                aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Event Fee</label>
                            <input class="form-control" type="text" placeholder="Rs.4000" readonly>
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