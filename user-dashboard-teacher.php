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
        <h4>Your Next Registered Course</h4>
        <div class="card course-card">
          <div class="card-header pink">
            <ul class="nav course-details">
              <li class="nav-item category-duration-details">
                <a href="#">8hr 54min</a>
              </li>
              <li class="nav-item category-sessions-details">
                <a href="#">12 Sessions</a>
              </li>
              <li class="nav-item">
              </li>
            </ul>
            <button class="admin-menu" type="button"></button>
          </div>
          <div class="card-body">
            <p><a href="#">Digital Teacher iPad Certification 7: iPhoto</a></p>
            <p>With this course, participants will be able to add and organize content to iPhoto and collaborate with others through a shared Photostream...</p>
          </div>
          <div class="card-footer">
            <div class="course-rating">
              <span class="three-stars">
                <i>3 out of 5</i>
              </span>
            </div>
            <div class="course-footer">
              <span>
                <p class="certification-badge"></p>
                <p class="thin-heading bold">ISTE<i class="blue-text">*</i></p>
              </span>
            </div>
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

      <div id="course-progress-carousel" class="col-md-7 carousel-container carousel slide" data-ride="carousel" data-interval="false">
        <h4>Your Courses in Progress</h4>
        <p class="bold">Great job starting these courses!</p>

          <div class="carousel-inner dashboard-item-container">
            <div class="carousel-item dashboard-item white-bg  active">
              <div class="row">
                <div class="col-sm-4 course-card-container">
                  <div class="card course-card">
                    <div class="card-header blue">
                      <ul class="nav course-details">
                        <li class="nav-item thin-heading">Course</li>
                      </ul>
                    </div>
                    <div class="card-body">
                      <h5><a href="#">What’s New in SMART Notebook 2014?</a></h5>
                    </div>
                    <div class="card-footer">
                      <p><span class="course-progress">70</span>% Completed</p>
                      <div class="progress">
                        <div class="progress-bar" style="width:70%"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 course-card-container">
                  <div class="card course-card">
                    <div class="card-header light-blue">
                      <ul class="nav course-details">
                        <li class="nav-item thin-heading">Course</li>
                      </ul>
                    </div>
                    <div class="card-body">
                      <h5><a href="#">Creating Your Own STEAM Makerspace Program: Ideas & Considerations</a></h5>
                    </div>
                    <div class="card-footer">
                      <p><span class="course-progress">70</span>% Completed</p>
                      <div class="progress">
                        <div class="progress-bar" style="width:70%"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 course-card-container">
                  <div class="card course-card">
                    <div class="card-header pink">
                      <ul class="nav course-details">
                        <li class="nav-item thin-heading">Certification</li>
                      </ul>
                    </div>
                    <div class="card-body">
                      <h5><a href="#">Teq DTC: SMART Learning Suite Session 4 - Sound & Object Animation</a></h5>
                    </div>
                    <div class="card-footer">
                      <p><span class="course-progress">70</span>% Completed</p>
                      <div class="progress">
                        <div class="progress-bar" style="width:70%"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item dashboard-item white-bg">
              <div class="row">
                <div class="col-sm-4 course-card-container">
                  <div class="card course-card">
                    <div class="card-header green">
                      <ul class="nav course-details">
                        <li class="nav-item thin-heading">Courses</li>
                      </ul>
                    </div>
                    <div class="card-body">
                      <h5><a href="#">Teq DTC: SMART Learning Suite Session 4 - Sound & Object Animation</a></h5>
                    </div>
                    <div class="card-footer">
                      <p><span class="course-progress">70</span>% Completed</p>
                      <div class="progress">
                        <div class="progress-bar" style="width:70%"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#course-progress-carousel" role="button" data-slide="prev">
            <svg version="1.1" viewBox="0 0 25 25">
            	 <circle class="light-grey-fill dropshadow" cx="12.5" cy="12.5" r="11.109"/>
            	 <polygon class="st1" points="14.622,5.7 12.713,5.7 8.033,12.5 12.713,19.3 14.622,19.3 9.942,12.5 "/>
            </svg>
          </a>
          <a class="carousel-control-next" href="#course-progress-carousel" role="button" data-slide="next">
            <svg version="1.1" viewBox="0 0 25 25">
            	 <circle class="light-grey-fill dropshadow" cx="12.5" cy="12.5" r="11.109"/>
            	 <polygon points="15.058,12.5 10.378,19.3 12.287,19.3 16.967,12.5 12.287,5.7 10.378,5.7 "/>
            </svg>
          </a>
        <p><a class="thin-heading bold" href="#">VIEW ALL PROGRESS</a></p>
      </div>

      <div id="recently-viewed-courses" class="col-md-5 user-course-list-container">

        <h4>Recently Viewed</h4>
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
    <div class="row padding-top padding-bottom user-data">

      <div id="recommended-playlist-carousel" class="col-md-7 carousel-container carousel slide" data-ride="carousel" data-interval="false">
        <h4>Your Favorite Courses</h4>

          <div class="carousel-inner dashboard-item-container">
            <div class="carousel-item dashboard-item light-grey-bg active">
              <div class="row">
                <div class="col-sm-4 course-card-container">
                  <div class="card course-card">
                    <div class="card-header light-blue">
                      <ul class="nav course-details">
                        <li class="nav-item thin-heading">Course</li>
                      </ul>
                    </div>
                    <div class="card-body">
                      <h5><a href="#">Labdisc:Solubility</a></h5>
                    </div>
                    <div class="card-footer">
                      <p><span class="course-progress">70</span>% Completed</p>
                      <div class="progress">
                        <div class="progress-bar" style="width:70%"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 course-card-container">
                  <div class="card course-card">
                    <div class="card-header green">
                      <ul class="nav course-details">
                        <li class="nav-item thin-heading">Course</li>
                      </ul>
                    </div>
                    <div class="card-body">
                      <h5><a href="#">What’s New in SMART Notebook 2014?</a></h5>
                    </div>
                    <div class="card-footer">
                      <a href="" class="block text-center">
                        <img class="height-full" src="assets/images/take-quiz.svg" />
                      </a>
                    </div>
                    <div class="card-footer no-margin">
                      <p><span class="course-progress">90</span>% Completed</p>
                      <div class="progress">
                        <div class="progress-bar" style="width:90%"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 course-card-container">
                  <div class="card course-card">
                    <div class="card-header yellow">
                      <ul class="nav course-details">
                        <li class="nav-item thin-heading">Course</li>
                      </ul>
                    </div>
                    <div class="card-body">
                      <h5><a href="#">Teq DTC: SMART Learning Suite Session 4 - Sound & Object Animation</a></h5>
                    </div>
                    <div class="card-footer">
                      <p><span class="course-progress">100</span>% Completed</p>
                      <div class="progress">
                        <div class="progress-bar" style="width:100%"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item dashboard-item light-grey-bg">
              <div class="row">
                <div class="col-sm-4 course-card-container">
                  <div class="card course-card">
                    <div class="card-header pink">
                      <ul class="nav course-details">
                        <li class="nav-item thin-heading">Course</li>
                      </ul>
                    </div>
                    <div class="card-body">
                      <h5><a href="#">What’s New in SMART Notebook 2014?</a></h5>
                    </div>
                    <div class="card-footer">
                      <p><span class="course-progress">100</span>% Completed</p>
                      <div class="progress">
                        <div class="progress-bar" style="width:100%"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 course-card-container">
                  <div class="card course-card">
                    <div class="card-header orange">
                      <ul class="nav course-details">
                        <li class="nav-item thin-heading">Course</li>
                      </ul>
                    </div>
                    <div class="card-body">
                      <h5><a href="#">Best Practices for Using Your SMART Board as a Station</a></h5>
                    </div>
                    <div class="card-footer">
                      <a href="" class="block text-center">
                        <img class="height-full" src="assets/images/take-quiz.svg" />
                      </a>
                    </div>
                    <div class="card-footer links">
                      <a href="" class="block text-center red-text">ASSIGNMENT PENDING REVIEW</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#recommended-playlist-carousel" role="button" data-slide="prev">
            <svg version="1.1" viewBox="0 0 25 25">
            	 <circle class="white-fill" cx="12.5" cy="12.5" r="11.109"/>
            	 <polygon class="st1" points="14.622,5.7 12.713,5.7 8.033,12.5 12.713,19.3 14.622,19.3 9.942,12.5 "/>
            </svg>
          </a>
          <a class="carousel-control-next" href="#recommended-playlist-carousel" role="button" data-slide="next">
            <svg version="1.1" viewBox="0 0 25 25">
            	 <circle class="white-fill" cx="12.5" cy="12.5" r="11.109"/>
            	 <polygon points="15.058,12.5 10.378,19.3 12.287,19.3 16.967,12.5 12.287,5.7 10.378,5.7 "/>
            </svg>
          </a>
        <p><a class="thin-heading bold" href="#">VIEW ALL</a></p>
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
                  <div class="card-header grey">
                    <ul class="nav course-details">
                      <li class="nav-item thin-heading playlist-details">District</li>
                    </ul>
                  </div>
                  <div class="card-body">
                    <h5><a href="#">Google Act 48</a></h5>
                  </div>
                </div>
              </div>
              <div class="col-md course-card-container">
                <div class="card course-card">
                  <div class="card-header light-grey">
                    <ul class="nav course-details">
                      <li class="nav-item thin-heading playlist-details">School</li>
                    </ul>
                  </div>
                  <div class="card-body">
                    <h5><a href="#">SMART Notebook Updates</a></h5>
                  </div>
                </div>
              </div>
              <div class="col-md course-card-container">
                <div class="card course-card">
                  <div class="card-header light-blue">
                    <ul class="nav course-details">
                      <li class="nav-item thin-heading playlist-details">OTIS</li>
                    </ul>
                  </div>
                  <div class="card-body">
                    <h5><a href="#">Gloucester Township Google Playlist</a></h5>
                  </div>
                </div>
              </div>
              <div class="col-md course-card-container"></div>
              <div class="col-md course-card-container"></div>
            </div>
          </div>
        </div>

        <p><a class="thin-heading bold" href="#">VIEW ALL PLAYLISTS</a></p>
      </div>

    </div>
  </div>


  <?php include 'digital-online-certifications.php';?>
</section>

<?php include 'footer.php';?>
