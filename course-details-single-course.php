<?php
  $logged_in = True;
  $default_background_image_url='assets/images/default-course-background_lg.jpg';
?>

<?php include 'header.php';?>
  <?php include 'askotis.php';?>

<section class="main-content thin-search-bar course-details">

  <?php include 'search-field.php';?>

  <div class="container-fluid">
    <div class="row title-nav">
      <div class="col-md-3">
        <h1 class="course-details-title">Using Google Forms for Mobile Assessment</h1>
      </div>
      <div class="col-md justify-content-end flex-align-center">
        <div class="col nav-item certification-duration-container">
          <svg version="1.1" viewBox="0 0 50 50">
          	 <path class="black-fill" d="M24.009,1.239C11.81,1.239,1.89,11.895,1.89,25s9.92,23.761,22.119,23.761S46.127,38.105,46.127,25 S36.208,1.239,24.009,1.239z M33.392,37.673c-0.268,0.864-0.804,1.296-1.609,1.44c-0.536,0.144-1.072-0.144-1.609-0.576 c-1.877-1.872-6.166-6.624-7.909-8.496c-0.402-0.432-0.536-0.864-0.536-1.44c0-4.032,0-14.977,0-19.153 c0-1.152,0.804-2.016,1.877-2.016c1.072,0,1.877,0.864,1.877,2.016c0,1.872,0,10.369,0,12.241c0,1.728,0,3.744,0,5.472 c0,0.288,0.134,0.576,0.268,0.72c1.475,1.584,5.496,5.904,6.971,7.632C33.392,36.089,33.527,36.809,33.392,37.673z"/>
          </svg>
          <span class="certification-duration">9hr 43min</span>
        </div>
        <div class="nav-item favorite-icon-container">

          <script>
            //FAVORITE CLICK FUNCTION
            $(document).ready(function() {
              $('path#favorite-icon').click(function() {
                $(this).toggleClass('selected');
              });
            });
          </script>

          <svg version="1.1" viewBox="0 0 50 50" id="favorite-icon">
          	<path id="favorite-icon" d="M24.987,44.81c-3.196,0-22.86-13.321-22.86-26.303c0-7.357,5.964-13.321,13.321-13.321 c3.743,0,7.119,1.548,9.539,4.034c2.42-2.485,5.797-4.034,9.539-4.034c7.357,0,13.321,5.964,13.321,13.321 C47.847,31.489,28.183,44.81,24.987,44.81z"/>
          </svg>
        </div>
        <div class="nav-item admin-menu-container">
          <button class="admin-menu" type="button"></button>
        </div>
        <div class="nav-item group-view-container">
          <?php include 'group-viewing.php';?>
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
        <button type="button" class="minimize-maximize"></button>
        <div id="session-chapter-mobile-menu">
          <ul id="menu-select" class="course-sessions-list">
            <li class="list-title">Chapters</li>
          </ul>
          <ul id="session-chapter-menu-select" class="course-sessions-list">
            <li>
              <ol class="course-chapters-list">
                <li><a class="complete" href="#">Recap of Session 10 - Forms</a></li>
                <li><a class="active" href="#">Classroom Help Center</a></li>
                <li><a href="#">Stream</a></li>
                <li><a href="#">Classwork</a></li>
                <li><a href="#">People</a></li>
                <li><a href="#">Grades</a></li>
                <li><a href="#">Assignment 1</a></li>
              </ol>
            </li>
          </ul>
        </div>
        <ul id="session-chapter-menu" class="course-sessions-list">
          <li class="list-title">Chapters</li>
          <li>
            <ol class="course-chapters-list">
              <li><a class="complete" href="#">Recap of Session 10 - Forms</a></li>
              <li><a class="active" href="#">Classroom Help Center</a></li>
              <li><a href="#">Stream</a></li>
              <li><a href="#">Classwork</a></li>
              <li><a href="#">People</a></li>
              <li><a href="#">Grades</a></li>
              <li><a href="#">Assignment 1</a></li>
            </ol>
          </li>
          <li><p class="course-description">The second installment in our Chromebooks Concentration Series walks you through the steps to plan and set-up Chromebooks in your classroom, while discussing behavior management techniques at every step. Then, we arm you with a plethora of apps and extensions that may be beneficial to your classroom such as Turn Off the Lights, Google Keep, and Google Cast. This is a session you won’t want to miss. See you there!</p></li>
        </ul>
      </div>

      <div class="col-md flow-player-container">
        <img class="width-full" src="assets/images/preview-screen.jpg" />

        <div class="row course-details-content">
          <div class="col-md badge-container hide-medium">
            <img src="assets/images/ISTE_seal_of_alignment.svg" />
            <img class="inline-block" src="https://onlinepd.teq.com/uploads/badge/Google-Throwdown.png" />
          </div>
          <div class="col-md no-padding">
            <?php include 'course-quiz.php';?>
          </div>
        </div>

      </div>

    </div>
  </div>

  <section class="container-fluid">
    <div class="row course-details-extra-content">
      <div class="col">
        <ul class="nav" role="tablist">
          <li>
            <a class="thin-heading" href="#course-discussion-tab" role="tab" data-toggle="tab" aria-controls="courese-discussion-tab" aria-expanded="true">DISCUSSION</a>
          </li>
          <li>
            <a class="thin-heading" href="#course-files-tab" role="tab" data-toggle="tab" aria-controls="course-files-tab" aria-expanded="false">FILE & LINKS</a>
          </li>
          <li>
            <a class="thin-heading active" href="#course-assignments-tab" role="tab" data-toggle="tab" aria-controls="course-assignments-tab" aria-expanded="false">ASSIGNMENTS</a>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <section class="container-fluid light-grey-bg">
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane fade" id="course-discussion-tab">
        <div class="row course-details-extra-content">
          <div class="col-md-8">
            <div class="post-form new-thread">
              <h6 class="thin-heading"><strong>Start a New Discussion</strong></h6>
              <form name="" method="">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="subject">
                </div>
                <div class="form-group">
                  <textarea class="form-control" placeholder="Message" rows="5"></textarea>
                </div>
                <button type="submit" class="button small-button pd-blue-button float-right no-margin">START THREAD</button>
              </form>
            </div>
            <div class="post-form reply-thread">
              <h3 class="pd-blue-text thin-heading">Thread Title Is Listed Here</h3>
              <div id="reply-container">
                <section class="row align-items-center">
                  <div class="col-md-2">
                    <a href="#" id="profile-image"><span>UN</span></a>
                  </div>
                  <div class="col-md-10 no-padding">
                    <p><a class="teq-blue-text" href="#">User Name Here</a><br /><small>post date and time here</small></p>
                  </div>
                </section>
                <section class="row align-items-center">
                  <div class="col-md">
                    <p>This is the post topic and subject. All the post and thread info goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nisi tortor, mollis vel tellus a, sollicitudin varius leo. Etiam semper id mauris lacinia tincidunt. Integer aliquet ex ac magna cursus consequat. Sed est ante, imperdiet in ultricies in, pulvinar sit amet leo. Aenean imperdiet eget tortor elementum sagittis.</p>
                  </div>
                </section>
                <section class="row">
                  <div class="col-md-2">
                    <a data-toggle="collapse" href="#thread-reply-form" aria-expanded="false" aria-controls="thread-reply-form"><img src="assets/images/reply-button-icon.svg" alt="" /></a>
                  </div>
                  <div class="col-md-10 text-right">
                    <p><a class="teq-blue-text" href="#">View all Replies</a></p>
                  </div>
                </section>
              </div>
              <div class="collapse" id="thread-reply-form">
                <form name="" method="">
                  <div class="form-group">
                    <textarea class="form-control" placeholder="Message" rows="5"></textarea>
                  </div>
                  <button type="submit" class="btn float-right">Leave your reply</button>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <h6 class="thin-heading"><strong>Previous Threads</strong></h6>
            <div class="card course-card thread-post">
              <div class="card-body">
                <p class="card-title"><a href="#">One thought on “Welcome to SMART Notebook 2015 Digital Teacher Certification!”</a></p>
                <small class="card-text">posted 10:30AM, May 16, 2015 by Priscilla Kageni</small>
                <p><a href="#" class="card-link yellow-text">5 Replies</a></p>
              </div>
            </div>
            <div class="card course-card thread-post">
              <div class="card-body">
                <p class="card-title"><a href="#">One thought on “Welcome to SMART Notebook 2015 Digital Teacher Certification!”</a></p>
                <small class="card-text">posted 10:30AM, May 16, 2015 by Priscilla Kageni</small>
                <p><a href="#" class="card-link yellow-text">5 Replies</a></p>
              </div>
            </div>
            <div class="card course-card thread-post">
              <div class="card-body">
                <p class="card-title"><a href="#">One thought on “Welcome to SMART Notebook 2015 Digital Teacher Certification!”</a></p>
                <small class="card-text">posted 10:30AM, May 16, 2015 by Priscilla Kageni</small>
                <p><a href="#" class="card-link yellow-text">5 Replies</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div role="tabpanel" class="tab-pane fade" id="course-files-tab">
        <div class="row course-details-extra-content">
          <div class="col-sm-8">
            <ul class="nav flex-column files-list nav-tabs" role="tablist">
              <li class="nav-item">
                <a class="nav-link" href="#session-1" role="tab" data-toggle="tab" aria-controls="session-1"><span>1</span> Settings and Features <small class="float-right"><span>1</span> File</small></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#session-2" role="tab" data-toggle="tab" aria-controls="session-2"><span>2</span> Learning with the iPad <small class="float-right"><span>2</span> File</small></a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#session-3" role="tab" data-toggle="tab" aria-controls="session-3"><span>3</span> Apptastic <small class="float-right"><span>0</span> File</small></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#session-4" role="tab" data-toggle="tab" aria-controls="session-4"><span>4</span> Enhancing Documents with Pages <small class="float-right"><span>1</span> File</small></a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#session-5" role="tab" data-toggle="tab" aria-controls="session-5"><span>5</span> Building Sophisticated Spreadsheets and Numbers <small class="float-right"><span>0</span> File</small></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#session-6" role="tab" data-toggle="tab" aria-controls="session-6"><span>6</span> Active <small class="float-right"><span>1</span> File</small></a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#session-7" role="tab" data-toggle="tab" aria-controls="session-7"><span>7</span> iPhoto <small class="float-right"><span>1</span> File</small></a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#session-8" role="tab" data-toggle="tab" aria-controls="session-8"><span>8</span> iMovie <small class="float-right"><span>0</span> File</small></a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#session-9" role="tab" data-toggle="tab" aria-controls="session-9"><span>9</span> iTunes U <small class="float-right"><span>0</span> File</small></a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#session-10" role="tab" data-toggle="tab" aria-controls="session-10"><span>10</span> Mobile Assessment <small class="float-right"><span>0</span> File</small></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#session-11" role="tab" data-toggle="tab" aria-controls="session-11"><span>11</span> GarageBand <small class="float-right"><span>1</span> File</small></a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#session-12" role="tab" data-toggle="tab" aria-controls="session-12"><span>12</span> Configuring iOS <small class="float-right"><span>0</span> File</small></a>
              </li>
            </ul>
          </div>
          <div class="col-sm-4">
            <div class="tab-content files-list-attachments">
              <div role="tabpanel" class="tab-pane fade" id="session-1"></div>
              <div role="tabpanel" class="tab-pane fade" id="session-2"></div>
              <div role="tabpanel" class="tab-pane fade" id="session-3"></div>
              <div role="tabpanel" class="tab-pane fade" id="session-4"></div>
              <div role="tabpanel" class="tab-pane fade" id="session-5"></div>
              <div role="tabpanel" class="tab-pane fade" id="session-6"></div>
              <div role="tabpanel" class="tab-pane fade active show" id="session-7">
                <a href="#" class="file">iPhoto User Manuel.pdf</a>
                <a href="#" class="link">iPhoto Quick Keys Page a Great place to find resources for your reference</a>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="session-8"></div>
              <div role="tabpanel" class="tab-pane fade" id="session-9"></div>
              <div role="tabpanel" class="tab-pane fade" id="session-10"></div>
              <div role="tabpanel" class="tab-pane fade" id="session-11"></div>
              <div role="tabpanel" class="tab-pane fade" id="session-12"></div>
            </div>
          </div>
        </div>
      </div>

      <div role="tabpanel" class="tab-pane fade show active" id="course-assignments-tab">
        <div class="row course-details-extra-content">
          <div class="col-md-8">
            <div class="assignment-block">
              <h5><strong>Session 7 - Photos</strong></h5>
              <p>Share your final project topic with us!</p>
              <p>Will you be creating teacher management materials or student sample materials? For student materials, what will be your final project topic? For teacher materials, how do you hope to use iPads and apps
            </div>
          </div>
          <div class="col-md-4" id="step-1">
            <section class="assignment-submit active">
              <h6 class="thin-heading"><strong>Ready to Submit Your Assignment?</strong></h6>
              <form name="" method="">
                <div class="form-group" id="submit-assignment-first">
                  <textarea class="form-control" placeholder="Comments" rows="3"></textarea>
                </div>
                <div class="form-group">
                  <input type="file" class="form-control-file form-control height-full">
                </div>
                <button type="submit" class="button small-button yellow-button no-margin float-right">SUBMIT</button>
                <button type="submit" class="button small-button light-grey-button no-margin float-right">CANCEL</button>
              </form>
            </section>
          </div>
        </div>

        <div class="tab-pane">
          <div class="row course-details-extra-content">
            <div class="col-8">

              <div class="card course-card thread-post">
                <div class="card-body assignment-block assignment-post-user">
                  <h6><a href="#" class="pd-blue-text bold">User name</a> posted on August 14, 2017 at 11:56pm</h6>
                  <p>Activity Builder Submission.</p>
                  <a href="#">july03-1153.wmv</a>
                </div>
              </div>

              <div class="card course-card thread-post">
                <div class="card-body assignment-block assignment-post-user">
                  <h6><a href="#" class="pd-blue-text bold">Administrator User name</a> posted on August 15, 2017 at 11:56am</h6>
                  <p>Hello User. I liked your idea for the Lesson Activity Builder - however, when I began placing the objects into the correct category, nothing happened. There also was no bounce back if I chose the incorrect category. The YouTube add on worked fine! Once you fix the Lesson Activity Builder, re-submit and we'll be able to mark and complete and provide any feedback. Thanks! </p>
                  <div class="form-control-feedback margin-top float-right">
                    <h5 class="text-danger"><span class="badge badge-danger thin-heading">INCOMPLETE</span> Please re-submit</h5>
                  </div>
                </div>
              </div>

              <div class="card course-card thread-post">
                <div class="card-body assignment-block assignment-post-user">
                  <h6><a href="#" class="pd-blue-text bold">User name</a> posted on August 14, 2017 at 11:56pm</h6>
                  <p>I fixed the Activity Builder. </p>
                  <a href="#">july03-1153.wmv</a>
                  <div class="form-control-feedback margin-top float-right">
                    <h5 class="thin-heading text-success"><span class="badge badge-success thin-heading">COMPLETE</span></h5>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>

    </div>
  </section>

  <div class="container-fluid white-bg">
    <h2 class="thin-heading h2 padding-top">Similar courses you may be interested in:</h2>
    <div class="row course-selections">
      <div class="col-md-4 course-card-container">
        <div class="card course-card">
          <div class="card-header green">
            <ul class="nav course-details">
              <li class="nav-item category-duration-details">
                <a href="course-details-certification.php">8hr 54min</a>
              </li>
              <li class="nav-item category-sessions-details">
                <a href="course-details-certification.php">12 Sessions</a>
              </li>
              <li class="nav-item">
              </li>
            </ul>
            <button class="admin-menu" type="button"></button>
          </div>
          <div class="card-body">
            <p><a href="course-details-certification.php">Digital Teacher iPad Certification 7: iPhoto</a></p>
            <p>With this course, participants will be able to add and organize content to iPhoto and collaborate with others through a shared Photostream...</p>
          </div>
          <div class="card-footer">
            <div class="course-rating">
              <span class="one-stars">
                <i>1 out of 5</i>
              </span>
            </div>
            <div class="course-footer">
              <span>
                <p class="certification-badge"></p>
                <p class="thin-heading bold">ISTE<i class="blue-text">*</i></p>
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 course-card-container">
        <div class="card course-card">
          <div class="card-header yellow">
            <ul class="nav course-details">
              <li class="nav-item category-duration-details">
                <a href="course-details-single-course.php">46min</a>
              </li>
              <li class="nav-item"></li>
              <li class="nav-item category-chapters-details">
                <a href="course-details-single-course.php">5 Chapters</a>
              </li>
            </ul>
            <button class="admin-menu" type="button"></button>
          </div>
          <div class="card-body">
            <p><a href="course-details-single-course.php">Creating Multi-Touch Books with iBooks Author</a></p>
            <p>The new generation, referred to as Gen Z, is growing up in a world where everyday they are immersed in technology. Students have become producers and creators of content, desiring to put their skills to use... </p>
          </div>
          <div class="card-footer">
            <div class="course-rating">
              <span class="three-stars">
                <i>3 out of 5</i>
              </span>
            </div>
            <div class="course-footer">
              <span></span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 course-card-container">
        <div class="card course-card">
          <div class="card-header light-blue">
            <ul class="nav course-details">
              <li class="nav-item category-duration-details">
                <a href="#">31min</a>
              </li>
              <li class="nav-item"></li>
              <li class="nav-item"></li>
            </ul>
            <button class="admin-menu" type="button"></button>
          </div>
          <div class="card-body">
            <p><a href="#">iOS 10</a></p>
            <p>In this course, the PD team will explore the most effective and exciting features iOS 10 has to offer!  Released in September 2016, the iOS 10 operating system is sure to help teachers create an engaging... </p>
          </div>
          <div class="card-footer">
            <div class="course-rating">
              <span></span>
            </div>
            <div class="course-footer">
              <span></span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <?php include 'digital-online-certifications.php';?>
</section>

<?php include 'footer.php';?>
