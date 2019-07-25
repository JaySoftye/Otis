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
      <a class="nav-item thin-heading" href="#">My Dashboard</a>
      <a class="nav-item thin-heading" href="#">Progress Tracker</a>
      <a class="nav-item thin-heading active" href="#">Achievements</a>
      <a class="nav-item thin-heading" href="#">Reports</a>
      <a class="nav-item thin-heading" href="#">Account Info</a>
    </nav>
  </div>

  <div class="container-fluid white-bg">
    <div class="row align-items-top padding-top padding-bottom">
      <div class="col-md-6">
        <p class="bold">Welcome back {User fName},</p>
        <p class="bold">Here you will find a history of your activity.</p>
      </div>
      <div class="col-md">
        <h3 class="thin-heading thin no-margin user-courses-taken">352</h3>
        <p class="bold">Courses Taken</p>
      </div>
      <div class="col-md">
        <h3 class="thin-heading thin no-margin user-courses-taken">154.4</h3>
        <p class="bold">Completed Credit Hours</p>
      </div>
      <div class="col-md">
        <h3 class="thin-heading thin no-margin user-courses-taken">2</h3>
        <p class="bold">Certifications</p>
      </div>
    </div>
  </div>

  <div class="container-fluid light-grey-bg">
    <div class="row user-data">

      <div id="course-progress-carousel" class="col-md-12 carousel-container carousel slide" data-ride="carousel" data-interval="false">
        <div class="row  align-items-center">
          <h4 class="col-md-8">Courses in Progress</h4>
          <div class="col-md-4 course-search-field no-padding">
            <form id="search-form" method="GET" action="" data-section="">
              <div class="form-group search-input">
                <input type="text" class="form-control" id="search-field" name="" value="" placeholder="Search Courses">
              </div>
            </form>
          </div>
        </div>

          <div class="carousel-inner dashboard-item-container">
            <div class="carousel-item dashboard-item light-grey-bg  active">
              <div class="row">
                <div class="col-md course-card-container">
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
                <div class="col-md course-card-container">
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
                      <p class="text-center"></p>
                    </div>
                  </div>
                </div>
                <div class="col-md course-card-container">
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
                      <p><span class="course-progress">70</span>% Completed</p>
                      <div class="progress">
                        <div class="progress-bar" style="width:70%"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md course-card-container">
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
                      <p><span class="course-progress">70</span>% Completed</p>
                      <div class="progress">
                        <div class="progress-bar" style="width:70%"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md course-card-container">
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
                      <p><span class="course-progress">70</span>% Completed</p>
                      <div class="progress">
                        <div class="progress-bar" style="width:70%"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item dashboard-item light-grey-bg">
              <div class="row">
                <div class="col-md course-card-container">
                  <div class="card course-card">
                    <div class="card-header light-blue">
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
                <div class="col-md course-card-container">
                  <div class="card course-card">
                    <div class="card-header green">
                      <ul class="nav course-details">
                        <li class="nav-item thin-heading">Courses</li>
                      </ul>
                    </div>
                    <div class="card-body">
                      <h5><a href="#">Creating Student-Driven Instruction with SMART Learning Suite Online</a></h5>
                    </div>
                    <div class="card-footer">
                      <p><span class="course-progress">70</span>% Completed</p>
                      <div class="progress">
                        <div class="progress-bar" style="width:70%"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md course-card-container"></div>
                <div class="col-md course-card-container"></div>
                <div class="col-md course-card-container"></div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#course-progress-carousel" role="button" data-slide="prev">
            <svg version="1.1" viewBox="0 0 25 25">
            	 <circle class="white-fill dropshadow" cx="12.5" cy="12.5" r="11.109"/>
            	 <polygon class="st1" points="14.622,5.7 12.713,5.7 8.033,12.5 12.713,19.3 14.622,19.3 9.942,12.5 "/>
            </svg>
          </a>
          <a class="carousel-control-next" href="#course-progress-carousel" role="button" data-slide="next">
            <svg version="1.1" viewBox="0 0 25 25">
            	 <circle class="white-fill dropshadow" cx="12.5" cy="12.5" r="11.109"/>
            	 <polygon points="15.058,12.5 10.378,19.3 12.287,19.3 16.967,12.5 12.287,5.7 10.378,5.7 "/>
            </svg>
          </a>
      </div>

    </div>
  </div>

  <div class="container-fluid white-bg">
    <div class="row user-data">
      <div class="col-md-12 carousel-container carousel slide">
        <h4>Certifications in Progress</h4>
      </div>
    </div>
  </div>


  <?php include 'digital-online-certifications.php';?>
</section>

<?php include 'footer.php';?>
