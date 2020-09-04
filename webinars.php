<?php include 'header.php';?>
  <?php include 'askotis.php';?>

<section class="main-content thin-search-bar course-details">


  <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js"></script>
  <script type="text/javascript">
    $( document ).ready(function() {
      $("#jumpToBooking").click(function() {
        $('html, body').animate({
          scrollTop: $("#calendlyBooking").offset().top
        }, 500);
      });
    });
  </script>

  <div class="container-fluid d-sm-none d-xs-none d-md-flex" style="background-image:url(./assets/images/Virtual_stem-demo-header_background.jpg);background-size:cover;background-position:center center;">
    <div class="row align-items-center" style="min-height:500px;">
      <div class="col-md-7 col-lg-8"></div>
      <div class="col-md-4">
        <h1 class="white-text"style="font-weight:200;">Request a Virtual STEM Demo hosted by our very own <strong>Teq Squad</strong></h1>
        <button type="button" id="jumpToBooking" style="margin-top:27px;background: rgb(255,82,36);background: linear-gradient(90deg, rgb(253,83,146) 0%, rgb(248,111,100) 100%);border-radius:28px;border:none;display:inline-block;cursor:pointer;color:#ffffff;font-size:18px;font-weight:700;padding:16px 31px;text-decoration:none;box-shadow: 0px 12px 12px 0px rgba(100,100,100,0.5);">Schedule a Live Webinar</button>
      </div>
    </div>
  </div>
  <div class="container-fluid" style="padding:30px;">
    <div class="row align-items-center">
      <div class="col-md-4">
        <h2>Live Webinar’s are offered <strong>Tuesday</strong> or <strong>Thursday</strong> for up to 1 hour of instruction.</h2>
      </div>
      <div class="col-md-2 d-sm-none d-xs-none d-md-flex">
        <img src="./assets/images/Virtual_stem-demo-wonder-workshop.png" style="width:100%;height:auto;margin-top:-5vh;"/>
      </div>
      <div class="col-md-5">
        <h5><strong>Request a live webinar where former classroom teachers and our current edtech experts will highlight the features and functionality of the product of your choice.</strong></h5>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row d-flex justify-content-center">
      <div id="calendlyBooking" class="col-md-12" style="min-height: 750px;">
        <script type="text/javascript">
          Calendly.initInlineWidget({
            url: 'https://calendly.com/otislivedemo/60min',
            parentElement: document.getElementById('calendlyBooking'),
            prefill: {},
            utm: {}
          });
        </script>
      </div>
    </div>
  </div>

  <div class="container-fluid" style="margin-bottom:100px;margin-top:100px;">
    <div class="row d-flex justify-content-center" style="min-height:360px;display:flex;justify-content: space-evenly;align-items: center;padding:20px;background: rgb(255,82,36);background: linear-gradient(90deg, rgb(253,83,146) 0%, rgb(248,111,100) 100%);">
      <div class="text-center col-sm-12 webinar-archive-container padding-top" style="margin-bottom: 21px;">
        <h2 class="text-centered">Other Upcoming public <a style="font-weight:700;color:#000000 !important;text-decoration:underline;" href="https://www.teq.com/teq-events/">webinars/events</a>.</h2>
      </div>

      <?php
function getPosts($feed_url) {

    $content = file_get_contents($feed_url); // get XML string
    $x = new SimpleXmlElement($content); // load XML string into object

    echo '<div class="posts-container padding-bottom row d-flex justify-content-center"">';
    $i=1; // start count at 1

    // loop through posts
    foreach($x->channel->item as $entry) {

        // format blog post output
        echo '<div class="col-md-3"><div class="card" style="box-shadow: 0px 12px 12px 0px rgba(100,100,100,0.5);"><div class="card-body">';
        echo '<h4><strong>' . $entry->title . '</strong></h4><br /><p><a class="card-title" href="'.$entry->link.'" title="'.$entry->title.'" target="_blank"><strong>Learn more &#8594; </strong></p>'; // output link & title
        echo '</div></div></div>';

        $i++; // increment counter

        if($i >= 4) // if counter more than 3 - quit
        break;
    }
    echo "</div>";
} ?>
<?php getPosts("https://www.teq.com/category/teq-event/feed/"); ?>
    </div>

  </div>

  <div class="container-fluid" style="margin-bottom:100px;margin-top:100px;">
    <div class="row d-flex justify-content-center" style="display:flex;justify-content: space-evenly;align-items: center;padding:20px;border-radius: 4px;background: linear-gradient(145deg, #f9feff, #d2d5d8);box-shadow: 6px 6px 12px #b6b9bb, -6px -6px 12px #ffffff;">
      <div class="text-center col-sm-12 webinar-archive-container">
        <img src="./assets/images/youtube-logo.png">
        <span>Check out our <a style="text-decoration: underline; font-weight: 400; padding: 0 12px;" href="https://www.youtube.com/playlist?list=PL8Pfk9aLlBdM9d2UxR9FqyjiggS-XbktD">Teq Squad webinar archives</a> for demos on 3D Printers, SMART Boards, and other STEM products!</span>
        <span><a class="button pd-blue-button webinar-channel-button" style="font-size:18px;margin:0 12px;" href="https://www.youtube.com/playlist?list=PL8Pfk9aLlBdM9d2UxR9FqyjiggS-XbktD">Go to Teq Squad Channel</a></span>
      </div>
    </div>
  </div>

  <style>
    .posts-container {
      height: 100%;
      width: 100%;
      position: relative;
    }
    .posts-container:empty::after {
      content: 'Sorry, no current events scheduled';
      width: 100%;
      height: 100%;
      position: absolute;
      top: 0;
      text-align: center;
      font-size: 24px;
      font-weight: 500;
    }
  </style>

  <?php include 'digital-online-certifications.php';?>
</section>

<?php include 'footer.php';?>
