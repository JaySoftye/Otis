<?php
  $default_background_image_url='assets/images/default-course-background_lg.jpg';
?>

<?php include 'header.php';?>
  <?php include 'askotis.php';?>
    <?php include 'login-window.php'; ?>


<section class="main-content thin-search-bar course-details">

  <?php include 'search-field.php';?>

  <div class="container-fluid">
    <div class="row title-nav">
      <div class="col-md-3">
        <h1 class="course-details-title">This is an OTIS Course Title, BEHOLDEST!</h1>
      </div>
      <div class="col-md justify-content-end flex-align-center">
        <div class="col nav-item certification-duration-container">
          <svg version="1.1" viewBox="0 0 50 50">
          	 <path class="black-fill" d="M24.009,1.239C11.81,1.239,1.89,11.895,1.89,25s9.92,23.761,22.119,23.761S46.127,38.105,46.127,25 S36.208,1.239,24.009,1.239z M33.392,37.673c-0.268,0.864-0.804,1.296-1.609,1.44c-0.536,0.144-1.072-0.144-1.609-0.576 c-1.877-1.872-6.166-6.624-7.909-8.496c-0.402-0.432-0.536-0.864-0.536-1.44c0-4.032,0-14.977,0-19.153 c0-1.152,0.804-2.016,1.877-2.016c1.072,0,1.877,0.864,1.877,2.016c0,1.872,0,10.369,0,12.241c0,1.728,0,3.744,0,5.472 c0,0.288,0.134,0.576,0.268,0.72c1.475,1.584,5.496,5.904,6.971,7.632C33.392,36.089,33.527,36.809,33.392,37.673z"/>
          </svg>
          <span class="certification-duration">28hr 1min</span>
        </div>
      </div>
    </div>
  </div>

  <script>
    //hide menu helper function
    $(document).ready(function() {
      $('button.minimize-maximize').click(function() {
        $(this).toggleClass('show');
        if($('div.session-chapter-container').hasClass('maximize')) {
          $('div.session-chapter-container').removeClass('maximize').addClass('minimize');
        } else if($('div.session-chapter-container').hasClass('minimize')) {
          $('div.session-chapter-container').removeClass('minimize').addClass('maximize');
        } else {
          $('div.session-chapter-container').addClass('minimize');
        }
      });
      $('ul#menu-select li').click(function() {
        $('ul#session-chapter-menu-select').slideToggle();
      });
    });
  </script>

  <div class="container-fluid">
    <div class="row player-details">

      <div class="col-md-3 session-chapter-container">
        <ul id="session-chapter-menu" class="course-sessions-list">
          <li><p class="course-description">Ut fringilla orci tortor, eget consectetur urna dignissim interdum. Praesent sed mattis sapien, id iaculis turpis. Nulla blandit, orci vitae porttitor pretium, urna ipsum finibus diam, at sagittis enim elit a ante. Maecenas nec diam magna. Praesent eu dapibus sapien, nec sollicitudin felis. Praesent dignissim nec sapien eget pretium. Duis dictum, lectus in feugiat mollis, sem libero pharetra ex, vitae iaculis arcu sem ut metus.</p></li>
        </ul>
      </div>

      <div class="col-md flow-player-container">

        <div class="card course-card light-grey-bg padding-sm">
          <img src="assets/images/you-must-be-logged-in.svg" />
        </div>

        <div class="row course-details-content">
          <h6>If you have an account <a href="#login-window" data-toggle="modal">log in</a> or visit our <a href="pricing.php">pricing page</a> for membership options.</h6>
          <h6>To view our free courses sign up for a <a class="button small-button pd-blue-button" href="pricing.php">FREE BASIC ACCOUNT</a></h6>
        </div>

      </div>

    </div>
  </div>

  <?php include 'digital-online-certifications.php';?>
</section>

<?php include 'footer.php';?>
