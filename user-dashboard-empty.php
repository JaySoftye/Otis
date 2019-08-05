<?php
  $logged_in = True;
  $default_background_image_url='assets/images/default-course-background_lg.jpg';
?>

<?php include 'header.php';?>
  <?php include 'askotis.php';?>

<section class="main-content thin-search-bar">

  <?php include 'search-field.php';?>

  <div class="container-fluid pd-blue-bg">
    <nav class="navbar navbar-expand-lg dashboard-menu">
      <a class="nav-item thin-heading active" href="user-dashboard-teacher.php">My Dashboard</a>
      <a class="nav-item thin-heading" href="user-progress-tracker.php">Progress Tracker</a>
      <a class="nav-item thin-heading" href="user-achievements.php">Achievements</a>
      <a class="nav-item thin-heading" href="user-account-info.php">Account Info</a>
      <a class="nav-item thin-heading" href="#">Reports</a>
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
        <h4> Your Next Registered Course</h4>
        <div class="card course-card white-bg">
          <div class="card-body">
            <p class="bold">Looks like you haven’t registered for any courses yet. Go to our <a class="pd-blue-text" href="#">course calendar</a> to view upcoming courses and register.</a></p>
            <img src="assets/images/otis-course-calendar.svg" />
            <p><a class="button small-button yellow-button dropshadow text-center" href="#">VIEW CALENDAR</a></p>
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

      <div id="course-library" class="col-md-7">
        <h4>Your Courses in Progress</h4>
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
                      <span class="bold">You haven’t started learning, visit our <a class="bold" href="#">course library</a> to find a course that interests you.  </span>
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

        <h4>Recently Viewed</h4>

        <div class="dashboard-item-container">
          <div class="dashboard-item white-bg">
            <div class="row">
              <div class="col-sm-6 course-card-container">
                <div class="card course-card light-grey-bg">
                  <div class="card-body empty">
                    <p class="bold">Are you ready to start now? Visit our <a class="bold pd-blue-text" href="#">course library</a> to find a course that interests you.  </p>
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
    <div class="row padding-top padding-bottom user-data">

      <div id="recommended-playlist-carousel" class="col-md-7 carousel-container carousel slide" data-ride="carousel" data-interval="false">
        <h4>Your Favorite Courses</h4>

          <div class="carousel-inner dashboard-item-container">
            <div class="carousel-item dashboard-item light-grey-bg active">
              <div class="row">
                <div class="col-sm-4 course-card-container">
                  <div class="card course-card">
                    <div class="card-body empty">
                      <p class="bold">You have not added any courses to your favorites. Go to the <a class="bold pd-blue-text" href="#">course library</a> to start adding favorites today!</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 course-card-container"></div>
                <div class="col-sm-4 course-card-container"></div>
              </div>
            </div>
          </div>
      </div>

      <div id="featured-erc-lesson" class="col-md-5 user-course-list-container">

        <h4>Featured Lesson of the Day</h4>

        <div class="dashboard-item-container">
          <div class="dashboard-item">
            <div class="row">

              <div class="col-sm-6 course-card-container">
                <div class="card course-card erc-card">
                  <a href="/erc/item/5" class="erc-link" alt="" style="background-image: url('https://onlinepd.teq.com/uploads/erc-resources/A_is_for_Animals.PNG');"></a>
                  <div class="card-body">
                    <p><small>ELA - Elementary</small></p>
                    <h6><a class="bold" ref="#">A is for Animals</a></h6>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 card-body">
                <ul class="standards-list">
                  <li>Educational Standards that this lesson meets:</li>
                  <li>Standard 3</li>
                  <li>Standard 5</li>
                  <li><a class="button small-button yellow-button dropshadow" href="#">DOWNLOAD</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <p><a class="thin-heading bold" href="#">VIEW MORE LESSONS</a></p>

      </div>
    </div>
  </div>

  <div class="container-fluid white-bg">
    <div class="row user-data">

      <div id="TeqDTC-MicrosoftOffice365" class="col-md-12 carousel-container carousel slide" data-ride="carousel" data-interval="false">
        <h4>Your Recommended Playlists</h4>

        <div class="carousel-inner dashboard-item-container">
          <div class="carousel-item dashboard-item white-bg  active">
            <div class="row">
              <div class="col-md course-card-container">
                <div class="card course-card">
                  <div class="card-body empty">
                    <p class="bold">There appears to be no current recommendations for you at this time. Try checking out the <a class="bold pd-blue-text" href="course-calendar.php">course calendar</a> for all our new and upcoming courses! </p>
                  </div>
                </div>
              </div>
              <div class="col-md course-card-container"></div>
              <div class="col-md course-card-container"></div>
              <div class="col-md course-card-container"></div>
              <div class="col-md course-card-container"></div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>


  <?php include 'digital-online-certifications.php';?>
</section>

<?php include 'footer.php';?>
