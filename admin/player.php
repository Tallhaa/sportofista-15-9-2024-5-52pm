<?php
 include ('adminheader.php')
 ?>
 <?php
 include ('adminsidebar.php')
 ?>
 <?php include('dbconnect.php')?>
 <?php
 if(isset($_GET['delete']))
 {
  $srno = $_GET['delete'];
  $sql = "DELETE FROM `club_owner` WHERE user_id = $srno";
  $result = mysqli_query($conn,$sql);
  $delete=true;
 }
 
 ?>
 <main id="main" class="main">
  <div class="pagetitle">
    <div class="container">
    <div class="row">
      <h1>Users Accounts</h1>
      
      <div class="col-md-12 pt-lg-5 text-center border shadow-lg">
        
        <table class="table" id="myTable">
          <thead class="table-secondary">
            <tr>
              <th scope="col">#</th>
              <th scope="col">User Type</th>
              <th scope="col">Name</th>
              <th scope="col">club_name</th>
              <th scope="col">club_type</th>
              <th scope="col">email</th>
              <th scope="col">password</th>
              <th scope="col">address</th>
              <th scope="col">contact</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php

              $sql = "SELECT * FROM `player`";
                $result = mysqli_query($conn, $sql);
                $srno=0;
                while ($row = mysqli_fetch_assoc($result)){
                  $srno=$srno+1;
              echo "
            <tr>
              <th scope='row'>".$srno."</th>
              <td>".$row['user_type']."</td>
              <td>".$row['player_name']."</td>
              <td>".$row['player_type']."</td>
              <td>".$row['game_type']."</td>
              <td>".$row['email']."</td>
              <td>".$row['password']."</td>
              <td>".$row['address']."</td>
              <td>".$row['contact']."</td>
              <td><button class='delete btn btn-sm btn-danger' id=d".$row['id'].">Delete</button></td>
            </tr>";
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
 deletes = document.getElementsByClassName('delete');
 Array.from(deletes).forEach((element)=>{
  element.addEventListener("click",(e)=>{
    console.log("edit",);
    srno=e.target.id.substr(1,);
    if(confirm("Are you sure to delete this note"))
    {
      console.log("yes");
      window.location = `clubowners.php?delete=${srno}`;
    }
    else
    {
      console.log("no");
    }

  })
 })
</script>
<?php
 include ('adminfooter.php')
 ?>