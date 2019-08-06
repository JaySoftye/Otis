<?php include 'header.php'; ?>
  <?php include 'askotis.php';?>
    <?php include 'login-window.php';?>

  <section class="main-content thin-search-bar">

    <div class="container-fluid">
      <div class="row align-items-center padding-top padding-bottom">
        <div class="col text-center">
          <h1 class="sub-heading"><strong>LATEST BLOG POSTS</strong></h1>
        </div>
      </div>
    </div>

    <div class="container-fluid teq-talk course-categories-container">

      <script type="text/javascript">
        $(document).ready( function() {
          window.addEventListener('scroll', function(e) {

            function isOnScreen(elem) {
              if( elem.length == 0 ) {
                return;
              }
              var $window = $(window)
              var viewport_top = $window.scrollTop()
              var viewport_height = $window.height()
              var viewport_bottom = viewport_top + viewport_height
              var $elem = $(elem)
              var top = $elem.offset().top
              var height = $elem.height()
              var bottom = top + height

              return (top >= viewport_top && top < viewport_bottom) ||
                (bottom > viewport_top && bottom <= viewport_bottom) ||
                (height > viewport_height && top <= viewport_top && bottom >= viewport_bottom)
              }

            $('.fade-in-container').each( function(i) {
              if( isOnScreen($(this)) ) {
                $(this).children(".fade-element.fade-down").addClass("animate");
                $(this).children(".fade-element.fade-up").addClass("animate");
              }
            });

          });
        });
      </script>

      <div class="row padding-bottom">
      <?php
      //Feed URLs
      $feeds = array(
        "https://www.teq.com/category/news/feed",
      );

      //Read each feed's items
      $entries = array();

      foreach($feeds as $feed) {
        $xml = simplexml_load_file($feed);
        $entries = array_merge($entries, $xml -> xpath("//item"));
      }

      //Sort feed entries by pubDate
      usort($entries, function ($feed1, $feed2) {
        return strtotime($feed2 -> pubDate) - strtotime($feed1 -> pubDate);
      });

      //Print all the entries
      foreach($entries as $entry) {
      ?>

      <article class="col-md-4 course-card-container">
        <div class="card course-card course-category fade-in-container">
          <a class="card-link" href="<?= $entry->link ?>"><img src="<?= $entry -> image ?>" /></a>
          <div class="card-body blog-body fade-element fade-down half-time">
            <h4><a href="<?= $entry -> link ?>"><?= $entry -> title ?></a></h4>
            <?= $entry -> description ?>
            <a class="button medium-button pd-blue-button block text-center" href="<?= $entry -> link ?>">READ MORE</a>
          </div>
          <div class="card-footer">
            <small><?= strftime('%B %d, %Y', strtotime($entry -> pubDate)) ?></small>
          </div>
        </div>
      </article>

      <?php } ?>
      </div>

      <div class="row padding-top padding-bottom">
        <div class="col text-center">
          <h5 class="text-center"><a class="button light-grey-button dropshadow margin-bottom" href="https://www.teq.com/learning-community/page/2/">READ MORE POSTS</a></h5>
        </div>
      </div>

      <svg version="1.1" viewBox="0 0 600 103">
      	 <path class="yellow-fill" d="M600,103.5V31.453c-69.209,10.354-117.449,10.97-167.539-0.395c-19.904-4.516-56.294-13.321-94.03-12.518 c-16.291,0.347-28.846,2.982-45.128,3.552c-33.654,1.177-61.406-5.531-90.319-6.3c-36.548-0.971-61.23,6.535-97.388,10.992 C71.228,31.02,17.97,31.453,0,31.453L0,103.5H600z"/>
      </svg>

    </div>

    <?php include 'digital-online-certifications.php';?>

  </section>

<?php include 'footer.php';?>
