<?php include 'header.php';?>
<?php include 'askotis.php';?>
  <?php
  include 'login-window.php';
    $default_background_image_url='assets/images/default-course-background_lg.jpg';
  ?>

<section class="main-content">

  <section class="container-fluid course-background" style="background-image: url('<?php echo $default_background_image_url; ?>');">
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
  </section>

  <section class="container-fluid">
    <div class="row align-items-center padding-bottom">
      <div class="col-md-3 col-sm-6">
        <p><img src="assets/course-calendar-type-icons.svg" /></p>
      </div>
      <div class="col-md-9 col-sm-6">
        <p><small class="blue-text">To view course details simply <strong>click on the course title</strong>.</small></p>
      </div>
    </div>
  </section>

  <section class="container-fluid">
    <div class="row align-items-center padding-bottom">
      <div class="col-md-6">
        <div id="course-calendar-date-selector" class="carousel slide" >
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item">
              <h2>June 2017</h2>
            </div>
            <div class="carousel-item active">
              <h2>July 2017</h2>
            </div>
            <div class="carousel-item">
              <h2>August 2017</h2>
            </div>
          </div>
          <a class="carousel-control-prev" href="#course-calendar-date-selector" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#course-calendar-date-selector" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="col-md-6 hide-small text-right">
        <a class="calendar-view-change active" id="course-calendar-view"><img src="assets/course-calendar-calendar-view.svg" /> Calendar View</a>
        <a class="calendar-view-change" id="course-list-view"><img src="assets/course-calendar-list-view.svg" /> List View</a>
      </div>
    </div>
  </section>

  <section class="container-fluid">
    <div class="row padding-bottom">

      <div id="calendar-wrap" class="padding-bottom">

        <div class="calendar" id="calender-container">
          <ul class="weekdays">
            <li class="day">Sunday</li>
            <li class="day">Monday</li>
            <li class="day">Tuesday</li>
            <li class="day">Wednesday</li>
            <li class="day">Thursday</li>
            <li class="day">Friday</li>
            <li class="day">Saturday</li>
          </ul>

          <ul class="days">
            <li class="day other-month disabled">
              <span class="date">25</span>
              <a class="event">
               <p class="event-title"></p>
              </a>
            </li>
            <li class="day other-month disabled">
              <span class="date">26</span>
              <a class="event">
               <p class="event-title"></p>
              </a>
            </li>
            <li class="day other-month disabled">
              <span class="date">27</span>
              <a class="event">
               <p class="event-title"></p>
              </a>
            </li>
            <li class="day other-month disabled">
              <span class="date">28</span>
              <a class="event">
               <p class="event-title"></p>
              </a>
            </li>
            <li class="day other-month disabled">
              <span class="date">29</span>
              <a class="event">
               <p class="event-title"></p>
              </a>
            </li>
            <li class="day other-month disabled">
              <span class="date">30</span>
              <a class="event">
               <p class="event-title"></p>
              </a>
            </li>
            <li class="day empty">
              <span class="date">1</span>
              <a class="event">
               <p class="event-title"></p>
              </a>
            </li>
          </ul>

          <ul class="days">
            <li class="day empty">
              <span class="date">2</span>
              <a class="event">
               <p class="event-title"></p>
              </a>
            </li>
            <li class="day empty">
              <span class="date">3</span>
              <a class="event">
               <p class="event-title"></p>
              </a>
            </li>
            <li class="day empty">
              <span class="date">4</span>
              <a class="event">
               <p class="event-title"></p>
              </a>
            </li>
            <li class="day empty">
              <span class="date">5</span>
              <a class="event">
               <p class="event-title"></p>
              </a>
            </li>
            <li class="day">
              <span class="date">6</span>
              <a class="event" href="course-details.php"
                  tabindex="0"
                  role="button"
                  data-html="true"
                  data-toggle="popover"
                  data-trigger="hover"
                  data-placement="top"
                  title="<small>July 6, 1:00PM - 3:00PM EST</small>"
                  data-content="<p>There are a large variety of resources on the web to support science curriculum for all grade levels. These include Shockwave Flash simulators, Java applets, and a plethora of Flash videos. We will discover how to find, download, and make good use of these high-quality teaching aids. How are you going to distribute this to your students? We will take a quick tour.</p>">
                <span class="week-of-date">Thursday <strong>6</strong></span>
                <span class="calendar-course-type"><img src="assets/course-calendar-free-icon.svg" /></span>
                <p class="event-title">HTML 5 lecture with Brad Traversy from Eduonix I</p>
                <p class="event-description">There are a large variety of resources on the web to support science curriculum for all grade levels. These include Shockwave Flash simulators, Java applets, and a plethora of Flash videos. We will discover how to find, download, and make good use of these high-quality teaching aids. How are you going to distribute this to your students? We will take a quick tour.</p>
                <small>1:00pm to 3:00pm EST</small>
              </a>
              <?php include 'course-calendar-admin-menu.php'; ?>
              <a class="event" href="course-details.php"
                  tabindex="0"
                  role="button"
                  data-html="true"
                  data-toggle="popover"
                  data-trigger="hover"
                  data-placement="top"
                  title="<small>July 6, 4:00PM - 5:00PM EST</small>"
                  data-content="<p>We further explore the wonders of Shockwave Flash simulators, Java applets, and a plethora of Flash videos. We will discover how to find, download, and make good use of these high-quality teaching aids. </p>">
                <span class="week-of-date">Thursday <strong>6</strong></span>
                <span class="calendar-course-type"><img src="assets/course-calendar-free-icon.svg" /></span>
                <p class="event-title">HTML 5 lecture with Brad Traversy from Eduonix II</p>
                <p class="event-description">We further explore the wonders of Shockwave Flash simulators, Java applets, and a plethora of Flash videos. We will discover how to find, download, and make good use of these high-quality teaching aids. </p>
                <small>4:00pm to 5:00pm EST</small>
              </a>
              <?php include 'course-calendar-admin-menu.php'; ?>
            </li>
            <li class="day">
              <a class="event" href="course-details.php"
                  tabindex="0"
                  role="button"
                  data-html="true"
                  data-toggle="popover"
                  data-trigger="hover"
                  data-placement="top"
                  title="<small>July 6, 10:00AM - 11:00AM EST</small>"
                  data-content="<p><span>Digital Manipulatives for the Science Classroom</span>There are a large variety of resources on the web to support science curriculum for all grade levels. These include Shockwave Flash simulators, Java applets, and a plethora of Flash videos. We will discover how to find, download, and make good use of these high-quality teaching aids. How are you going to distribute this to your students? We will take a quick tour.</p>">
                <span class="week-of-date">Friday <strong>7</strong></span>
                <span class="calendar-course-type"><img src="assets/course-calendar-certification-icon.svg" /></span>
                <p class="event-title">HTML 5 lecture with Brad Traversy from Eduonix</p>
                <p class="event-description">There are a large variety of resources on the web to support science curriculum for all grade levels. These include Shockwave Flash simulators, Java applets, and a plethora of Flash videos. We will discover how to find, download, and make good use of these high-quality teaching aids. How are you going to distribute this to your students? We will take a quick tour.</p>
                <small>1:00pm to 3:00pm EST</small>
              </a>
              <?php include 'course-calendar-admin-menu.php'; ?>
            </li>
            <li class="day empty">
              <a class="event">
               <span class="date">8</span>
               <p class="event-title"></p>
              </a>
            </li>
          </ul>

          <ul class="days">
            <li class="day empty">
              <span class="date">9</span>
              <a class="event">
               <p class="event-title"></p>
              </a>
            </li>
            <li class="day empty">
              <span class="date">10</span>
              <a class="event">
               <p class="event-title"></p>
              </a>
            </li>
            <li class="day empty">
              <span class="date">11</span>
              <a class="event">
               <p class="event-title"></p>
              </a>
            </li>
            <li class="day empty">
              <span class="date">12</span>
              <a class="event">
               <p class="event-title"></p>
              </a>
            </li>
            <li class="day empty">
              <span class="date">13</span>
              <a class="event">
               <p class="event-title"></p>
              </a>
            </li>
            <li class="day empty">
              <span class="date">14</span>
              <a class="event">
               <p class="event-title"></p>
              </a>
            </li>
            <li class="day empty">
              <span class="date">15</span>
              <a class="event">
               <p class="event-title"></p>
              </a>
            </li>
          </ul>

          <ul class="days">
            <li class="day empty">
              <span class="date">16</span>
              <a class="event">
               <p class="event-title"></p>
              </a>
            </li>
            <li class="day empty">
              <span class="date">17</span>
              <a class="event">
               <p class="event-title"></p>
              </a>
            </li>
            <li class="day empty">
              <span class="date">18</span>
              <a class="event">
               <p class="event-title"></p>
              </a>
            </li>
            <li class="day empty">
              <span class="date">19</span>
              <a class="event">
               <p class="event-title"></p>
              </a>
            </li>
            <li class="day empty">
              <span class="date">20</span>
              <a class="event">
               <p class="event-title"></p>
              </a>
            </li>
            <li class="day empty">
              <span class="date">21</span>
              <a class="event">
               <p class="event-title"></p>
              </a>
            </li>
            <li class="day empty">
              <span class="date">22</span>
              <a class="event">
               <p class="event-title"></p>
              </a>
            </li>
          </ul>
          <ul class="days">
            <li class="day empty">
              <span class="date">23</span>
              <a class="event">
               <p class="event-title"></p>
              </a>
            </li>
            <li class="day">
              <span class="date">24</span>
              <a class="event" href="course-details.php"
                  tabindex="0"
                  role="button"
                  data-html="true"
                  data-toggle="popover"
                  data-trigger="hover"
                  data-placement="top"
                  title="<small>July 6, 10:00AM - 11:00AM EST</small>"
                  data-content="<p><span>Digital Manipulatives for the Science Classroom</span>There are a large variety of resources on the web to support science curriculum for all grade levels. These include Shockwave Flash simulators, Java applets, and a plethora of Flash videos. We will discover how to find, download, and make good use of these high-quality teaching aids. How are you going to distribute this to your students? We will take a quick tour.</p>">
                <span class="week-of-date">Monday <strong>24</strong></span>
                <span class="calendar-course-type"><img src="assets/course-calendar-live-icon.svg" /> <img src="assets/course-calendar-certification-icon.svg" /></span>
                <p class="event-title">HTML 5 lecture with Brad Traversy from Eduonix</p>
                <p class="event-description">There are a large variety of resources on the web to support science curriculum for all grade levels. These include Shockwave Flash simulators, Java applets, and a plethora of Flash videos. We will discover how to find, download, and make good use of these high-quality teaching aids. How are you going to distribute this to your students? We will take a quick tour.</p>
                <small>1:00pm to 3:00pm EST</small>
              </a>
              <?php include 'course-calendar-admin-menu.php'; ?>
            </li>
            <li class="day empty">
              <span class="date">25</span>
              <a class="event">
               <p class="event-title"></p>
              </a>
            </li>
            <li class="day empty">
              <span class="date">26</span>
              <a class="event">
               <p class="event-title"></p>
              </a>
            </li>
            <li class="day empty">
              <span class="date">27</span>
              <a class="event">
               <p class="event-title"></p>
              </a>
            </li>
            <li class="day empty">
              <span class="date">28</span>
              <a class="event">
               <p class="event-title"></p>
              </a>
            </li>
            <li class="day empty">
              <span class="date">29</span>
              <a class="event">
               <p class="event-title"></p>
              </a>
            </li>
          </ul>
          <ul class="days disabled">
            <li class="day empty">
              <span class="date">30</span>
              <a class="event">
               <p class="event-title"></p>
              </a>
            </li>
            <li class="day empty">
              <span class="date">31</span>
              <a class="event">
               <p class="event-title"></p>
              </a>
            </li>
            <li class="day other-month disabled">
              <span class="date">1</span>
              <a class="event">
               <p class="event-title"></p>
              </a>
            </li>
            <li class="day other-month disabled">
              <span class="date">2</span>
              <a class="event">
               <p class="event-title"></p>
              </a>
            </li>
            <li class="day other-month disabled">
              <span class="date">3</span>
              <a class="event">
               <p class="event-title"></p>
              </a>
            </li>
            <li class="day other-month disabled">
              <span class="date">4</span>
              <a class="event">
               <p class="event-title"></p>
              </a>
            </li>
            <li class="day other-month disabled">
              <span class="date">5</span>
              <a class="event">
               <p class="event-title"></p>
              </a>
            </li>
          </ul>

        </div><!-- /. calendar -->
      </div><!-- /. wrap -->

    </div>
  </section>



<script>
/**
DELETE THIS
ONLY USED TO SHOW HOW THE FORM WILL WORK ON THE FRONT END
**/
var a = document.getElementById('course-calendar-view');
var b = document.getElementById('course-list-view');
var c = document.getElementById('calender-container');
var d = document.getElementsByClassName('popover');

a.onclick = function() {
  if ( c.classList.contains('list-view') ) {
  $('a.event').popover({
    trigger: 'hover'
  });
  c.classList.remove('list-view');
  b.classList.remove('active');
  a.classList.add('active');
  }
}

b.onclick = function() {
  $('a.event').popover('dispose');
  c.classList.add('list-view');
  b.classList.add('active');
  a.classList.remove('active');
}

</script>

  <?php include 'digital-online-certifications.php';?>

</section>

<?php include 'footer.php';?>
