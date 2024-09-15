<?php
 include ('adminheader.php')
 ?>
<?php
 include ('adminsidebar.php')
 ?>
<?php include ('dbconnect.php')
?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Events</h1>
        <div class="col-md-12  text-center border shadow-lg">
            <table class="table table-striped" id="myTable">
                <thead class="table-secondary">
                    <tr>
                        <th>#</th>
                        <th>Event Name</th>
                        <th>Event Manager</th>
                        <th>Manager Email</th>
                        <th>Contact No.</th>
                        <th>Total Teams</th>
                        <th>Total Players</th>
                        <th>Outdoor Games</th>
                        <th>Indoor Games</th>
                        <th>Institute Name</th>
                        <th>Institute Address</th>
                        <th>Fee</th>

                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
             $sql = "SELECT * FROM `event`";
             $result = mysqli_query($conn, $sql);
             $srno=0;
             while ($row = mysqli_fetch_assoc($result)){
               $srno=$srno+1;
               echo "<tr>
                   <td scope='row'>$srno</td>                 
                   <td>".$row['event_name']."</td>
                   <td>".$row['event_manager']."</td>
                   <td>".$row['manager_email']."</td>
                   <td>".$row['manager_contact']."</td>
                   <td>".$row['total_teams']."</td>
                   <td>".$row['total_players']."</td>
                   <td>".$row['indoor_type']."</td>
                   <td>".$row['outdoor_type']."</td>
                   <td>".$row['institute_name']."</td>
                   <td>".$row['institute_address']."</td>
                   <td>".$row['event_fee']."</td>
                  
                   <td>  <button class='delete btn btn-sm btn-danger' id=d".$row['event_id'].">Cancel</button>  </td>
               </tr>";
             }
            ?>
                </tbody>
            </table>
        </div>
    </div>
</main>

<?php
 include ('adminfooter.php')
 ?>