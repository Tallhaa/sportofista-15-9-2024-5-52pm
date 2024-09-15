<?php
include ('header.php')
?>
<?php
include ('sidebar.php')
?>
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Add Game</h1>
    <div class="container align-content-center  p-5">
      <div class="row">
        <div class="col-6 m-auto p-5 border shadow">
          <form action="" method="post" class="form">

            <div class="form-group">
              <label for="username">Game Name</label>
              <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
              <label for="email">Game Date</label>
              <input type="datetime" name="clubname" class="form-control">
            </div>
            <div class="form-group">
              <label for="email">Game Players</label>
              <input type="text" name="clubtype" class="form-control">
            </div>
            <div class="form-group">
              <label for="email">Game Type</label>
              <input type="text" name="clubtype" class="form-control">
            </div>
            <div class="form-group">
              <label for="email">No. Of Games</label>
              <input type="text" name="clubtype" class="form-control">
            </div>
            <button class="btn btn-primary mt-3" type="submit">Add Record</button>
          </form>

        </div>
      </div>
    </div>
  </div>
</main>

<?php
include ('footer.php')
?>