<?php
  $logged_in = True;
  $default_background_image_url='assets/images/default-course-background_lg.jpg';
?>

<?php include 'header.php';?>
  <?php include 'askotis.php';?>

<section class="main-content thin-search-bar course-details">

  <?php include 'search-field.php';?>

  <div class="container-fluid">
    <div class="row align-items-center padding-top">
      <div class="col-md-2">
        <img src="assets/images/smart-skills-logo.svg" />
      </div>
      <div class="col-md-3">
        <img src="assets/images/smart-skills-text-logo.svg" alt="SMART Skills" />
      </div>
      <div class="col-md-7">
        <h3>What SMART Board skills are you interested in?</h3>
        <h6 class="bold">Have an interest or a need that you would like to increase your knowledge of?</h6>
        <h6 class="bold">Select a tile below and we will suggest a few related courses to get you on your way to learning!</h6>
      </div>
    </div>
  </div>

  <div class="container-fluid white-bg">
    <div class="row user-data smart-skills-container">

      <div class="col-sm-4 col-md-2 course-card-container">
        <div class="card course-card">
          <div class="card-body empty">
            <a href="smart-skills-courses.php" class="bold">Adding Content</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-2 course-card-container">
        <div class="card course-card">
          <div class="card-body empty">
            <a href="#" class="bold">Adding Multimedia</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-2 course-card-container">
        <div class="card course-card">
          <div class="card-body empty">
            <a href="#" class="bold">Annotating with Digital Ink</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-2 course-card-container">
        <div class="card course-card">
          <div class="card-body empty">
            <a href="#" class="bold">Assessment</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-2 course-card-container">
        <div class="card course-card">
          <div class="card-body empty">
            <a href="#" class="bold">Collaborative Group Work</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-2 course-card-container">
        <div class="card course-card">
          <div class="card-body empty">
            <a href="#" class="bold">Connecting Student Devices</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-2 course-card-container">
        <div class="card course-card">
          <div class="card-body empty">
            <a href="#" class="bold">Converting to SMART</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-2 course-card-container">
        <div class="card course-card">
          <div class="card-body empty">
            <a href="#" class="bold">Creating Interactive Pages</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-2 course-card-container">
        <div class="card course-card">
          <div class="card-body empty">
            <a href="#" class="bold">Flipping Your Classroom</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-2 course-card-container">
        <div class="card course-card">
          <div class="card-body empty">
            <a href="#" class="bold">Game Based Learning</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-2 course-card-container">
        <div class="card course-card">
          <div class="card-body empty">
            <a href="#" class="bold">Pre-Made Lessons</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-2 course-card-container">
        <div class="card course-card">
          <div class="card-body empty">
            <a href="#" class="bold">Providing Instant Feedback</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-2 course-card-container">
        <div class="card course-card">
          <div class="card-body empty">
            <a href="#" class="bold">Review Games</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-2 course-card-container">
        <div class="card course-card">
          <div class="card-body empty">
            <a href="#" class="bold">Saving Time</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-2 course-card-container">
        <div class="card course-card">
          <div class="card-body empty">
            <a href="#" class="bold">Sharing a File</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-2 course-card-container">
        <div class="card course-card">
          <div class="card-body empty">
            <a href="#" class="bold">Untethered from the SMART Board</a>
          </div>
        </div>
      </div>

    </div>
  </div>

  <?php include 'digital-online-certifications.php';?>
</section>

<?php include 'footer.php';?>
