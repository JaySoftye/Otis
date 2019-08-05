<?php include 'header.php';?>
<?php include 'askotis.php';?>
  <?php
  include 'login-window.php';
    $default_background_image_url='assets/images/default-course-background_lg.jpg';
  ?>

<section class="main-content thin-search-bar">

  <script>
  $(document).ready(function(){
    $('[data-toggle="popover"]').popover();
  });
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

  <?php include 'search-field.php';?>

  <section class="container-fluid">
    <div class="row align-items-center padding-top">
      <div class="col">
        <div id="course-calendar-date-selector" class="carousel-container carousel slide" data-ride="carousel" data-interval="false">
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item">January</div>
            <div class="carousel-item">February</div>
            <div class="carousel-item">March</div>
            <div class="carousel-item">April</div>
            <div class="carousel-item">May</div>
            <div class="carousel-item">June</div>
            <div class="carousel-item active">July</div>
            <div class="carousel-item">August</div>
            <div class="carousel-item">September</div>
            <div class="carousel-item">October</div>
            <div class="carousel-item">November</div>
            <div class="carousel-item">December</div>
          </div>
          <a class="carousel-control-prev" href="#course-calendar-date-selector" role="button" data-slide="prev">
            <svg version="1.1" viewBox="0 0 25 25">
            	 <circle class="light-grey-fill dropshadow" cx="12.5" cy="12.5" r="11.109"/>
            	 <polygon class="st1" points="14.622,5.7 12.713,5.7 8.033,12.5 12.713,19.3 14.622,19.3 9.942,12.5 "/>
            </svg>
          </a>
          <a class="carousel-control-next" href="#course-calendar-date-selector" role="button" data-slide="next">
            <svg version="1.1" viewBox="0 0 25 25">
            	 <circle class="light-grey-fill dropshadow" cx="12.5" cy="12.5" r="11.109"/>
            	 <polygon points="15.058,12.5 10.378,19.3 12.287,19.3 16.967,12.5 12.287,5.7 10.378,5.7 "/>
            </svg>
          </a>
        </div>
      </div>
      <div class="col d-flex justify-content-center timezone-selection-container">
        <div class="timezone-selection">
          <strong>Time Zone</strong>
          <select name="timezone" data-url="/users/set-timezone">
            <option value="eastern" selected="selected">Eastern</option>
            <option value="central">Central</option>
            <option value="mountain">Mountain</option>
            <option value="pacific">Pacific</option>
            <option value="hawaii">Hawaii</option>
            <option value="alaska">Alaska</option>
            <option value="atlantic">Atlantic</option>
            <option value="saskatchewan">Saskatchewan</option>
            <option value="newfoundland">Newfoundland</option>
          </select>
        </div>
      </div>
      <div class="col d-flex justify-content-center view-buttons-container">
        <div class="view-buttons">
          <strong>Views</strong>
          <a class="calendar-view-change active" id="course-calendar-view">
            <img src="assets/images/course-calendar-calendar-view.svg">
          </a>
          <a class="calendar-view-change" id="course-list-view">
            <img src="assets/images/course-calendar-list-view.svg">
          </a>
        </div>
      </div>
      <div class="col d-flex justify-content-center course-type-container">
        <img class="width-full" src="assets/images/course-calendar-type-icons.svg">
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
              <a class="event" href="course-details-certification.php"
                  tabindex="0"
                  role="button"
                  data-html="true"
                  data-toggle="popover"
                  data-trigger="hover"
                  data-placement="top"
                  title="<small>July 6, 1:00PM - 3:00PM EST</small>"
                  data-content="<p>Join us for the fourth session of our Google Educator Basics Digital Teacher Certification (DTC) to learn how to utilize Google Drive in your classroom. With discussion topics like uploading content, making and sharing documents, and creating a paperless classroom, it's sure to be a wild ride!</p>">
                <span class="week-of-date">Thursday <strong>6</strong></span>
                <p class="event-title">Teq DTC: Google Educator Basics Session 4 - Drive</p>
                <p class="event-description">Join us for the fourth session of our Google Educator Basics Digital Teacher Certification (DTC) to learn how to utilize Google Drive in your classroom. With discussion topics like uploading content, making and sharing documents, and creating a paperless classroom, it's sure to be a wild ride!</p>
                <small>1:00pm to 3:00pm EST</small>
              </a>
              <span class="date">6</span>
              <a class="event" href="course-details-single-course.php"
                  tabindex="0"
                  role="button"
                  data-html="true"
                  data-toggle="popover"
                  data-trigger="hover"
                  data-placement="top"
                  title="<small>July 6, 4:00PM - 5:00PM EST</small>"
                  data-content="<p>The purpose of a traditional school library is to is to encourage curiosity, innovation, and problem-solving. Did you know the purpose of a makerspace is the same? If you have been thinking about creating a maker space in your library, go ahead and take the plunge! In this session we'll talk about the many advantages of giving students a hands-on place to learn and apply concepts from all fields of study.</p>">
                <span class="week-of-date">Thursday <strong>6</strong></span>
                <p class="event-title">Using Your Library to Create a Makerspace</p>
                <p class="event-description">The purpose of a traditional school library is to is to encourage curiosity, innovation, and problem-solving. Did you know the purpose of a makerspace is the same? If you have been thinking about creating a maker space in your library, go ahead and take the plunge! In this session we'll talk about the many advantages of giving students a hands-on place to learn and apply concepts from all fields of study.</p>
                <small>4:00pm to 5:00pm EST</small>
              </a>
            </li>
            <li class="day empty">
              <span class="date">7</span>
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
            <li class="day free-course">
              <span class="date">11</span>
              <a class="event" href="course-details-single-course.php"
                  tabindex="0"
                  role="button"
                  data-html="true"
                  data-toggle="popover"
                  data-trigger="hover"
                  data-placement="top"
                  title="<small>July 11, 4:00PM - 5:00PM EST</small>"
                  data-content="<p>Looking for technology-infused learning ideas for your math classroom? In this session, we'll guide you through a geometry lesson that will put your students' critical thinking and measuring skills to the test! Geared towards 3rd through 6th grade students, this lesson will incorporate one of Teq's favorite robots: Dash! In this lesson, students will apply their understanding of geometry to create different shapes using their Dash robot. Students will explore angles, quadrilaterals, polygons, algorithms, design planning, and block-based coding.</p>">
                <span class="week-of-date">Tuesday <strong>11</strong></span>
                <p class="event-title">Tech-Infused Learning: Geometry with Dash</p>
                <p class="event-description">Looking for technology-infused learning ideas for your math classroom? In this session, we'll guide you through a geometry lesson that will put your students' critical thinking and measuring skills to the test! Geared towards 3rd through 6th grade students, this lesson will incorporate one of Teq's favorite robots: Dash! In this lesson, students will apply their understanding of geometry to create different shapes using their Dash robot. Students will explore angles, quadrilaterals, polygons, algorithms, design planning, and block-based coding.</p>
                <small>4:00pm to 5:00pm EST</small>
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
            <li class="day live-course">
              <span class="date">19</span>
              <a class="event" href="course-details-single-course.php"
                  tabindex="0"
                  role="button"
                  data-html="true"
                  data-toggle="popover"
                  data-trigger="hover"
                  data-placement="top"
                  title="<small>July 18, 11:00AM to 12:00pm EST</small>"
                  data-content="<p>Clubs can be an exciting way to get students involved in programs outside of the classroom. Join us to learn about setting up your own computer science club, measuring the impact once it’s up and running, and growing your program to have a positive impact on even more students in your school!</p>">
                <span class="week-of-date">Wednesday <strong>18</strong></span>
                <p class="event-title">Tips and Resources for Starting a Computer Science Club in Your School</p>
                <p class="event-description">Clubs can be an exciting way to get students involved in programs outside of the classroom. Join us to learn about setting up your own computer science club, measuring the impact once it’s up and running, and growing your program to have a positive impact on even more students in your school!</p>
                <small>11:00AM to 12:00pm EST</small>
              </a>
            </li>
            <li class="day empty certification-course">
              <span class="date">20</span>
              <a class="event" href="course-details-single-course.php"
                  tabindex="0"
                  role="button"
                  data-html="true"
                  data-toggle="popover"
                  data-trigger="hover"
                  data-placement="top"
                  title="<small>July 20, 11:00AM to 12:00pm EST</small>"
                  data-content="<p>Get ready for some campfire tales with this digital storytelling course featuring Sphero. In this great cross-curricular session, we'll show you how to code your device to tell your favorite stories. Lights, Sphero, Action!</p>">
                <span class="week-of-date">Thursday <strong>20</strong></span>
                <p class="event-title">Digital Storytelling Around the Campfire with Sphero</p>
                <p class="event-description">Get ready for some campfire tales with this digital storytelling course featuring Sphero. In this great cross-curricular session, we'll show you how to code your device to tell your favorite stories. Lights, Sphero, Action!</p>
                <small>11:00AM to 12:00pm EST</small>
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
              <a class="event" href="course-details-single-course.php"
                  tabindex="0"
                  role="button"
                  data-html="true"
                  data-toggle="popover"
                  data-trigger="hover"
                  data-placement="top"
                  title="<small>July 24, 11:00AM to 12:00pm EST</small>"
                  data-content="<p>Congratulations! You have made it to the last session in our Google Educator Basics Certification series! You are one assignment away from earning your certificate and this session is going to give you all the tips, tricks, and details you need to make that happen! We will provide you with plenty of example final assignments, a detailed look at the rubric, and a review of the Google Educator Certification process should you decide to move forward.</p>">
                <span class="week-of-date">Monday <strong>24</strong></span>
                <p class="event-title">Teq DTC: Google Educator Basics Session 15 - Final Assignment</p>
                <p class="event-description">Congratulations! You have made it to the last session in our Google Educator Basics Certification series! You are one assignment away from earning your certificate and this session is going to give you all the tips, tricks, and details you need to make that happen! We will provide you with plenty of example final assignments, a detailed look at the rubric, and a review of the Google Educator Certification process should you decide to move forward.</p>
                <small>11:00AM to 12:00pm EST</small>
              </a>
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
