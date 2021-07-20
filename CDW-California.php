<?php include 'header.php';?>
<script>

  // HIDE MAIN NAVBAR, NOT NEEDED IN TEMPLATE FILE
  var nav = document.getElementsByClassName("otis-navbar");
    nav[0].style.display = "none";
</script>

<style>
  @import url("https://use.typekit.net/zlr4rmt.css");
  .row.course-selections .course-card-container .card.course-card {opacity: .65 !important;}
  .row.course-selections .course-card-container .card.course-card:hover {transform: translateY(-5px) !important;box-shadow: 0 15px 25px 0 rgba(0,0,0,.15);opacity: 1 !important;transition: all .5s ease;cursor:pointer;}
  .row.course-selections .course-card-container .card.course-card:hover .card-header {background:rgba(253,83,146,1) !important;}
  .row.course-selections .course-card-container .card.course-card:hover .card-body h4 {color:rgba(253,83,146,1);}
</style>

<section class="main-content" style="position: relative;">
  <svg class="hidden-sm" version="1.1" viewBox="0 0 450 1080" preserveAspectRatio="xMaxYMin meet" style="min-height: 100%;height: 100%;position: absolute;right: 0;">
    <defs>
      <linearGradient id="blueGradient" x1="0%" y1="0%" x2="0%" y2="100%">
        <stop offset="0%" style="stop-color:rgb(79,172,254);stop-opacity:.9" />
        <stop offset="100%" style="stop-color:rgb(0,242,254);stop-opacity:.9" />
      </linearGradient>
    </defs>
    <path fill="url(#blueGradient)" d="M143,1080.805c0,0-143-253.9-143-539.6c0-255.6,143-545.8,143-545.8l361,0.8l0,0v1085.4L143,1080.805z"/>
  </svg>
  <div style="background: rgb(248,111,100); background: linear-gradient(0deg, rgba(248,111,100,1) 0%, rgba(253,83,146,1) 100%);min-height: 48px;max-width: 100vw;display: flex;align-items: flex-end;flex-direction: column;">
    <nav class="navbar navbar-expand-lg container-fluid" style="width: 100%;">
      <ul class="navbar-nav" style="width: 100%;justify-content: space-between; align-items: center;">
        <li class="nav-item">
          <a class="nav-link" href="https://otis.teq.com/">
            <img src="https://otis.teq.com/assets/images/OTIS-for-educators.svg" style="height: 100px;" />
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://otis.teq.com/" style="color: rgb(0,0,0); font-family: 'museo-slab','Roboto',Helvetica,Arial,san-serif !important;"><strong class="h5">Professional Development</strong></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://otis.teq.com/">
            <button type="button" class="btn btn-light" style="font-family: 'museo-slab','Roboto',Helvetica,Arial,san-serif !important;">Join OTIS Today!</button>
          </a>
        </li>
      </ul>
    </nav>
    <svg style="margin-top: -75px;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1280 150">
      <path fill="#FFFFFF" d="M-3,154.5h1286.536v-127c0,0-300.886,84.667-639.63,84.667C340.974,112.167-3,27.5-3,27.5V154.5z"></path>
    </svg>
  </div>
  <div class="container-fluid" id="flowplayer-container">
    <div class="row padding-top" style="align-items: center;padding-bottom: 9rem;">
      <div class="col-md">

        <div id="player" data-player-id="dd988075-74c3-4c0b-8765-73eb8a02e9cb" style="box-shadow: 15px 15px 25px 0 rgba(0,0,0,.25);">
          <script src="//cdn.flowplayer.com/players/502f72ae-3c46-4e4d-bd80-631077be8b16/native/flowplayer.async.js">
            {
              "src": "45f50bc0-094d-4633-8ccb-5f9e37f03c4f",
              "token": "eyJraWQiOiJaOXNCa0JoemtydDkiLCJ0eXAiOiJKV1QiLCJhbGciOiJFUzI1NiJ9.eyJjIjoie1wiYWNsXCI6NixcImlkXCI6XCJaOXNCa0JoemtydDlcIn0iLCJpc3MiOiJGbG93cGxheWVyIn0.TwGsiB7aDekX5R9-Q2zXPVMlV20jHBxPeEWv5-qrAW_QO3a6CVf7l3B39dtiSpU0d-xeqCyucoBXI2J37OTvUQ"
            }
          </script>
        </div>

        <script>
        // LOAD SELECTED DATASET BASED ON 'data-video' ATTRIBUTE
          flowplayer.cloud.then(function () {
            var api = flowplayer("#player")
            var thumbs = document.querySelectorAll('[data-video]')

            ;[].forEach.call(thumbs, function(thumb, i) {
              thumb.onclick = function() {
                var title = thumb.getAttribute("data-title");
                var description = thumb.getAttribute("data-description");
                var duration = thumb.getAttribute("data-duration");

                  api.setSrc(thumb.dataset.video)
                  document.getElementById("flowplayer_player_data-title").innerHTML = title;
                  document.getElementById("flowplayer_player_data-description").innerHTML = description;
                  document.getElementById("flowplayer_player_data-duration").innerHTML = duration;
                  document.getElementById("flowplayer-container").scrollIntoView({behavior: "smooth"});

                console.log(title +' (' + thumb.dataset.video + ') ' + 'loaded')
              }
            })
          })
        </script>

      </div>
      <div class="col-md-3 hide-medium" style="padding-left: calc(90px + .75vw);">
        <h5 style="font-family: 'museo-slab','Roboto',Helvetica,Arial,san-serif !important;">Join over 600,000 of your peers worldwide who are utilizing OTIS for educators for professional development on technology, tools, and strategies that spark student success.</h5>
        <h5 style="font-family: 'museo-slab','Roboto',Helvetica,Arial,san-serif !important;">Explore our teacher-created activities and exercises that get students practicing skills, building knowledge, and engaging in hands-on learning.</h5>
        <h5 style="font-family: 'museo-slab','Roboto',Helvetica,Arial,san-serif !important;"><strong>Sign up for OTIS today for more professional learning opportunities and sample activities for your students!</strong></h5>
        <a class="nav-link" href="https://otis.teq.com/" style="position: relative;margin-left: 3rem;">
          <img src="https://www.teq.com/wp-content/themes/teq_v4-0/inc/images/OTIS-pd-character_logo.svg" style="max-height: 60px;height: 100%;width: auto;position: absolute;top: -.25rem;left: -2.5rem;" />
          <button type="button" class="btn btn-light h5" style="font-family: 'museo-slab','Roboto',Helvetica,Arial,san-serif !important;">Sign up for OTIS</button>
        </a>
      </div>
      <div class="col-md-9" style="margin-top: 36px;">
        <h2 id="flowplayer_player_data-title" class="thin-heading h2 strong">Sphero Mini Time Trials</h2>
        <p id="flowplayer_player_data-duration" class="small">01min</p>
        <p id="flowplayer_player_data-description">In the spirit of friendly competition students will run time trials with their Sphero Mini. This activity will give students to opportunity to pratice measureing angels and stright lines as well as code troubshooting.</p>
      </div>
    </div>
  </div>
