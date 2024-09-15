<?php
include ('header.php')
?>
<?php
include ('sidebar.php')
?>
<?php include ('dbconnect.php')?>
<main id="main" class="main">
    <div class="pagetitle">
        <h1>My Tournaments</h1>
        <div class="col-md-12 pt-lg-5 text-center border shadow-lg">
            <table class="table table-striped" id="myTable">
                <thead class="table-secondary">
                    <tr>
                        <th>#</th>
                        <th>Tournament Name</th>
                        <th>Tournament Manager</th>
                        <th>Manager Email</th>
                        <th>Club Name</th>
                        <th>Club Address</th>
                        <th>Tournament Matches</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Fee</th>
                    
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                     $sql = "SELECT * FROM `tournament`";
                     $result = mysqli_query($conn, $sql);
                     $srno=0;
                     while ($row = mysqli_fetch_assoc($result)){
                       $srno=$srno+1;
                       echo "<tr>
                           <td scope='row'>$srno</td>                 
                           <td>".$row['tournament_name']."</td>
                           <td>".$row['tournament_manager']."</td>
                           <td>".$row['manager_email']."</td>
                           <td>".$row['club_name']."</td>
                           <td>".$row['club_address']."</td>
                           <td>".$row['tournament_matches']."</td>
                           <td>".$row['start_date']."</td>
                           <td>".$row['end_date']."</td>
                           <td>".$row['tournament_fee']."</td>
                          
                           <td>  <button class='delete btn btn-sm btn-danger' id=d".$row['tournament_id'].">Cancel</button>  </td>
                       </tr>";
                     }
                    ?>
                </tbody>
            </table>

        </div>
    </div>
</main>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<?php
include ('footer.php')
?>