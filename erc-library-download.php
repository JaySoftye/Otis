<?php
  $logged_in = True;
  include 'header.php';
?>
<?php include 'askotis.php';?>
  <?php include 'login-window.php';?>

  <?php
    $default_background_image_url='assets/images/default-course-background_lg.jpg';
  ?>

<section class="main-content">

  <div class="container-fluid erc course-background" style="background-image: url('<?php echo $default_background_image_url; ?>');">
    <div class="course-background-gradient-cover"></div>
    <div class="row">
      <div class="col-md-6 course-search-field">
        <a href="erc-category-library.php" class="erc-back-button">
          <svg version="1.1" viewBox="0 0 25 25">
            <polygon points="14.622,5.7 12.713,5.7 8.033,12.5 12.713,19.3 14.622,19.3 9.942,12.5 "></polygon>
          </svg>
          Back to Results
        </a>
      </div>
    </div>
  </div>

  <div class="container-fluid course-categories-container">
    <div class="row align-items-center">
      <div class="col-md-6 padding-top">
        <h1 class="thin-heading lesson-download">ELA - Elementary</h1>
      </div>
      <div class="col-md-6 padding-top text-right">
        <p class="lesson-content-file-type">
          <img src="assets/images/smart-notebook_icon.svg" />
        </p>
      </div>
    </div>
    <div class="row lesson-content">
      <div class="col-md-4">
        <p class="lesson-content-category">Category: <a class="bold black-text" href="#">ELA - Elementary</a></p>
        <p class="lesson-content-author">Author <span class="bold black-text">ELA - Elementary</span></p>
        <p class="lesson-content-educational-standards">Educational Standards that this lesson meets: <span class="bold black-text">KRF1d</span></p>
        <p class="lesson-content-download">
          <a class="button medium-button pd-blue-button dropshadow" href="#">DOWNLOAD LESSON</a>
        </p>
      </div>
      <div class="col-md">
        <a href="#">
          <img class="width-full" src="https://opd-beta.teq.com/uploads/erc-resources/A_is_for_Animals.PNG" />
        </a>
      </div>
    </div>
  </div>

  <?php include 'digital-online-certifications.php';?>

</section>

<?php include 'footer.php';?>