</section>
<section class="main-content" style="position: relative;">
  <div class="container-fluid light-grey-bg">
    <div class="row course-selections">
      <h2 class="col-md-12 h2 padding-top" style="font-family: 'museo-slab','Roboto',Helvetica,Arial,san-serif !important;"><strong>More courses you may be interested in:</strong></h2>

      <!-- LOOP THE BELOW ELEMENT '<div class="col-md-3 course-card-container">', COURSES TAGGED 'CDW-CALIFORNIA' - ATTRIBUTES TARGETED: DATA-VIDEO (flowplayer id), DATA-TITLE (course-title), DATA-DESCRIPTION (course-description) -->
      <div class="col-md-3 course-card-container">
        <div class="card course-card">
          <div class="card-header product-familiarization">
            <ul class="nav course-details">
              <li class="nav-item category-duration-details">01min</li>
              <li class="nav-item"></li>
            </ul>
          </div>
          <div class="card-body" style="transform: rotate(0);">
            <h4 class="thin-heading">Sphero Mini Time Trial</h4>
            <p class="card-text">In the spirit of friendly competition students will run time trials with their Sphero Mini. This activity will give students to opportunity to pratice measureing angels and stright lines as well as...</p>
            <a class="stretched-link" data-video="45f50bc0-094d-4633-8ccb-5f9e37f03c4f" data-title="Sphero Mini Time Trials" data-description="In the spirit of friendly competition students will run time trials with their Sphero Mini.  This activity will give students to opportunity to pratice measureing angels and stright lines as well as code troubshooting." data-duration="01min"></a>
          </div>
        </div>
      </div>
      <div class="col-md-3 course-card-container">
        <div class="card course-card">
          <div class="card-header product-familiarization">
            <ul class="nav course-details">
              <li class="nav-item category-duration-details">10min</li>
              <li class="nav-item"></li>
            </ul>
          </div>
          <div class="card-body" style="transform: rotate(0);">
            <h4 class="thin-heading">Makey Makey - Simple Circuits</h4>
            <p class="mb-2"><small></small></p>
            <p class="card-text">Using your Makey Makey board, you will complete some simple circuits by using conductive material, alligator clips and your fingers!</p>
            <a class="stretched-link" data-video="b260ef6d-cd9a-4bba-a4f7-e90b5d3f6433" data-title="Makey Makey - Simple Circuits" data-description="Using your Makey Makey board, you will complete some simple circuits by using conductive material, alligator clips and your fingers!" data-duration="10min"></a>
          </div>
        </div>
      </div>
      <div class="col-md-3 course-card-container">
        <div class="card course-card">
          <div class="card-header product-familiarization">
            <ul class="nav course-details">
              <li class="nav-item category-duration-details">06min</li>
              <li class="nav-item"></li>
            </ul>
          </div>
          <div class="card-body" style="transform: rotate(0);">
            <h4 class="thin-heading">Probability with Ozobots</h4>
            <p class="mb-2"><small></small></p>
            <p class="card-text">Students will learn about probability using Ozobots and their device free Color Coding.</p>
            <a class="stretched-link" data-video="6fc3d355-7742-4218-a508-3056d11fb748" data-title="Probability with Ozobots" data-description="Students will learn about probability using Ozobots and their device free Color Coding." data-duration="06min"></a>
          </div>
        </div>
      </div>
      <div class="col-md-3 course-card-container">
        <div class="card course-card">
          <div class="card-header product-familiarization">
            <ul class="nav course-details">
              <li class="nav-item category-duration-details">02min</li>
              <li class="nav-item"></li>
            </ul>
          </div>
          <div class="card-body" style="transform: rotate(0);">
            <h4 class="thin-heading">Digital All About Me Books</h4>
            <p class="mb-2"><small></small></p>
            <p class="card-text">This is a digital twist on a traditional back to school activity.  During this lesson students will have the opportunity to explore and express their likes, dislikes, preferences and tell their classmates and teachers their story by writing and illustrating their own book. </p>
            <a class="stretched-link" data-video="830778d9-0687-4d9a-9b42-8e59f2c24e5c" data-title="Digital All About Me Books" data-description="This is a digital twist on a traditional back to school activity.  During this lesson students will have the opportunity to explore and express their likes, dislikes, preferences and tell their classmates and teachers their story by writing and illustrating their own book.  This purposely simple template with sentence prompts allows students to create from scratch without distractions.  This lesson will also open door the to have discussions about individuality, families, friends and all things involving the whole student.  This lesson can be done all at once, or over the course of the school year." data-duration="02min"></a>
          </div>
        </div>
      </div>
      <div class="col-md-3 course-card-container">
        <div class="card course-card">
          <div class="card-header product-familiarization">
            <ul class="nav course-details">
              <li class="nav-item category-duration-details">04min</li>
              <li class="nav-item"></li>
            </ul>
          </div>
          <div class="card-body" style="transform: rotate(0);">
            <h4 class="thin-heading">Binary Bead Bracelet Teq-tivity</h4>
            <p class="mb-2"><small></small></p>
            <p class="card-text">In this activity, students will learn about Binary code and converting letters to binary. Students will use the knowledge to create a bracelet with 2 colored beads to represent their initials in Binary.</p>
            <a class="stretched-link" data-video="f3cfa1f4-bd3c-4407-a0d3-641f327cfb9f" data-title="Binary Bead Bracelet Teq-tivity" data-description="In this activity, students will learn about Binary code and converting letters to binary. Students will use the knowledge to create a bracelet with 2 colored beads to represent their initials in Binary." data-duration="04min"></a>
          </div>
        </div>
      </div>
      <div class="col-md-3 course-card-container">
        <div class="card course-card">
          <div class="card-header product-familiarization">
            <ul class="nav course-details">
              <li class="nav-item category-duration-details">04min</li>
              <li class="nav-item"></li>
            </ul>
          </div>
          <div class="card-body" style="transform: rotate(0);">
            <h4 class="thin-heading">Presidential Baseball Cards</h4>
            <p class="card-text">Watch this to learn how to create an activity for students in which they analyze the lives of various key figures during an important moment in history. </p>
            <a class="stretched-link" data-video="4c07f77d-b1dd-42d2-8477-0a2656add88d" data-title="Presidential Baseball Cards" data-description="Watch this to learn how to create an activity for students in which they analyze the lives of various key figures during an important moment in history." data-duration="04min"></a>
          </div>
        </div>
      </div>
      <div class="col-md-3 course-card-container">
        <div class="card course-card">
          <div class="card-header product-familiarization">
            <ul class="nav course-details">
              <li class="nav-item category-duration-details">14min</li>
              <li class="nav-item"></li>
            </ul>
          </div>
          <div class="card-body" style="transform: rotate(0);">
            <h4 class="thin-heading">Atom Builder Lesson</h4>
            <p class="card-text">To review the atomic structure of atoms and how this affects their ability to combine in chemical reactions, this lesson allows students to draw their structure using cloned objects and consult...</p>
            <a class="stretched-link" data-video="e38d135b-4c59-4db5-ad98-5283799fe338" data-title="Atom Builder Lesson" data-description="To review the atomic structure of atoms and how this affects their ability to combine in chemical reactions, this lesson allows students to draw their structure using cloned objects and consult several Periodic Table resources." data-duration="14min"></a>
          </div>
        </div>
      </div>
      <div class="col-md-3 course-card-container">
        <div class="card course-card">
          <div class="card-header product-familiarization">
            <ul class="nav course-details">
              <li class="nav-item category-duration-details">11min</li>
              <li class="nav-item"></li>
            </ul>
          </div>
          <div class="card-body" style="transform: rotate(0);">
            <h4 class="thin-heading">Blackout Poetry</h4>
            <p class="card-text">Students will start with a text sample, including but not limited to prose, quotations, paragraph samples provided by the teacher and create blackout poetry. </p>
            <a class="stretched-link" data-video="eb474aa9-45a2-4ccf-b4df-afde66de46a9" data-title="Blackout Poetry" data-description="Students will start with a text sample, including but not limited to prose, quotations, paragraph samples provided by the teacher and create blackout poetry." data-duration="11min"></a>
          </div>
        </div>
      </div>
      <div class="col-md-3 course-card-container">
        <div class="card course-card">
          <div class="card-header product-familiarization">
            <ul class="nav course-details">
              <li class="nav-item category-duration-details">06min</li>
              <li class="nav-item"></li>
            </ul>
          </div>
          <div class="card-body" style="transform: rotate(0);">
            <h4 class="thin-heading">Analyzing Persuasive and Argumentative Writing using Google Classroom</h4>
            <p class="card-text">Students will start with a text sample, including but not limited to prose, quotations, paragraph samples provided by the teacher and create blackout poetry. </p>
            <a class="stretched-link" data-video="baccf962-173c-402b-9e7b-5b9d23f85bcf" data-title="Analyzing Persuasive and Argumentative Writing using Google Classroom" data-description="Students will be able to recognize and identify an author’s use of persuasive and argumentative writing techniques and use those skills to revise and edit an essay." data-duration="06min"></a>
          </div>
        </div>
      </div>

    </div>
  </div>

  <footer style="background: #ffffff;padding: 24px 0;">
    <div class="container-fluid footer-content">
      <div class="row">
        <div class="col-md-6 padding-sm">
          <p class="sub-heading h4 bold">OTIS is Online Technology and Instructional Sessions</p>
          <p class="h5 dark-blue-text">Questions? Request a feature. Report a bug.</p>
          <br>
          <p class="h5 dark-blue-text">
            <a class="bold" href="mailto:otis@teq.com"><u>info@askotis.com</u></a>
            <br>877.455.9369
          </p>
        </div>
        <div class="col-md-3 padding-sm">
          <h6 class="dark-blue-text bold">Teq, Inc.</h6>
          <h6 class="dark-blue-text">7 Norden Lane</h6>
          <h6 class="dark-blue-text">Huntington Station, NY 11746</h6>
          <br>
          <h6 class="dark-blue-text bold">Follow Us:</h6>
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-icon" href="https://www.facebook.com/myTeq/"><img src="https://otis.teq.com/assets/images/facebook-icon.svg" alt="facebook"></a>
            </li>
            <li class="nav-item">
              <a class="nav-icon" href="https://twitter.com/OTIS4educators"><img src="https://otis.teq.com/assets/images/twitter-icon.svg" alt="twitter"></a>
            </li>
            <li class="nav-item">
              <a class="nav-icon" href="https://www.linkedin.com/company/teq/"><img src="https://otis.teq.com/assets/images/linkin-icon.svg" alt="linked in"></a>
            </li>
            <li class="nav-item">
              <a class="nav-icon" href="https://www.instagram.com/edteq/"><img src="https://otis.teq.com/assets/images/instagram-icon.svg" alt="instagram"></a>
            </li>
          </ul>
        </div>
        <div class="col-md-3 padding-sm">
          <p class="dark-blue-text">Copyright © Teq, Inc.<br /><a class="dark-blue-text bold" href="https://otis.teq.com/about/privacy-policy"><u>Privacy Policy</u></a>, <a class="dark-blue-text bold" href="https://otis.teq.com/about/terms"><u>Terms</u></a>
          </p>
        </div>
      </div>
    </div>
  </footer>

</body>
</html>
