<?php
  $logged_in = True;
  $default_background_image_url='assets/images/default-course-background_lg.jpg';
?>

<?php include 'header.php';?>
  <?php include 'askotis.php';?>

<section class="main-content thin-search-bar course-details">

  <div class="container-fluid course-background" style="background-image: url('<?php echo $default_background_image_url; ?>');">
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
  </div>

  <div class="container-fluid">
    <div class="row title-nav">
      <div class="col-md-3">
        <h6 class="sub-heading">OTIS Digital Teacher Certification</h6>
        <h1 class="course-details-title">Google Educator Basics</h1>
      </div>
      <div class="col-md justify-content-end flex-align-center">
        <div class="col p-2">
          <svg version="1.1" viewBox="0 0 50 50">
          	 <path class="black-fill" d="M24.009,1.239C11.81,1.239,1.89,11.895,1.89,25s9.92,23.761,22.119,23.761S46.127,38.105,46.127,25 S36.208,1.239,24.009,1.239z M33.392,37.673c-0.268,0.864-0.804,1.296-1.609,1.44c-0.536,0.144-1.072-0.144-1.609-0.576 c-1.877-1.872-6.166-6.624-7.909-8.496c-0.402-0.432-0.536-0.864-0.536-1.44c0-4.032,0-14.977,0-19.153 c0-1.152,0.804-2.016,1.877-2.016c1.072,0,1.877,0.864,1.877,2.016c0,1.872,0,10.369,0,12.241c0,1.728,0,3.744,0,5.472 c0,0.288,0.134,0.576,0.268,0.72c1.475,1.584,5.496,5.904,6.971,7.632C33.392,36.089,33.527,36.809,33.392,37.673z"/>
          </svg>
          <span class="certification-duration">9hr 43min</span>
        </div>
        <div class="p-2">Flex item</div>
        <div class="p-2 ">
          <button class="admin-menu" type="button"></button>
        </div>
        <div class="p-2">Flex item</div>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row player-details">
      <div class="col-md-3">
        <ul class="course-sessions-list">
          <li>Sessions</li>
          <li>Introduction</li>
          <li>Support Resources</li>
          <li>Chrome</li>
          <li>Drive</li>
          <li>Optimizing Communication</li>
          <li>Staying Organized</li>
          <li>Collaborating with Docs & Drawings</li>
          <li>Slides</li>
          <li>Sheets</li>
          <li>Forms</li>
          <li>Classroom</li>
          <li>
            <ol>
              <li>Recap of Session 10 - Forms</li>
              <li>Classroom Help Center</li>
              <li>Stream</li>
              <li>Classwork</li>
              <li>People</li>
              <li>Grades</li>
              <li>Assignment 1</li>
            </ol>
          </li>
          <li>Sites</li>
          <li> YouTube</li>
          <li>Additional Google Tools</li>
          <li>Final Assignment</li>
        </ul>
      </div>
      <div class="col-md">
        <img class="width-full" src="assets/images/preview-screen.jpg" />
      </div>
    </div>
  </div>

  <section class="container-fluid light-grey-bg">
    <div class="row">
      <div class="col-lg-8 col-sm-12">
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link" href="#courese-discussion-tab" role="tab" data-toggle="tab" aria-controls="courese-discussion-tab" aria-expanded="false"><img src="assets/images/course-discussion-icon.svg" width="150" height="25px" alt="Discussion" /></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#course-files-tab" role="tab" data-toggle="tab" aria-controls="course-files-tab" aria-expanded="false"><img src="assets/images/course-files-icon.svg"  width="150" height="25px" alt="Files" /></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#course-assignments-tab" role="tab" data-toggle="tab" aria-controls="course-assignments-tab" aria-expanded="true"><img src="assets/images/course-assignments-icon.svg" width="150" height="25px" alt="Assignments"  /></a>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <section class="container-fluid light-grey-bg">
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane fade" id="courese-discussion-tab">
        <div class="row">
          <div class="col-md-8">
            <div class="post-form new-thread">
              <h6><strong>Start a New Discussion</strong></h6>
              <form name="" method="">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="subject">
                </div>
                <div class="form-group">
                  <textarea class="form-control" placeholder="Message" rows="5"></textarea>
                </div>
                <button type="submit" class="btn float-right">Start Thread</button>
              </form>
            </div>
            <div class="post-form reply-thread">
              <h3 class="teq-blue-text">Thread Title Is Listed Here</h3>
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
                  <div class="col-md padding-sm">
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
            <h6><strong>Previous Threads</strong></h6>
            <div class="card thread-post">
              <div class="card-block">
                <p class="card-title"><a href="#" class="teq-blue-text">One thought on “Welcome to SMART Notebook 2015 Digital Teacher Certification!”</a></p>
                <small class="card-text">posted 10:30AM, May 16, 2015 by Priscilla Kageni</small>
                <p><a href="#" class="card-link teq-blue-text">5 Replies</a></p>
              </div>
            </div>
            <div class="card thread-post">
              <div class="card-block">
                <p class="card-title"><a href="#" class="teq-blue-text">One thought on “Welcome to SMART Notebook 2015 Digital Teacher Certification!”</a></p>
                <small class="card-text">posted 10:30AM, May 16, 2015 by Priscilla Kageni</small>
                <p><a href="#" class="card-link teq-blue-text">5 Replies</a></p>
              </div>
            </div>
            <div class="card thread-post">
              <div class="card-block">
                <p class="card-title"><a href="#" class="teq-blue-text">One thought on “Welcome to SMART Notebook 2015 Digital Teacher Certification!”</a></p>
                <small class="card-text">posted 10:30AM, May 16, 2015 by Priscilla Kageni</small>
                <p><a href="#" class="card-link teq-blue-text">5 Replies</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div role="tabpanel" class="tab-pane fade" id="course-files-tab">
        <div class="row">
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
        <div class="row">
          <div class="col-md-8">
            <div class="assignment-block">
              <h5><strong>Session 7 - Photos</strong></h5>
              <p>Share your final project topic with us!</p>
              <p>Will you be creating teacher management materials or student sample materials? For student materials, what will be your final project topic? For teacher materials, how do you hope to use iPads and apps
            </div>
          </div>
          <div class="col-md-4" id="step-1">
            <section class="assignment-submit active">
              <h6><strong>Ready to Submit Your Assignment?</strong></h6>
              <form name="" method="" onsubmit="showTwo(); return false;">

                <div class="form-group" id="submit-assignment-first">
                  <textarea class="form-control" placeholder="Comments" rows="3"></textarea>
                </div>
                <div class="form-group">
                  <input type="file" class="form-control-file form-control">
                </div>
                <button type="submit" class="btn gray float-right">Cancel</button><button type="submit" class="btn float-right">Submit</button>

              </form>
            </section>
          </div>
        </div>

        <div class="row" id="step-2" style="display:none;" onclick="showThree(); return false;">
          <div class="col-md-8">
            <div class="assignment-block assignment-post-user">
              <p><a href="#" class="teq-blue-text">User name</a> posted on August 14, 2017 at 11:56am</p>
              <p>I utilized Activity Builder for a sorting activity. I used the YouTube feature for a Read-Aloud. </p>
              <a href="#"><img src="assets/images/assignment-file-icon.svg" width="300" height="60" alt="Assignment Files" />july03-1153.wmv</a>
            </div>
          </div>
          <div class="col-md-4">
          </div>
          <div class="form-control-feedback submit row align-items-center"><span>Submitted</span></div>
        </div>
        <div id="step-3" style="display:none;">
        <div class="row">
          <div class="col-md-8">
            <div class="assignment-block assignment-post-user">
              <p><a href="#" class="teq-blue-text">User name</a> posted on August 14, 2017 at 11:56pm</p>
              <p>I fixed the Activity Builder. </p>
              <a href="#"><img src="assets/images/assignment-file-icon.svg" width="300" height="60" alt="Assignment Files" />july03-1153.wmv</a>
            </div>
          </div>
          <div class="col-md-4">
            <section class="assignment-submit active">
              <h6><strong>Ready to Submit Your Assignment?</strong></h6>
              <form name="" method="" onsubmit="showFour(); return false;">
                <div class="form-group" id="submit-assignment-first">
                  <textarea class="form-control" placeholder="Comments" rows="3"></textarea>
                </div>
                <div class="form-group">
                  <input type="file" class="form-control-file form-control">
                </div>
                <button type="submit" class="btn gray float-right">Cancel</button><button type="submit" class="btn float-right">Submit</button>
              </form>
            </section>
          </div>
          <div class="form-control-feedback row align-items-center"><span class="incomplete">Incomplete <button type="submit" class="btn">Please re-submit</button></span></div>
        </div>
        <div class="row">
          <div class="col-md-8">
            <div class="assignment-block assignment-post-admin">
              <p><a href="#" class="teq-blue-text">Administrator User name</a> posted on August 15, 2017 at 11:56am</p>
              <p>Hello User. I liked your idea for the Lesson Activity Builder - however, when I began placing the objects into the correct category, nothing happened. There also was no bounce back if I chose the incorrect category. The YouTube add on worked fine! Once you fix the Lesson Activity Builder, re-submit and we'll be able to mark and complete and provide any feedback. Thanks! </p>
            </div>
          </div>
        </div>
        </div>

        <div class="row" id="step-4" style="display:none;">
          <div class="col-md-8">
            <div class="assignment-block assignment-post-user">
              <p><a href="#" class="teq-blue-text">User name</a> posted on August 14, 2017 at 11:56pm</p>
              <p>I fixed the Activity Builder. </p>
              <a href="#"><img src="assets/images/assignment-file-icon.svg" width="300" height="60" alt="Assignment Files" />july03-1153.wmv</a>
            </div>
          </div>
          <div class="col-md-4">
          </div>
          <div class="form-control-feedback row align-items-center"><span class="complete">Complete</span></div>
        </div>
      </div>
    </div>
  </section>


  <?php include 'digital-online-certifications.php';?>
</section>

<?php include 'footer.php';?>
