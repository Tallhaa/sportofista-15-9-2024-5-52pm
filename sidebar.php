<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link " href="clubowner.php">
        <span> <i class="fas fa-tachometer-alt    "></i> Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
        <span> <i class="fas fa-user    "></i> Players</span>
      </a>
      <ul id="components-nav" class="nav-content active " data-bs-parent="#sidebar-nav">
        <li><a href="players.php">Add Players</a></li>
        <li><a href="player_profiles.php">Players Details</a></li>
        <li><a href="mangplayer.php">Manage Players</a></li>
      </ul>
    </li><!-- End Components Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
        <span> <i class="fa fa-users" aria-hidden="true"></i> Team</span>
      </a>
      <ul id="forms-nav" class="nav-content active  " data-bs-parent="#sidebar-nav">
        <li><a href="team.php">Add Team</a></li>
        <li><a href="team_profiles.php">Team Details</a></li>
        <li><a href="mangteam.php">Manage Team</a></li>
      </ul>
    </li>
    <!-- End Forms Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
        <span> <i class="fas fa-running"></i> Trainer</span>
      </a>
      <ul id="charts-nav" class="nav-content active  " data-bs-parent="#sidebar-nav">
        <li><a href="train.php">View</a></li>
        <li><a href="mangtrainer.php">View</a></li>
      </ul>
    </li><!-- End Charts Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#booking-nav" data-bs-toggle="collapse" href="#">
        <span> <i class="fas fa-address-card    "></i> Booking</span>
      </a>
      <ul id="booking-nav" class="nav-content active " data-bs-parent="#sidebar-nav">
        <li><a href="tournamenBooking.php">Tournament</a></li>
        <li><a href="eventBooking.php">Event</a></li>
        <li><a href="accessories.php">Accessories Booking</a></li>
        <li><a href="">Ground Booking</a></li>
        <li><a href="mangBooking.php">Manage Booking</a></li>
      </ul>
    </li>
  </ul>

</aside>