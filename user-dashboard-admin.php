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
      <a class="nav-item thin-heading active" href="#">My Dashboard</a>
      <a class="nav-item thin-heading" href="#">Progress Tracker</a>
      <a class="nav-item thin-heading" href="#">Achievements</a>
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
      <div class="col-md-4"></div>
    </div>
  </div>

  <div class="container-fluid light-grey-bg">
    <div class="row user-data">

      <div class="col-md-4 user-course-card-container">
        <h5> Your Next Registered Course</h5>
        <div class="card course-card">
          <div class="card-body">
            <p class="bold">Looks like you haven’t registered for any courses yet. Go to our <a class="pd-blue-text" href="#">course calendar</a> to view upcoming courses and register.</a></p>
            <img src="assets/images/otis-course-calendar.svg" />
            <p><a class="button small-button yellow-button dropshadow text-center" href="#">VIEW CALENDAR</a></p>
          </div>
        </div>
      </div>

      <div class="col-md-4 user-course-list-container">
        <h5>Upcoming New Courses</h5>
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
        <h5>Recent Courses Added to the Library</h5>
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

      <div id="course-library" class="col-md-7">
        <h5>Your Courses in Progress</h5>
        <p class="bold">You haven’t started learning, visit our <a class="bold" href="#">course library</a> to find a course that interests you.  </p>
        <div class="dashboard-item-container">
          <div class="dashboard-item white-bg">
            <div class="row">
              <div class="col-sm-12 course-card-container">
                <div class="card course-card light-grey-bg">
                  <div class="row align-items-center height-full width-full padding-sm">
                    <p class="col-md-6">
                      <img src="assets/images/otis-course-library.svg" />
                    </p>
                    <p class="col-md-6 text-center">
                      <a class="button small-button yellow-button dropshadow text-center" href="course-library-categories.php">VIEW COURSE LIBRARY</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="recently-viewed-courses" class="col-md-5 user-course-list-container">

        <h5>Recently Viewed</h5>
        <p class="bold">Are you ready to start now?</p>

        <div class="dashboard-item-container">
          <div class="dashboard-item white-bg">
            <div class="row">

              <div class="col-sm-6 course-card-container">
                <div class="card course-card">
                  <div class="card-header orange">
                    <ul class="nav course-details">
                      <li class="nav-item thin-heading">Certification</li>
                    </ul>
                  </div>
                  <div class="card-body">
                    <h5><a href="#">Teq DTC: SMART Learning Suite Session 4 - Sound & Object Animation</a></h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 course-card-container">
                <div class="card course-card">
                  <div class="card-header green">
                    <ul class="nav course-details">
                      <li class="nav-item thin-heading">Courses</li>
                    </ul>
                  </div>
                  <div class="card-body">
                    <h5><a href="#">Teq DTC: SMART Learning Suite Session 4 - Sound & Object Animation</a></h5>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="container-fluid light-grey-bg">
    <div class="row user-data">

      <div class="col-md-3 user-course-card-container">
        <h5>Analytics</h5>
        <p class="padding-top">
          <img src="assets/images/advanced-analytics-icon.svg" />
        </p>
        <p class="text-center">
          <a class="button small-button yellow-button dropshadow text-center" href="#">VIEW ADVANCED ANALYTICS</a>
        </p>
      </div>

      <div class="col-md-4 user-course-list-container">
        <h5 class="bold">Top Courses</h5>
        <ul class="user-course-list top-courses">
          <li>
            <a href="#">Let's Get Rolling with littleBits <small>Birch Elementary</small></a>
          </li>
          <li>
            <a href="#">Tips and Resources for Starting a Computer Science Club in Your School <small>Lakeside Elementary</small></a>
          </li>
          <li>
            <a href="#">Sphero BOLT Basics <small>Chatterton Elementary</small></a>
          </li>
          <li>
            <a href="#">Effective Chromebook Use in the Classroom <small>Birch Elementary</small></a>
          </li>
          <li>
            <a href="#">Tips and Resources for Starting a Computer Science Club in Your School <small>Birch Elementary</small></a>
          </li>
          <li>
            <a class="black-text" href="#">VIEW ALL</a>
          </li>
        </ul>
      </div>

      <div class="col-md-2 user-course-list-container">
        <h5 class="bold">Top Users</h5>
        <ul class="user-course-list top-users">
          <li>
            <a href="#">Emily Crowe <small>36 Courses</small></a>
          </li>
          <li>
            <a href="#">James Bellfore <small>27 Courses</small></a>
          </li>
          <li>
            <a href="#">Denise Byrd <small>6 Courses</small></a>
          </li>
          <li>
            <a href="#">Camille Banks <small>4 Courses</small></a>
          </li>
          <li>
            <a href="#">Shirley Failane <small>1 Course</small></a>
          </li>
          <li>
            <a class="black-text" href="#">VIEW ALL</a>
          </li>
        </ul>
      </div>

      <div class="col-md-3 user-course-card-container">
        <h5></h5>
        <p class="padding-top">
          <img src="assets/images/getting-started-otis.svg" />
        </p>
        <p class="text-center">
          <a class="button small-button yellow-button dropshadow text-center" href="#">DEPLOYMENT HELP</a>
        </p>
      </div>

    </div>
  </div>

  <?php include 'digital-online-certifications.php';?>
</section>

<?php include 'footer.php';?>
