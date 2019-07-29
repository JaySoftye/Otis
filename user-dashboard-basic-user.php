<?php
  $logged_in = True;
  $default_background_image_url='assets/images/default-course-background_lg.jpg';
?>

<?php include 'header.php';?>
  <?php include 'askotis.php';?>

<section class="main-content">

  <div class="container-fluid course-background" style="background-image: url('<?php echo $default_background_image_url; ?>');">
    <div class="course-background-gradient-cover"></div>
    <div class="row">
      <div class="col-md-6 course-search-field">
        <form id="search-form" method="GET" action="" data-section="">
          <div class="form-group search-input">
            <input type="text" class="form-control" id="search-field" name="" value="" placeholder="Search Courses">
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="container-fluid pd-blue-bg">
    <nav class="navbar navbar-expand-lg dashboard-menu">
      <a class="nav-item thin-heading active" href="user-dashboard-basic-user.php">My Dashboard</a>
      <a class="nav-item thin-heading" href="user-progress-tracker.php">Progress Tracker</a>
      <a class="nav-item thin-heading" href="user-achievements.php">Achievements</a>
      <a class="nav-item thin-heading" href="#">Reports</a>
      <a class="nav-item thin-heading" href="#">Account Info</a>
    </nav>
  </div>

  <div class="container-fluid white-bg">
    <div class="row align-items-center padding-top padding-bottom">
      <div class="col-md-8">
        <p class="bold">Hi {User fName},</p>
        <p class="bold">Welcome back. Here are some of the latest happenings in your OTIS experience. </p>
      </div>
      <div class="col-md-4">
        <p class="text-center"><a class="button medium-button orange-button thin-heading dropshadow" href="#">Try a full membership</a></p>
      </div>
    </div>
  </div>

  <div class="container-fluid light-grey-bg">
    <div class="row user-data">

      <div class="col-md-4 user-course-card-container">
        <h4>Your Next Registered Course</h4>
        <div class="card course-card">
          <div class="card-body">
            <h6 class="bold margin-bottom">As a Basic User, you only have access to register for <a class="pd-blue-text bold" href="#">Free Courses</a>.</h6>
            <h6 class="bold margin-bottom">For full access you can sign up for an <a class="pd-blue-text bold" href="#">individual membership</a> or <a class="pd-blue-text bold" href="#">go here for everything you need</a> to convince your administrator to purchase OTIS foryour school.</h6>
            <h6><a class="button small-button yellow-button dropshadow text-center" href="#">INDIVIDUAL PRICING</a> <a class="button small-button yellow-button dropshadow text-center" href="#">CONVINCE ADMIN</a></h6>
          </div>
        </div>
      </div>

      <div class="col-md-4 user-course-list-container">
        <h4>Upcoming New Courses</h4>
        <ul class="user-course-list upcoming-new-courses">
          <li>
            <a href="#">Let's Get Rolling with littleBits <small>Monday, June 17th, 10:00am - 11:00am</small></a>
          </li>
          <li>
            <a href="#">Tips and Resources for Starting a Computer Science Club in Your School <small>Tuesday, June 18th, 10:00am - 11:00am</small></a>
          </li>
          <li>
            <a href="#">Sphero BOLT Basics<small>Wednesday, June 19th, 10:00am - 11:00am</small></a>
          </li>
        </ul>
      </div>

      <div class="col-md-4 user-course-list-container">
        <h4>Recent Courses Added to the Library</h4>
        <ul class="user-course-list recent-courses-added">
          <li>
            <a href="#">Tech-Infused Learning: Geometry with Dash <small>Tuesday, June 16th</small></a>
          </li>
          <li>
            <a href="#">Using Your Library to Create a Makerspace <small>Monday, June 15th</small></a>
          </li>
          <li>
            <a href="#">Using micro:bit to Code Your Own Firefly Display <small>Monday, June 17th</small></a>
          </li>
        </ul>
      </div>

    </div>
  </div>

  <div class="container-fluid white-bg">
    <div class="row user-data">

      <div id="course-library" class="col-md-8">
        <h4>Your Courses in Progress</h4>
        <p class="bold">You haven’t started learning, visit our <a class="bold" href="#">course library</a> to find a course that interests you.  </p>
        <div class="dashboard-item-container">
          <div class="dashboard-item white-bg">
            <div class="row">
              <div class="col-sm-12 course-card-container">
                <div class="card course-card light-grey-bg">
                  <div class="row align-items-center height-full width-full padding-sm">
                    <p class="col-md-5">
                      <img src="assets/images/otis-course-library.svg" />
                    </p>
                    <p class="col-md-7 text-center">
                      <a class="button medium-button orange-button thin-heading dropshadow" href="#">Try a full membership for access to the full library of courses.</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <?php include 'digital-online-certifications.php';?>
</section>

<?php include 'footer.php';?>
