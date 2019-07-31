<html itemscope="" class="no-js" lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OTIS for Educators - formerly Teq Opd</title>

  <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.typekit.net/pih4zrr.css">
  <link href="assets/css/bootstrap.min.css" type="text/css" rel="stylesheet" media="screen,projection" />

  <link href="assets/css/Otis_Teq_shared-classes.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="assets/css/Otis_Teq_index-animation.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="assets/css/Otis_Teq_course-cards_player.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="assets/css/Otis_Teq_user-dashboard.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="assets/css/Otis_Teq_erc.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="assets/css/Otis_Teq_course-calendar.css" type="text/css" rel="stylesheet" media="screen,projection" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>

<body>

<nav class="navbar navbar-expand-lg otis-navbar">
  <?php if($logged_in == True) { ?>
    <a class="otis-logo" href="index.php">
      <img src="assets/images/Otis-ERC-brand-logo.png" width="360" height="96" class="d-inline-block align-top" alt="">
    </a>
  <?php } else { ?>
    <a class="otis-logo" href="index.php">
      <img src="assets/images/Otis-main-brand-logo.png" width="360" height="96" class="d-inline-block align-top" alt="">
    </a>
  <?php } ?>
  <button class="navbar-toggler mobile-nav-button" type="button" data-toggle="collapse" data-target="#mobile-nav" aria-controls="mobile-nav" aria-expanded="false" aria-label="Toggle navigation" onclick="mobileNav(this)">
    <div class="bar1"></div>
    <div class="bar2"></div>
    <div class="bar3"></div>
  </button>

  <div class="collapse navbar-collapse" id="main-nav">
    <ul class="navbar-nav mr-auto"></ul>
    <ul class="nav justify-content-end flex-align-center">

      <?php if($logged_in == False) { ?>
        <li class="nav-item">
          <a class="nav-link thin-heading" href="#">ABOUT US</a>
        </li>
      <?php } ?>

      <li class="nav-item">
        <a class="nav-link thin-heading" href="#">UPCOMING COURSES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link thin-heading" href="course-library-categories.php">COURSE LIBRARY</a>
      </li>
      <li class="nav-item">
        <a class="nav-link thin-heading" href="#">LESSONS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link thin-heading" href="#">SKILLS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link thin-heading" href="#">BLOG</a>
      </li>
      <li class="nav-item">
        <a class="nav-link thin-heading" href="#">HELP</a>
      </li>

      <?php if($logged_in == False) { ?>
        <li class="nav-item">
          <a class="nav-link thin-heading" href="#">PRICING</a>
        </li>
        <li class="nav-item">
          <a class="button small-button pd-blue-button no-margin" href="#login-window" data-toggle="modal">LOGIN</a>
        </li>
      <?php } elseif($logged_in == True) { ?>
        <li class="nav-item">
          <div class="dropdown user-dropdown flex-align-center">
            <button type="button" class="user-icon" href="#" data-toggle="dropdown" style="background-image: url('https://cdn.pixabay.com/photo/2016/04/15/18/05/computer-1331579_960_720.png');"></button>
            <button type="button" class="nav-link thin-heading user-dropdown-menu" data-toggle="dropdown">User fName User lName</button>
            <div class="dropdown-menu">
              <a class="dropdown-item thin-heading" href="#">My Dashboard</a>
              <a class="dropdown-item thin-heading" href="#">Progress Tracker</a>
              <a class="dropdown-item thin-heading" href="#">Reports</a>
              <a class="dropdown-item thin-heading" href="#">Account Info</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item thin-heading" href="#">Log Out</a>
              <a class="dropdown-item thin-heading" href="#">Upgrade Your Account?</a>
            </div>
          </div>
        </li>
      <?php } ?>

    </ul>
  </div>

</nav>

<nav class="collapse" id="mobile-nav">

  <div class="mobile-menu">
    <?php if($logged_in == False) { ?>
      <a class="nav-link thin-heading" href="#">ABOUT US</a>
    <?php } ?>
    <a class="nav-link thin-heading" href="#">UPCOMING COURSES</a>
    <a class="nav-link thin-heading" href="course-library-categories.php">COURSE LIBRARY</a>
    <a class="nav-link thin-heading" href="#">LESSONS</a>
    <a class="nav-link thin-heading" href="#">SKILLS</a>
    <a class="nav-link thin-heading" href="course-library.php">BLOG</a>
    <a class="nav-link thin-heading" href="#">HELP</a>
    <?php if($logged_in == False) { ?>
      <a class="nav-link thin-heading" href="#">PRICING</a>
    <?php } ?>
  </div>

  <div class="mobile-menu">
  <?php if($logged_in == False) { ?>
    <a class="nav-link thin-heading">LOGIN</a>
  <?php } elseif($logged_in == True) { ?>
      <a class="nav-link thin-heading user-dropdown-link" data-toggle="collapse" href="#mobile-user-menu" role="button" aria-expanded="false" aria-controls="mobile-user-menu">User fName User lName</a>
      <div class="collapse" id="mobile-user-menu">
        <a class="nav-link thin-heading" href="#">My Dashboard</a>
        <a class="nav-link thin-heading" href="#">Progress Tracker</a>
        <a class="nav-link thin-heading" href="#">Reports</a>
        <a class="nav-link thin-heading" href="#">Account Info</a>
        <div class="dropdown-divider"></div>
        <a class="nav-link thin-heading" href="#">Log Out</a>
        <a class="nav-link thin-heading" href="#">Upgrade Your Account?</a>
      </div>
  <?php } ?>
  </div>
  <?php include 'askotis.php';?>

</nav>
