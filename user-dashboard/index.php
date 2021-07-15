<?php include 'header.php';?>

<section class="main-content">
  <div class="dashboard-header">
    <div class="container padding-left padding-right">
      <div class="row" style="padding-top: 35px;">
        <div class="col-md">
          <h1 class="text-center">Welcome Back {{fname}}</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <h5 class="text-center"><strong>Here are some of the latest happenings in your OTIS experience.</strong></h5>
        </div>
      </div>
    </div>
	  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1280 150">
      <path fill="#ECEEEF" d="M-3,154.5h1286.536v-127c0,0-300.886,84.667-639.63,84.667C340.974,112.167-3,27.5-3,27.5V154.5z"></path>
    </svg>
  </div>
</section>

<section class="user-dashboard container-fluid">
  <div class="row">
    <div class="col-md-2 user-dashboard-nav">
      <button type="button" class="user-icon" href="#" style="background-image: url('https://otis.teq.com/uploads/avatars/47126.gif');"></button>
      <p class="user-name">{{fname}} . {{lname}}</p>
      <ul class="dashboard-nav">
        <li class="nav-item user-completed-hours"><span id="hours">66.25</span> <i>Hours Completed</i></li>
        <li class="nav-item"><a class="is-active" href="#myDashboard">My Dashboard</a></li>
        <li class="nav-item"><a href="#progressTracker">Progress Tracker</a></li>
        <li class="nav-item"><a href="#certificationDownloads">Certificate Downloads</a></li>
        <li class="nav-item"><a href="#badgesEarned">Badges Earned</a></li>
        <li class="nav-item"><a href="#favoriteCourses">Favorites</a></li>
        <li class="nav-item"><a href="#userPlaylists">Playlists</a></li>
        <li class="nav-item"><a href="#accountInfo">Account Info</a></li>
        <li class="nav-item"><a href>Log Out</a></li>
      </ul>
    </div>

    <div class="col-md user-dashboard-container">

      <?php include './assets/includes/myDashboard.php';?>
      <?php include './assets/includes/progressTracker.php';?>
      <?php include './assets/includes/certificationDownloads.php';?>
      <?php include './assets/includes/badgesEarned.php' ?>
      <?php include './assets/includes/favoriteCourses.php' ?>
      <?php include './assets/includes/userPlaylists.php' ?>
      <?php include './assets/includes/accountInfo.php' ?>

      <?php include './assets/includes/leaderboardContainer.php';?>

    </div> <!-- END OF USER DASHBOARD CONTAINER -->

  </div>
</section>

<?php include 'footer.php';?>
