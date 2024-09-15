<?php
include ('trainer.header.php')
?>
<?php
include ('trainer.sidebar.php')
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
  $sql = "DELETE FROM `tplayers` WHERE player_id = $srno";
  $result = mysqli_query($conn,$sql);
  $delete=true;
 }
 if(isset($_POST['srnoEdit']))
 { 
  $srno = $_POST['srnoEdit'];
  $player_image=$_POST['player_img'];
  $player_name = $_POST['editplayername'];
  $email=$_POST['editemail'];
  $player_type=$_POST['editplayertype'];
  $game_type=$_POST['editgametype'];
  $address=$_POST['editaddress'];
  $contact=$_POST['editcontact'];
   $sql="UPDATE `tplayers` SET `player_name` = '$player_name', `email` = '$email', `player_type` = '$player_type', `game_type` = '$game_type', `address` = '$address', `contact` = '$contact' WHERE `players`.`player_id` = $srno;";
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
        <!-- Button trigger modal -->
        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          Launch demo modal
        </button> -->

        <!-- Modal -->
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="editModal">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="mangplayer.php" method="POST">
                <div class="modal-body">

                  <input type="hidden" name="srnoEdit" id="srnoEdit">
                  <div class="form-group">
                    <label for="username">Player Name</label>
                    <input type="text" name="editplayername" id="editplayername" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="editemail" id="editemail" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="player">Player Type</label>
                    <input type="text" name="editplayertype" id="editplayertype" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="game">Game Type</label>
                    <input type="text" name="editgametype" id="editgametype" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="editaddress" id="editaddress" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="contact">Contact No.</label>
                    <input type="text" name="editcontact" id="editcontact" class="form-control">
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
        <h1>Players</h1>

        <div class="col-md-12 pt-lg-5 text-center border shadow-lg">
        <?php
                $sql = "SELECT * FROM `tplayers`";
                $result = mysqli_query($conn, $sql);
                
                  ?>
          <table class="table" id="myTable">
            <thead class="table-secondary">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Player Name</th>
                <th scope="col">Email</th>
                <th scope="col">Player Type</th>
                <th scope="col">Game Type</th>
                <th scope="col">Address</th>
                <th scope="col">Contact No.</th>
                <th scope="col">Status</th>
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
                      <th scope="row"><?php echo $row['player_id'];?></th>
                     <td><img src="<?php echo "top_players/".$row['player_img'];?>" alt="" width="100px" ></td>
                      <td><?php echo $row['player_name'];?></td>
                      <td><?php echo $row['email'];?></td>
                      <td><?php echo $row['player_type']; ?></td>
                      <td><?php echo $row['game_type']; ?></td>
                      <td><?php echo $row['address']; ?></td>
                      <td><?php echo $row['contact']; ?></td>
                      <td><?php echo $row['status']; ?></td>
                      <td><button class='edit btn btn-sm btn-primary' id="<?php echo $row['player_id']?>">Edit</button> 
                      <button class='delete btn btn-sm btn-primary' id="d <?php echo $row['player_id']?> ">Delete</button></td>
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
  edits = document.getElementsByClassName('edit');
  Array.from(edits).forEach((element) => {
    element.addEventListener("click", (e) => {
      console.log("edit",);
      tr = e.target.parentNode.parentNode;
      playername = tr.getElementsByTagName("td")[1].innerText;
     email = tr.getElementsByTagName("td")[2].innerText;
     playertype  = tr.getElementsByTagName("td")[3].innerText;
     gametype = tr.getElementsByTagName("td")[4].innerText;
     address = tr.getElementsByTagName("td")[5].innerText;
      contact = tr.getElementsByTagName("td")[6].innerText;
      console.log(playername,email,playertype,gametype,address,contact);
      editplayername.value = playername;
      editemail.value = email;
      editplayertype.value = playertype;
      editgametype.value = gametype;
      editaddress.value = address;
      editcontact.value = contact;
      srnoEdit.value=e.target.id;
      console.log(e.target.id)
      $('#editModal').modal('toggle')
    })
  })
</script>
<script>
 deletes = document.getElementsByClassName('delete');
 Array.from(deletes).forEach((element)=>{
  element.addEventListener("click",(e)=>{
    console.log("edit",);
    srno=e.target.id.substr(1,);
    if(confirm("Are you sure to delete this note"))
    {
      console.log("yes");
      window.location = `edit_player.php?delete=${srno}`;
    }
    else
    {
      console.log("no");
    }

  })
 })
</script>
 <?php
 include ('trainer.footer.php')
 ?>