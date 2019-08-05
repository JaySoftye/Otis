<?php include 'header.php'; ?>
  <?php include 'askotis.php';?>
    <?php include 'login-window.php';?>

  <section class="main-content thin-search-bar">
    <div class="container-fluid teq-talk">

        <div class="row padding-top padding-bottom">
          <div class="col-lg-3 col-sm-1"></div>
          <div class="col-lg-6 col-sm-10 text-center">
            <h1 class="padding-top padding-bottom"><img src="assets/opd-blog-logo-text.svg" alt="Teq Talk" /></h1>
          </div>
          <div class="col-lg-3 col-sm-1"></div>
        </div>

        <div class="row padding-top padding-bottom hide-small">
          <div class="col text-center">
            <h2 class="padding-top padding-bottom"><strong>Recent News and Updates</strong></h2>
          </div>
        </div>

        <div class="row padding-bottom posts-container">

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

        <div class="col-lg-4 col-sm-12 card-container">
          <article class="post-card">
            <a class="card-link" href="<?= $entry->link ?>"><img src="<?= $entry -> image ?>" /></a>
            <div class="card-contents ">
              <h4><a href="<?= $entry -> link ?>"><?= $entry -> title ?></a></h4>
              <?= $entry -> description ?>
              <p class="article-link"><a href="<?= $entry -> link ?>">Read full article</a></p>
              <div class="article-footer">
                <small><?= strftime('%B %d, %Y', strtotime($entry -> pubDate)) ?></small>
              </div>
            </div>
          </article>
        </div>

        <?php
          }
        ?>
        </div>

        <div class="row padding-top padding-bottom">
          <div class="col text-center">
            <h5 class="text-center"><a class="button yellow-button dropshadow margin-bottom" href="https://www.teq.com/learning-community/page/2/">Read more posts</a></h5>
          </div>
        </div>


    </div>

    <?php include 'digital-online-certifications.php';?>

  </section>

<?php include 'footer.php';?>
