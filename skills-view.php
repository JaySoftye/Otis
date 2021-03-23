<?php
  $logged_in = True;
  $default_background_image_url='assets/images/default-course-background_lg.jpg';
  $base_url='http://localhost:8888';
  $site_url='http://localhost:8888';
  $canvasvacant = false;
  $adobevacant = false;
?>

<?php include 'header.php';?>
  <?php include 'askotis.php';?>

<section class="main-content thin-search-bar course-details">

  <div class="event-section">
    <div class="container-fluid">


      <!-- BEGIN USING DEM SKILLS CARDS -->
      <div class="row course-selections padding-top">
        <!-- Add user role -->
        <div class="col-md-4 col-lg-4 col-sm-12 course-card-container">
          <div class="card course-card course-category padding-sm" style="background-color: #e380b1;">
            <img src="assets/images/pblock_back_2021.jpg" alt="pBlocks Product Skills" />
            <h6>Learn the ins and outs of your new STEM products with our fun, tutorial videos.  We'll cover what it is, how it works, and equip you and your students to use it in the classroom.</h6>
            <div class="choose-skill row align-items-center padding-sm-top padding-sm-bottom padding-sm-bottom">
              <h5 class="col-8 bold white-text">I want some quick tips<br> around educational technology</h5>
              <a class="col go-link" href="/skills/view-all-pblocks"> GO </a>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-lg-4 col-sm-12 course-card-container">
          <div class="card course-card course-category padding-sm" style="background-color: #8393ca;">
            <img src="assets/images/OTIS_smart_skills_2021.svg" alt="SMART Skills" />
            <h6>Sharpen your SMART skills with our series of instructional videos that guide you through the basics.  Increase your knowledge of how to use a SMART Board with these quick tips.</h6>
            <div class="choose-skill row align-items-center padding-sm-top padding-sm-bottom">
              <h5 class="bold white-text">I want some quick tips around<br> SMART boards</h5>
              <a class="col go-link" href="/skills"> GO </a>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-lg-4 col-sm-12 course-card-container">
          <div class="card course-card course-category padding-sm" style="background-color: #b2e371;">
            <img src="assets/images/OTIS_microsoft_skills_2021.svg" alt="Microsoft Skills" />
            <h6>Learn about easy to manage technology that transforms classroom time.  Educators can focus on delivering personalized learning experiences that help enable better learning outcomes</h6>
            <div class="choose-skill row align-items-center padding-sm-top padding-sm-bottom">
              <h5 class="bold white-text">I want some quick tips<br> around Microsoft technology</h5>
              <a class="col go-link" href="/skills/microsoft"> GO </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-4 col-sm-12 course-card-container">
          <div class="card course-card course-category padding-sm" style="background-color: #a2b2c9;">
            <img src="assets/images/OTIS_google_skills_2021.svg" alt="Google Skills" />
            <h6>Learn how Google tools and resources help teachers and students create, collaborate, and build digital skills for the future.</h6>
            <div class="choose-skill row align-items-center padding-sm-top padding-sm-bottom">
              <h5 class="bold white-text">I want some quick tips<br> around Google technology</h5>
              <a class="col go-link" href="/skills/google"> GO </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-4 col-sm-12 course-card-container">
          <div class="card course-card course-category padding-sm" style="background-color: #71beda;">
            <img src="assets/images/OTIS_apple_skills_2021.svg" alt="Apple Skills" />
            <h6>Learn how Apple tools can help you guide how your students use devices and apps in the classroom, and give you valuable insight into each student's progress as they work with them.</h6>
            <div class="choose-skill row align-items-center padding-sm-top padding-sm-bottom">
              <h5 class="bold white-text">I want some quick tips<br> around Apple technology</h5>
              <a class="col go-link" href="/skills/apple"> GO </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-4 col-sm-12 course-card-container">
          <div class="card course-card course-category padding-sm" style="background-color: #01a1dc;">
            <img src="assets/images/OTIS_smart_schoology_2021.svg" alt="Schoology Skills" />
            <h6 style="width: 90%; margin-left: 15px;">Learn how to use your Schoology Learning Management system through a series of short Instructional Skills videos designed to teach you specific functions and features avalible in this LMS.</h6>
            <div class="choose-skill row align-items-center padding-sm-top padding-sm-bottom">
              <h5 class="bold white-text">I want some quick tips<br> around Schoology technology</h5>
              <a class="col go-link" href="/skills/schoology"> GO </a>
            </div>
          </div>
        </div>
        <!-- php close -->
        <?php if($canvasvacant != TRUE) { ?>
          <div class="col-md-4 col-lg-4 col-sm-12 course-card-container">
            <div class="card course-card course-category padding-sm" style="background-color: #ffaa62;">
              <img src="assets/images/OTIS_smart_canvas_2021.svg" alt="Canvas Skills" />
              <h6>Learn how to use your Canvas Learning Management system through a series of short Instructional Skills videos designed to teach you specific functions and features avalible in this LMS.</h6>
              <div class="choose-skill row align-items-center padding-sm-top padding-sm-bottom">
                <h5 class="bold white-text">I want some quick tips<br> around Canvas technology</h5>
                <a class="col go-link" href="/skills/canvas"> GO </a>
              </div>
            </div>
          </div>
        <?php } ?>

        <?php  if($adobevacant != TRUE) { ?>
          <div class="col-md-4 col-lg-4 col-sm-12 course-card-container">
            <div class="card course-card course-category padding-sm" style="background-color: #eedc00;">
              <img src="assets/images/OTIS_adobe_skills_2021.svg" alt="Adobe Product Skills" />
              <h6>Learn how Adobe can help give your students the creative tools and skills they need to succeed in school and in future.</h6>
              <div class="choose-skill row align-items-center padding-sm-top padding-sm-bottom">
                <h5 class="bold white-text">I want some quick tips<br> around Adobe technology</h5>
                <a class="col go-link" href="/skills/adobe"> GO </a>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
      <!-- END OF SKILLS CARDS -->


      <!-- UNLEASE THE SKILLS CARDS -->
      <div class="row course-selections padding-top">

        <div class="col-md-4 col-lg-4 col-sm-12 course-card-container">
          <div class="card course-card course-category padding-sm" style="background-color: #fe5e5a;">
            <img src="assets/images/OTIS_lessons_2021.svg" alt="Lessons and Downloads">
            <h6>Lessons created by Teq's State Certified Educators include a variety of standards aligned lesson plans and materials for all grade levels and topics.  Each lesson includes downloadable presentation slides, a lesson plan procedure to deliver to your students &amp; is connected to an OTIS Professional Learning Sessions.</h6>
            <div class="choose-skill row align-items-center padding-sm-top padding-sm-bottom">
              <h5 class="bold white-text">Standards aligned lessons<br> and instructional resources<br> for download</h5>
              <a class="col go-link"  href="/erc"> GO </a>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-lg-4 col-sm-12 course-card-container">
          <div class="card course-card course-category padding-sm" style="background-color: #fe9040;">
            <img src="assets/images/OTIS_teqtivities_2021.jpg" alt="Teq-tivities">
            <h6>Teq-tivities are helpful activities to jumpstart meaningful learning and engage students.  Our Teq-tivities help educators bring technology into learning - and they do it by scaffolding do-anywhere activities to make sure students get the most out of every lesson.</h6>
            <div class="choose-skill row align-items-center padding-sm-top padding-sm-bottom">
              <h5 class="bold white-text">Activities to help educators<br> jumpstart learning</h5>
              <a class="col go-link"  href="/skills/teqtivities"> GO </a>
            </div>
          </div>
        </div>

      </div>






    </div>
  </div>

</section>

<?php include 'footer.php';?>
