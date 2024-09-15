<?php
include ('header.php');
?>
<?php
include ('sidebar.php');
?>
<?php
include ('dbconnect.php');
?>
<?php
$delete = false;
$update = false;
 if(isset($_GET['delete']))
 {
  $srno = $_GET['delete'];
  $sql = "DELETE FROM `teams` WHERE team_id = $srno";
  $result = mysqli_query($conn,$sql);
  $delete=true;
 }
 if(isset($_POST['srnoEdit']))
 { 
  $srno = $_POST['srnoEdit'];
  $teamname = $_POST['editname'];
  $teamplayers = $_POST['editteamplay'];
  $totalplayers = $_POST['edittotalplay'];
  $teamtype = $_POST['edittype'];
   $sql="UPDATE `teams` SET `team_name` = '$teamname', `team_players` = '$teamplayers', `total_players` = '$totalplayers', `team_type` = '$teamtype' WHERE `teams`.`team_id` = $srno";
   $result = mysqli_query($conn,$sql);
   if($result)
   {
     $update = true;
   } 
   else
   {
     echo "record was not updated";
   }
 }
?>
<main id="main" class="main">
  <div class="pagetitle">
    <div class="container">
      <div class="row">
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="editModal">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="mangteam.php" method="POST">
                <div class="modal-body">

                  <input type="hidden" name="srnoEdit" id="srnoEdit">
                  <div class="form-group">
                    <label for="username">Team Name</label>
                    <input type="text" name="editname" id="editteamname" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="email">Team Players</label>
                    <input type="text" name="editteamplay" id="editteamplayers" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="email">Total Players</label>
                    <input type="text" name="edittotalplay" id="edittotalplayers" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="email">Team Type</label>
                    <input type="text" name="edittype" id="editteamtype" class="form-control">
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <h1>Team</h1>
        <div class="col-md-12 pt-lg-5 text-center border shadow-lg">
        <?php
                $sql = "SELECT * FROM `teams`";
                $result = mysqli_query($conn, $sql);
                
                  ?>
          <table class="table" id="myTable">
            <thead class="table-secondary">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Team Name</th>
                <th scope="col">Team Players</th>
                <th scope="col">Total Players</th>
                <th scope="col">Team Type</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
            <?php
                  if(mysqli_num_rows($result)>0)
                  {
                    foreach($result as $row)
                    {

                      ?>
                      <tr>
                      <th scope="row"><?php echo $row['team_id'];?></th>
                     <td><img src="<?php echo "upload-images/".$row['team_image'];?>" alt="" width="100px" ></td>
                      <td><?php echo $row['team_name'];?></td>
                      <td><?php echo $row['team_players'];?></td>
                      <td><?php echo $row['team_type']; ?></td>
                      <td><?php echo $row['total_players']; ?></td>
                      
                      <td><button class='edit btn btn-sm btn-primary' id="<?php echo $row['team_id']?>">Edit</button> 
                      <button class='delete btn btn-sm btn-danger' id="d <?php echo $row['team_id']?> ">Delete</button></td>
                          </tr>
                          <?php
                    }
                  }

                  ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</main>
<script>
  $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
<script>
  edits = document.getElementsByClassName('edit');
  Array.from(edits).forEach((element) => {
    element.addEventListener("click", (e) => {
      console.log("edit",);
      tr = e.target.parentNode.parentNode;
      teamname = tr.getElementsByTagName("td")[0].innerText;
      teamplayer = tr.getElementsByTagName("td")[1].innerText;
      totalplayer = tr.getElementsByTagName("td")[2].innerText;
      teamtype = tr.getElementsByTagName("td")[3].innerText;
      console.log(teamname, teamplayer, totalplayer, teamtype);
      editteamname.value = teamname;
      editteamplayers.value = teamplayer;
      edittotalplayers.value = totalplayer;
      editteamtype.value = teamtype;
      srnoEdit.value = e.target.id;
      console.log(e.target.id)
      $('#editModal').modal('toggle')
    })
  })
</script>
<script>
  deletes = document.getElementsByClassName('delete');
  Array.from(deletes).forEach((element) => {
    element.addEventListener("click", (e) => {
      console.log("edit",);
      srno = e.target.id.substr(1,);
      if (confirm("Are you sure to delete this note")) {
        console.log("yes");
        window.location = `mangteam.php?delete=${srno}`;
      }
      else {
        console.log("no");
      }

    })
  })
</script>
<?php
include ('footer.php');
?>