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
      <a class="nav-item thin-heading" href="user-dashboard-teacher.php">My Dashboard</a>
      <a class="nav-item thin-heading" href="user-progress-tracker.php">Progress Tracker</a>
      <a class="nav-item thin-heading active" href="user-achievements.php">Achievements</a>
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
      <h4 class="col-md-8">Completed Courses</h4>
      <div class="col-md-4 course-search-field no-padding">
        <form id="search-form" method="GET" action="" data-section="">
          <div class="form-group search-input">
            <input type="text" class="form-control" id="search-field" name="" value="" placeholder="Search Courses">
          </div>
        </form>
      </div>

      <div id="completed-courses" class="col-md-12 carousel-container carousel slide" data-ride="carousel" data-interval="false">
          <div class="carousel-inner dashboard-item-container">
            <div class="carousel-item dashboard-item light-grey-bg  active">
              <div class="row">
                <div class="col-md course-card-container">
                  <div class="card course-card">
                    <div class="card-body">
                      <h5><a href="#">Best Practices for Using Your SMART Board as a Station</a></h5>
                    </div>
                    <div class="card-footer completed-certificate">
                      <a href="" class="inline-block float-right">
                        <img class="height-full" src="assets/images/download-certificate-icon.svg" />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md course-card-container">
                  <div class="card course-card">
                    <div class="card-body">
                      <h5><a href="#">SMART Podium Basics</a></h5>
                    </div>
                    <div class="card-footer completed-certificate">
                      <a href="" class="inline-block float-right">
                        <img class="height-full" src="assets/images/download-certificate-icon.svg" />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md course-card-container">
                  <div class="card course-card">
                    <div class="card-body">
                      <h5><a href="#">Creating Student-Driven Instruction with SMART Learning Suite Online</a></h5>
                    </div>
                    <div class="card-footer completed-certificate">
                      <a href="" class="inline-block float-right">
                        <img class="height-full" src="assets/images/download-certificate-icon.svg" />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md course-card-container">
                  <div class="card course-card">
                    <div class="card-body">
                      <h5><a href="#">Supports in SMART Notebook for the Special Education Classroom</a></h5>
                    </div>
                    <div class="card-footer completed-certificate">
                      <a href="" class="inline-block float-right">
                        <img class="height-full" src="assets/images/download-certificate-icon.svg" />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md course-card-container">
                  <div class="card course-card">
                    <div class="card-body">
                      <h5><a href="#">Teaching Music with SmartMusic</a></h5>
                    </div>
                    <div class="card-footer completed-certificate">
                      <a href="" class="inline-block float-right">
                        <img class="height-full" src="assets/images/download-certificate-icon.svg" />
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item dashboard-item light-grey-bg">
              <div class="row">
                <div class="col-md course-card-container">
                  <div class="card course-card">
                    <div class="card-body">
                      <h5><a href="#">Geography in the Interactive Classroom</a></h5>
                    </div>
                    <div class="card-footer completed-certificate">
                      <a href="" class="inline-block float-right">
                        <img class="height-full" src="assets/images/download-certificate-icon.svg" />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md course-card-container">
                  <div class="card course-card">
                    <div class="card-body">
                      <h5><a href="#">Using SMART Notebook Player App on iPad</a></h5>
                    </div>
                    <div class="card-footer completed-certificate">
                      <a href="" class="inline-block float-right">
                        <img class="height-full" src="assets/images/download-certificate-icon.svg" />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md course-card-container">
                  <div class="card course-card">
                    <div class="card-body">
                      <h5><a href="#">SMART iq Module</a></h5>
                    </div>
                    <div class="card-footer completed-certificate">
                      <a href="" class="inline-block float-right">
                        <img class="height-full" src="assets/images/download-certificate-icon.svg" />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md course-card-container">
                  <div class="card course-card">
                    <div class="card-body">
                      <h5><a href="#">SMART Board Basics: MX Series</a></h5>
                    </div>
                    <div class="card-footer completed-certificate">
                      <a href="" class="inline-block float-right">
                        <img class="height-full" src="assets/images/download-certificate-icon.svg" />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md course-card-container">
                  <div class="card course-card">
                    <div class="card-body">
                      <h5><a href="#">Saving Teachers Time</a></h5>
                    </div>
                    <div class="card-footer completed-certificate">
                      <a href="" class="inline-block float-right">
                        <img class="height-full" src="assets/images/download-certificate-icon.svg" />
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item dashboard-item light-grey-bg">
              <div class="row">
                <div class="col-md course-card-container">
                  <div class="card course-card">
                    <div class="card-body">
                      <h5><a href="#">MakerBot Replicator Z18 Basics</a></h5>
                    </div>
                    <div class="card-footer completed-certificate">
                      <a href="" class="inline-block float-right">
                        <img class="height-full" src="assets/images/download-certificate-icon.svg" />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md course-card-container">
                  <div class="card course-card">
                    <div class="card-body">
                      <h5><a href="#">MakerBot Replicator Mini+ Basics</a></h5>
                    </div>
                    <div class="card-footer completed-certificate">
                      <a href="" class="inline-block float-right">
                        <img class="height-full" src="assets/images/download-certificate-icon.svg" />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md course-card-container"></div>
                <div class="col-md course-card-container"></div>
                <div class="col-md course-card-container"></div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#completed-courses" role="button" data-slide="prev">
            <svg version="1.1" viewBox="0 0 25 25">
            	 <circle class="white-fill dropshadow" cx="12.5" cy="12.5" r="11.109"/>
            	 <polygon class="st1" points="14.622,5.7 12.713,5.7 8.033,12.5 12.713,19.3 14.622,19.3 9.942,12.5 "/>
            </svg>
          </a>
          <a class="carousel-control-next" href="#completed-courses" role="button" data-slide="next">
            <svg version="1.1" viewBox="0 0 25 25">
            	 <circle class="white-fill dropshadow" cx="12.5" cy="12.5" r="11.109"/>
            	 <polygon points="15.058,12.5 10.378,19.3 12.287,19.3 16.967,12.5 12.287,5.7 10.378,5.7 "/>
            </svg>
          </a>
      </div>

      <h4 class="col-md-12 padding-top">Completed Digital Teacher Certifications (DTC)</h4>

      <div id="course-progress-carousel" class="col-md-12 carousel-container carousel slide" data-ride="carousel" data-interval="false">
          <div class="carousel-inner dashboard-item-container">
            <div class="carousel-item dashboard-item light-grey-bg  active">
              <div class="row">
                <div class="col-md course-card-container">
                  <div class="card course-card">
                    <div class="card-body">
                      <h5><a href="#">Teq DTC: Google Educator Basics <span class="block">(15 Sessions)</span></a></h5>
                    </div>
                    <div class="card-footer completed-certificate">
                      <a href="" class="inline-block float-right">
                        <img class="height-full" src="assets/images/download-certificate-icon.svg" />
                      </a>
                      <a href="" class="inline-block float-left">
                        <img class="height-full" src="assets/images/certification-icon.svg" />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md course-card-container">
                  <div class="card course-card">
                    <div class="card-body">
                      <h5><a href="#">Teq DTC: Apple <span class="block">(9 Sessions)</span></a></h5>
                    </div>
                    <div class="card-footer completed-certificate">
                      <a href="" class="inline-block float-right">
                        <img class="height-full" src="assets/images/download-certificate-icon.svg" />
                      </a>
                      <a href="" class="inline-block float-left">
                        <img class="height-full" src="assets/images/certification-icon.svg" />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md course-card-container">
                  <div class="card course-card">
                    <div class="card-body">
                      <h5><a href="#">Teq DTC: Microsoft Office 365 <span class="block">(14 Sessions)</span></a></h5>
                    </div>
                    <div class="card-footer completed-certificate">
                      <a href="" class="inline-block float-right">
                        <img class="height-full" src="assets/images/download-certificate-icon.svg" />
                      </a>
                      <a href="" class="inline-block float-left">
                        <img class="height-full" src="assets/images/certification-icon.svg" />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md course-card-container">
                  <div class="card course-card">
                    <div class="card-body">
                      <h5><a href="#">Google Educator Certification: Advanced <span class="block">(14 Sessions)</span></a></h5>
                    </div>
                    <div class="card-footer completed-certificate">
                      <a href="" class="inline-block float-right">
                        <img class="height-full" src="assets/images/download-certificate-icon.svg" />
                      </a>
                      <a href="" class="inline-block float-left">
                        <img class="height-full" src="assets/images/certification-icon.svg" />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md course-card-container">
                  <div class="card course-card">
                    <div class="card-body">
                      <h5><a href="#">Promethean Activ Digital Teacher Certification <span class="block">(8 Sessions)</span></a></h5>
                    </div>
                    <div class="card-footer completed-certificate">
                      <a href="" class="inline-block float-right">
                        <img class="height-full" src="assets/images/download-certificate-icon.svg" />
                      </a>
                      <a href="" class="inline-block float-left">
                        <img class="height-full" src="assets/images/certification-icon.svg" />
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item dashboard-item light-grey-bg">
              <div class="row">
                <div class="col-md course-card-container">
                  <div class="card course-card">
                    <div class="card-body">
                      <h5><a href="#">Teq DTC: SMART Learning Suite <span class="block">(9 Sessions)</span></a></h5>
                    </div>
                    <div class="card-footer completed-certificate">
                      <a href="" class="inline-block float-right">
                        <img class="height-full" src="assets/images/download-certificate-icon.svg" />
                      </a>
                      <a href="" class="inline-block float-left">
                        <img class="height-full" src="assets/images/certification-icon.svg" />
                      </a>
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
      <div class="col-md-12 padding-bottom">
        <h4>Proficiency Badges</h4>
      </div>
      <div class="col-md-2 col-sm-4">
        <img class="width-full" src="https://onlinepd.teq.com/uploads/badge/Prep-for-Exam.png">
        <p class="text-center"><small>Prepping for the Exam</small></p>
      </div>
      <div class="col-md-2 col-sm-4">
        <img class="width-full" src="https://onlinepd.teq.com/uploads/badge/DonorsChoose.png">
        <p class="text-center"><small>Funding Classroom Projects with DonorsChoose.org</small></p>
      </div>
      <div class="col-md-2 col-sm-4">
        <img class="width-full" src="https://onlinepd.teq.com/uploads/badge/PD-Icon-Effective-tech-new.png">
        <p class="text-center"><small>Identifying Effective Classroom Technology Usage</small></p>
      </div>
      <div class="col-md-2 col-sm-4">
        <img class="width-full" src="https://onlinepd.teq.com/uploads/badge/Measurements-Google-Earth.png">
        <p class="text-center"><small>Measurements and Unit Conversions in Google Earth</small></p>
      </div>
      <div class="col-md-2 col-sm-4">
        <img class="width-full" src="https://onlinepd.teq.com/uploads/badge/Google-Throwdown.png">
        <p class="text-center"><small>Google Innovator Throwdown Highlights</small></p>
      </div>
      <div class="col-md-2 col-sm-4">
        <img class="width-full" src="https://onlinepd.teq.com/uploads/badge/web-safety-for-students.png">
        <p class="text-center"><small>Web Safety for Students</small></p>
      </div>
      <div class="col-md-2 col-sm-4">
        <img class="width-full" src="https://onlinepd.teq.com/uploads/badge/KIBO-Basics.png">
        <p class="text-center"><small>KIBO Basics</small></p>
      </div>
      <div class="col-md-2 col-sm-4">
        <img class="width-full" src="https://onlinepd.teq.com/uploads/badge/PD-Icon-SMTable.png">
        <p class="text-center"><small>Intro to SMART Table</small></p>
      </div>
      <div class="col-md-2 col-sm-4">
        <img class="width-full" src="https://onlinepd.teq.com/uploads/badge/Makey_Makey.png">
        <p class="text-center"><small>Makey Makey Classic</small></p>
      </div>
    </div>
  </div>


  <?php include 'digital-online-certifications.php';?>
</section>

<?php include 'footer.php';?>
