<?php
 include ('adminheader.php')
 ?>
<?php
 include ('adminsidebar.php')
 ?>
<?php include ('dbconnect.php')
?>

<?php
$insert=false;
$update=false;
$delete=false;
$fillAlert=false;
if($_SERVER['REQUEST_METHOD']=='POST')
{
    if($player_name = $_POST['name']=="" && $clubname=$_POST['category']== "")
    {
      $fillAlert = true;
    }
    if(isset($_POST['submit']) && isset($_FILES['image']))
    { 
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        move_uploaded_file($file_tmp,"../upload-images/".$file_name);
        $file_name=$_FILES['image']['name'];
        $name = $_POST['name'];
        $category = $_POST['category'];
        $exp = $_POST['exp'];
        $contact = $_POST['contact'];
        $email= $_POST['email'];
        $address = $_POST['address'];
        $fee = $_POST['fee'];
        $rating = $_POST['rating'];
        $sql = "INSERT INTO `trainee` (`id`, `img`, `name`, `category`, `exp`, `contact`, `email`, `address`, `fee`, `ratings`) 
        VALUES (NULL, '$file_name', '$name', '$category', '$exp', '$contact', '$email', '$address', '$fee', '$rating')";
        $result = mysqli_query($conn, $sql);
        if($result)
        {
          $insert=true;
        }
        else
        {
          echo "your data was not inserted Error! --->". mysqli_connect_error();
        }
      
    }  
}

?>


<main id="main" class="main">
    <div class="pagetitle">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-md-6 ">
                    <h3>Add Details</h3>
                                        <?php
                    if($insert){
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong></strong> Notes have successfully added.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                    }
                    ?>
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
                                        <?php
                    if($fillAlert){
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong></strong> Please fill up the entry fields.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                    }
                    ?>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Trainer Name</label>
                            <input type="text" name="name" id="" class="form-control" placeholder=""
                                aria-describedby="helpId">

                        </div>
                        <div class="form-group">
                            <label for="">Trainer Category</label>
                            <input type="text" name="category" id="" class="form-control" placeholder=""
                                aria-describedby="helpId">

                        </div>
                        <div class="form-group">
                            <label for="">Experience Years</label>
                            <input type="text" name="exp" id="" class="form-control" placeholder=""
                                aria-describedby="helpId">

                        </div>
                        <div class="form-group">
                            <label for="">Contact</label>
                            <input type="text" name="contact" id="" class="form-control" placeholder=""
                                aria-describedby="helpId">

                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" id="" class="form-control" placeholder=""
                                aria-describedby="helpId">

                        </div>
                        <div class="form-group">
                            <label for="">Address</label>
                            <input type="text" name="address" id="" class="form-control" placeholder=""
                                aria-describedby="helpId">

                        </div>
                        <div class="form-group">
                            <label for="">Fee</label>
                            <input type="text" name="fee" id="" class="form-control" placeholder=""
                                aria-describedby="helpId">

                        </div>
                        <div class="form-group">
                            <label for="">Ratings</label>
                            <input type="text" name="rating" id="" class="form-control" placeholder=""
                                aria-describedby="helpId">


                        </div>
                        <div class="form-group py-4">
                            <input type="file" name="image">
                            <button type="submit" name="submit" class="btn btn-primary">Add Record</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
 include ('adminfooter.php')
 ?>