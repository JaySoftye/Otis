<?php
  $logged_in = True;
  $default_background_image_url='assets/images/default-course-background_lg.jpg';
?>

<?php include 'header.php';?>
  <?php include 'askotis.php';?>

<section class="main-content">

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

  <div class="container-fluid pd-blue-bg">
    <nav class="navbar navbar-expand-lg dashboard-menu">
      <a class="nav-item thin-heading" href="user-dashboard-teacher.php">My Dashboard</a>
      <a class="nav-item thin-heading" href="user-progress-tracker.php">Progress Tracker</a>
      <a class="nav-item thin-heading" href="user-achievements.php">Achievements</a>
      <a class="nav-item thin-heading active" href="user-account-info.php">Account Info</a>
      <a class="nav-item thin-heading" href="#">Reports</a>
    </nav>
  </div>

  <div class="container-fluid light-grey-bg padding-bottom">

    <div class="row user-data">
      <h4 class="col-md-12">My Account</h4>
    </div>

    <form method="post" class="profile-form user-account-profile">
      <script>
      // HELPER FUNCTIONS
      $(document).ready(function() {
        $('#edit-info button#edit-info-button').click(function() {
          event.preventDefault();
          $('#edit-info').addClass('hidden');
          $('div#submit-info').removeClass('hidden');
          $('form.user-account-profile .form-control').prop("disabled", false);
        });
        $('#submit-info label#cancel-close').click(function() {
          $('#edit-info').removeClass('hidden');
          $('div#submit-info').addClass('hidden');
          $('form.user-account-profile .form-control').removeClass('error').prop("disabled", true);
        });
        $('#submit-info button#submit-info-button').click(function() {
          event.preventDefault();
          console.log('user-account-profile submitted');
          $('form.user-account-profile .form-control').removeClass('error');

            var emptyFields = $('form.user-account-profile .form-control').filter(function() {
              return $(this).val() === "";
            }).length;

            if (emptyFields === 0) {
              $('#edit-info').removeClass('hidden');
              $('div#submit-info').addClass('hidden');
              $('form.user-account-profile .form-control').removeClass('error').prop("disabled", true);
            } else {
              $('form.user-account-profile .form-control').each(function() {
                if( $(this).val().length === 0 ) {
                  $(this).addClass('error');
                }
              });
            }
          });
      });
      </script>
      <div class="row account-card">
        <div class="col-md-2 user-account-profile">
          <div class="profile-photo" style="background-image: url('https://cdn.pixabay.com/photo/2016/04/15/18/05/computer-1331579_960_720.png');"></div>
          <div class="form-group file-input">
            <input type="file" name="imagefile" class="form-control-file">
          </div>
          <div class="form-group text-center">
            <button type="button" class="profile-avatar-delete-button"><small>[X] Remove Photo</small></button>
          </div>
          <p class="error hidden text-danger"></p>
        </div>
        <div class="col-md-4 user-account-profile">
          <div class="form-group">
            <input class="form-control" type="text" id="first_name" name="first_name" value="jay" placeholder="first name" disabled="disabled">
          </div>
          <div class="form-group">
            <input class="form-control" type="text" id="last_name" name="last_name" value="softye" placeholder="last name"  disabled="disabled">
          </div>
          <div class="form-group">
            <input class="form-control" type="text" id="email" name="email" value="jonathansoftye@teq.com" placeholder="email" disabled="disabled">
            <div class="no-padding"></div>
          </div>
          <div class="form-group">
            <input class="form-control" type="text" id="phone" name="phone" value="877-455-9369" placeholder="phone" disabled="disabled">
          </div>
          <div class="form-group">
            <select id="marketing_title_id" name="marketing_title_id" class="form-control" autocomplete="off" disabled="disabled">
              <option value=""></option>
              <option value="9" selected="">Assistant Principal</option>
              <option value="27">Assistant Superintendent</option>
              <option value="14">Assistant Superintendent for Curriculum/Instruction</option>
              <option value="29">Channel Contact</option>
              <option value="15">Curriculum Coordinator</option>
              <option value="5">Curriculum Director</option>
              <option value="28">Digital Learning / eLearning Coordinator</option>
              <option value="26">Director of Special Services/Education</option>
              <option value="17">Instructional Technology Specialist</option>
              <option value="6">IT Director</option>
              <option value="24">Marketing Executive</option>
              <option value="19">Math Director/Chairperson</option>
              <option value="13">Network Systems Administrator</option>
              <option value="30">Paraprofessional</option>
              <option value="12">PD Coordinator</option>
              <option value="11">PD Director</option>
              <option value="2">Principal</option>
              <option value="21">Project Manager</option>
              <option value="23">Sales Executive</option>
              <option value="10">School Business Official</option>
              <option value="18">Science Director/Chairperson</option>
              <option value="25">Secretary</option>
              <option value="31">Social Worker</option>
              <option value="7">STEM Coordinator</option>
              <option value="20">STEM Director</option>
              <option value="3">Superintendent</option>
              <option value="22">Teacher</option>
              <option value="16">Technology Coordinator</option>
              <option value="4">Technology Director</option>
              <option value="8">Technology SPOC</option>
            </select>
          </div>
        </div>
        <div class="col-md-4 user-account-profile">
          <div class="form-group">
            <input class="form-control" type="text" id="groupname" name="groupname" value="School Name" placeholder="school name" disabled="disabled">
          </div>
          <div class="form-group">
            <input class="form-control" type="text" id="zipcode" name="zipcode" value="11730" placeholder="zip code" disabled="disabled">
          </div>
          <div class="form-group">
            <select id="country" name="country" class="form-control" autocomplete="off" disabled="disabled">
              <option value="US">United States</option>
            </select>
          </div>
          <div class="form-group">
            <select id="state" name="state" class="form-control" autocomplete="off" disabled="disabled">
              <option value="NY">NY</option>
            </select>
          </div>
        </div>
        <div class="col-md-2 user-account-profile">
          <div class="form-group">
            <div id="edit-info">
              <button type="button" id="edit-info-button" class="edit dropshadow">Edit Info</button>
            </div>
            <div id="submit-info" class="hidden">
              <button type="submit" id="submit-info-button" class="submit dropshadow">Submit Changes</button>
              <label id="cancel-close" class="link pd-blue-text"><strong>CANCEL</strong></label>
            </div>
          </div>
        </div>
      </div>
    </form>

    <form method="post" class="profile-form user-license-info">
      <div class="row align-items-center account-card">
        <div class="col-md-10 user-license-info">
          <h6><strong>License Information</strong></h6>
          <h6><span id="lic-exp">2,397</span> day until Account Expires</h6>
          <h6><span id="lic-exp-date">Sunday December 31, 2023</span></ph6>
        </div>
        <div class="col-md-2 user-license-info">
          <div class="form-group">
            <div id="renew-submit">
              <button type="submit" class="edit dropshadow">RENEW</button>
            </div>
            <label class="link pd-blue-text"><strong>REQUEST FULL ACCESS</strong></label>
          </div>
        </div>
      </div>
    </form>

    <form method="post" class="profile-form user-email-notifications">
      <script>
      // HELPER FUNCTIONS
      $(document).ready(function() {
        $('#edit-email-notifications button#edit-email-notifications-button').click(function() {
          event.preventDefault();
          $('#edit-email-notifications').addClass('hidden');
          $('div#submit-email-notifications').removeClass('hidden');
          $('div#email-notifications').slideToggle();
        });
        $('#submit-email-notifications label#cancel-close').click(function() {
          $('#edit-email-notifications').removeClass('hidden');
          $('div#submit-email-notifications').addClass('hidden');
          $('div#email-notifications').slideToggle();
        });
        $('#submit-email-notifications button#submit-email-notifications-button').click(function() {
          event.preventDefault();
          console.log('user-email-notifications submitted');
          $('#edit-email-notifications').removeClass('hidden');
          $('div#submit-email-notifications').addClass('hidden');
          $('div#email-notifications').slideToggle();
        });
      });
      </script>
      <div class="row account-card">
        <div class="col-md-10">
          <h6><strong>Configure your email notifications below</strong></h6>
          <div id="email-notifications" class="row" style="display: none;">
            <div class="col-md-6 user-email-notifications">
              <div class="form-check">
                <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="register_course" value="1" checked="">Email me when I register for a course</label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="day_before_course" value="1" checked="">Email me a reminder the day before a course</label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" name="week_before_course" value="1" checked="">Email me a reminder the week before a course</label>
              </div>
            </div>
            <div class="col-md-6 user-email-notifications">
              <div class="form-check">
                <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="receive_news" value="1" checked="">Email me with News about Opd</label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="receive_marketing" value="1" checked="">Email me with Sales / Marketing promotions</label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="receive_replies" value="1" checked="">Email me when someone replies to one of my Discussion posts</label>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-2 user-email-notifications">
          <div class="form-group">
            <div id="edit-email-notifications">
              <button type="button"  id="edit-email-notifications-button" class="edit dropshadow">Edit Notifications</button>
            </div>
            <div id="submit-email-notifications" class="hidden">
              <button type="submit" id="submit-email-notifications-button" class="submit dropshadow">Submit Changes</button>
              <label id="cancel-close" class="link pd-blue-text"><strong>CANCEL</strong></label>
            </div>
          </div>
        </div>
      </div>
    </form>

    <form method="post" class="profile-form user-password-security">
      <script>
      // HELPER FUNCTIONS
      $(document).ready(function() {
        $('#edit-password button#edit-password-button').click(function() {
          event.preventDefault();
          $('#edit-password').addClass('hidden');
          $('div#submit-password').removeClass('hidden');
          $('div#password-security').slideToggle();
        });
        $('#submit-password label#cancel-close').click(function() {
          $('#edit-password').removeClass('hidden');
          $('div#submit-password').addClass('hidden');
          $('div#password-security').slideToggle();
        });
        $('#submit-password button#submit-password-button').click(function() {
          event.preventDefault();
          console.log('user-password-security submitted');
          $('form.user-password-security .form-control').removeClass('error');

            var emptyFields = $('form.user-password-security .form-control').filter(function() {
              return $(this).val() === "";
            }).length;

            if (emptyFields === 0) {
              $('#edit-password').removeClass('hidden');
              $('div#submit-password').addClass('hidden');
              $('div#password-security').slideToggle();
            } else {
              $('form.user-password-security .form-control').each(function() {
                if( $(this).val().length === 0 ) {
                  $(this).addClass('error');
                }
              });
            }
          });
      });
      </script>
      <div class="row account-card">
        <div class="col-md-10 user-password-security">
          <h6><strong>Password Security</strong></h6>
          <div id="password-security" class="form-row" style="display: none;">
            <div class="col">
              <input class="form-control" type="password" id="password" name="password" value="" placeholder="NEW PASSWORD">
            </div>
            <div class="col">
              <input class="form-control" type="password" id="password2" name="password2" value="" placeholder="CONFIRM PASSWORD">
            </div>
          </div>
          <div id="password-error-message" class="error-message hidden">Password must have at least one uppercase letter.</div>
        </div>
        <div class="col-md-2 user-password-security">
          <div class="form-group">
            <div id="edit-password">
              <button type="button" id="edit-password-button" class="edit dropshadow">Edit Password</button>
            </div>
            <div id="submit-password" class="hidden">
              <button type="submit" id="submit-password-button" class="submit dropshadow">Submit Changes</button>
              <label id="cancel-close" class="link pd-blue-text"><strong>CANCEL</strong></label>
            </div>
          </div>
        </div>
      </div>
    </form>

    <form method="post" class="profile-form user-password-questions">
      <script>
      // HELPER FUNCTIONS
      $(document).ready(function() {
        $('#edit-password-questions button#edit-password-questions-button').click(function() {
          event.preventDefault();
          $('#edit-password-questions').addClass('hidden');
          $('div#submit-password-questions').removeClass('hidden');
          $('div#password-questions').slideToggle();
        });
        $('#submit-password-questions label#cancel-close').click(function() {
          $('#edit-password-questions').removeClass('hidden');
          $('div#submit-password-questions').addClass('hidden');
          $('div#password-questions').slideToggle();
        });
        $('#submit-password-questions button#submit-password-questions-button').click(function() {
          event.preventDefault();
          console.log('user-password-questions submitted');
          $('form.user-password-questions .form-control').removeClass('error');

            var emptyFields = $('form.user-password-questions .form-control').filter(function() {
              return $(this).val() === "";
            }).length;

            if (emptyFields === 0) {
              $('#edit-password-questions').removeClass('hidden');
              $('div#submit-password-questions').addClass('hidden');
              $('div#password-questions').slideToggle();
            } else {
              $('form.user-password-questions .form-control').each(function() {
                if( $(this).val().length === 0 ) {
                  $(this).addClass('error');
                }
              });
            }
          });
      });
      </script>
      <div class="row account-card">
        <div class="col-md-10 user-password-questions">
          <h6><strong>Security Questions for Access</strong></h6>
          <div id="password-questions" class="form-row" style="display: none;">
            <div class="col">
              <select id="SQ1" name="SQ1" class="form-control security-question" autocomplete="off">
                <option value="1" class="red-txt">What was your childhood nickname?</option>
                <option value="2" selected="selected">What is the name of your favorite childhood friend?</option>
                <option value="3">In what city or town did your mother and father meet?</option>
                <option value="4">What is the middle name of your oldest child?</option>
                <option value="5">What is your favorite team?</option>
                <option value="6">What is your favorite movie?</option>
                <option value="7">What was your favorite sport in high school?</option>
                <option value="8">What was your favorite food as a child?</option>
                <option value="9">What is the first name of the boy or girl that you first kissed?</option>
                <option value="10">What was the make and model of your first car?</option>
                <option value="11">What was the name of the hospital where you were born?</option>
                <option value="12">Who is your childhood sports hero?</option>
                <option value="13">What school did you attend for sixth grade?</option>
                <option value="14">What was the last name of your third grade teacher?</option>
                <option value="15">In what town was your first job?</option>
                <option value="16">What was the name of the company where you had your first job?</option>
              </select>
              <input class="form-control" type="password" id="SA1" name="SA1" value="" placeholder="Security Question Answer 1">
            </div>
            <div class="col">
              <select id="SQ2" name="SQ2" class="form-control security-question" autocomplete="off">
                <option value="1" selected="selected">What was your childhood nickname?</option>
                <option value="2">What is the name of your favorite childhood friend?</option>
                <option value="3">In what city or town did your mother and father meet?</option>
                <option value="4">What is the middle name of your oldest child?</option>
                <option value="5">What is your favorite team?</option>
                <option value="6">What is your favorite movie?</option>
                <option value="7">What was your favorite sport in high school?</option>
                <option value="8">What was your favorite food as a child?</option>
                <option value="9">What is the first name of the boy or girl that you first kissed?</option>
                <option value="10">What was the make and model of your first car?</option>
                <option value="11">What was the name of the hospital where you were born?</option>
                <option value="12">Who is your childhood sports hero?</option>
                <option value="13">What school did you attend for sixth grade?</option>
                <option value="14">What was the last name of your third grade teacher?</option>
                <option value="15">In what town was your first job?</option>
                <option value="16">What was the name of the company where you had your first job?</option>
              </select>
              <input class="form-control" type="password" id="SA2" name="SA2" value="" placeholder="Security Question Answer 2">
            </div>
          </div>
        </div>
        <div class="col-md-2 user-password-questions">
          <div class="form-group">
            <div id="edit-password-questions">
              <button type="button" id="edit-password-questions-button" class="edit dropshadow">Edit Questions</button>
            </div>
            <div id="submit-password-questions" class="hidden">
              <button type="submit" id="submit-password-questions-button" class="submit dropshadow">Submit Changes</button>
              <label id="cancel-close" class="link pd-blue-text"><strong>CANCEL</strong></label>
            </div>
          </div>
        </div>
      </div>
    </form>

    <form method="post" class="profile-form user-state-certification">
      <script>
      // HELPER FUNCTIONS
      $(document).ready(function() {
        $('#edit-state-certification button#edit-state-certification-button').click(function() {
          event.preventDefault();
          $('#edit-state-certification').addClass('hidden');
          $('div#submit-state-certification').removeClass('hidden');
          $('div#state-certification').slideToggle();
        });
        $('#submit-state-certification label#cancel-close').click(function() {
          $('#edit-state-certification').removeClass('hidden');
          $('div#submit-state-certification').addClass('hidden');
          $('div#state-certification').slideToggle();
        });
        $('#submit-state-certification button#submit-state-certification-button').click(function() {
          event.preventDefault();
          console.log('user-state-certification submitted');
          $('form.user-state-certification .form-control').removeClass('error');

            var emptyFields = $('form.user-state-certification .form-control').filter(function() {
              return $(this).val() === "";
            }).length;

            if (emptyFields === 0) {
              $('#edit-state-certification').removeClass('hidden');
              $('div#submit-state-certification').addClass('hidden');
              $('div#state-certification').slideToggle();
            } else {
              $('form.user-state-certification .form-control').each(function() {
                if( $(this).val().length === 0 ) {
                  $(this).addClass('error');
                }
              });
            }
          });
      });
      </script>
      <div class="row account-card">
        <div class="col-md-10 user-state-certification">
          <h6><strong>State Approved Certification Registration</strong></h6>
          <div id="state-certification" class="form-row" style="display: none;">
            <div class="col">
              <p class="thin-heading bold">The information you provide here is required by the State of  for you to receive state-approved PD hours.</p>
              <div class="form-group">
                <label>Please Provide Month and Day of Birth (mm/dd)</label>
                <input class="form-control" type="text" name="CA[1]" value="" placeholder="mm/dd">
              </div>
              <div class="form-group">
                <label>As required by the NYSED Office of teaching Initiatives, please provide the last 4 digits of your Social Secuirty Number. If you have any questions about CTLE Requirments, please contact the NYSED Office of Teacher Initiatives.</label>
                <input class="form-control" type="text" name="CA[7]" value="" placeholder="####">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-2 user-state-certification">
          <div class="form-group">
            <div id="edit-state-certification">
              <button type="button" id="edit-state-certification-button" class="edit dropshadow">Edit Details</button>
            </div>
            <div id="submit-state-certification" class="hidden">
              <button type="submit" id="submit-state-certification-button" class="submit dropshadow">Submit Changes</button>
              <label id="cancel-close" class="link pd-blue-text"><strong>CANCEL</strong></label>
            </div>
          </div>
        </div>
      </div>
    </form>

    <form method="post" class="profile-form user-cc-info">
      <script>
      // HELPER FUNCTIONS
      $(document).ready(function() {
        $('#edit-cc-info button#edit-cc-info-button').click(function() {
          event.preventDefault();
          $('#edit-cc-info').addClass('hidden');
          $('div#submit-cc-info').removeClass('hidden');
          $('div#cc-info').slideToggle();
        });
        $('#submit-cc-info label#cancel-close').click(function() {
          $('#edit-cc-info').removeClass('hidden');
          $('div#submit-cc-info').addClass('hidden');
          $('div#cc-info').slideToggle();
        });
        $('#submit-cc-info button#submit-cc-info-button').click(function() {
          event.preventDefault();
          console.log('user-cc-info submitted');
          $('form.user-cc-info .form-control').removeClass('error');

            var emptyFields = $('form.user-cc-info .form-control').filter(function() {
              return $(this).val() === "";
            }).length;

            if (emptyFields === 0) {
              $('#edit-cc-info').removeClass('hidden');
              $('div#submit-cc-info').addClass('hidden');
              $('div#cc-info').slideToggle();
            } else {
              $('form.user-cc-info .form-control').each(function() {
                if( $(this).val().length === 0 ) {
                  $(this).addClass('error');
                }
              });
            }
          });
      });
      </script>
      <div class="row account-card">
        <div class="col-md-10 user-cc-info">
          <h6><strong>State Approved Certification Registration</strong></h6>
          <div id="cc-info" style="display: none;">
            <div class="form-group form-row">
              <div class="col">
                <label for="first_name">Cardholder First Name:</label>
                <input class="form-control" type="text" id="first_name" name="first_name" value="jay">
              </div>
            </div>

            <div class="form-group form-row">
              <div class="col">
                <label for="last_name">Cardholder Last Name:</label>
                <input class="form-control" type="text" id="last_name" name="last_name" value="softye">
              </div>
            </div>

            <div class="form-group form-row">
              <div class="col">
                <label for="address">Billing Address:</label>
                <input class="form-control" type="text" id="address" name="address" value="" placeholder="Street Address">
              </div>
            </div>
            <div class="form-group form-row">
              <div class="col">
                <input class="form-control" type="text" id="city" name="city" value="" placeholder="City">
              </div>
              <div class="col">
                <select id="state" name="state" class="form-control" autocomplete="off">
                  <option value="">State</option>
                  <option value="AL">Alabama</option>
                  <option value="AK">Alaska</option>
                  <option value="AZ">Arizona</option>
                  <option value="AR">Arkansas</option>
                  <option value="CA">California</option>
                  <option value="CO">Colorado</option>
                  <option value="CT">Connecticut</option>
                  <option value="DE">Delaware</option>
                  <option value="DC">District of Columbia</option>
                  <option value="FL">Florida</option>
                  <option value="GA">Georgia</option>
                  <option value="HI">Hawaii</option>
                  <option value="ID">Idaho</option>
                  <option value="IL">Illinois</option>
                  <option value="IN">Indiana</option>
                  <option value="IA">Iowa</option>
                  <option value="KS">Kansas</option>
                  <option value="KY">Kentucky</option>
                  <option value="LA">Louisiana</option>
                  <option value="ME">Maine</option>
                  <option value="MD">Maryland</option>
                  <option value="MA">Massachusetts</option>
                  <option value="MI">Michigan</option>
                  <option value="MN">Minnesota</option>
                  <option value="MS">Mississippi</option>
                  <option value="MO">Missouri</option>
                  <option value="MT">Montana</option>
                  <option value="NE">Nebraska</option>
                  <option value="NV">Nevada</option>
                  <option value="NH">New Hampshire</option>
                  <option value="NJ">New Jersey</option>
                  <option value="NM">New Mexico</option>
                  <option value="NY" selected="">New York</option>
                  <option value="NC">North Carolina</option>
                  <option value="ND">North Dakota</option>
                  <option value="OH">Ohio</option>
                  <option value="OK">Oklahoma</option>
                  <option value="OR">Oregon</option>
                  <option value="PA">Pennsylvania</option>
                  <option value="RI">Rhode Island</option>
                  <option value="SC">South Carolina</option>
                  <option value="SD">South Dakota</option>
                  <option value="TN">Tennessee</option>
                  <option value="TX">Texas</option>
                  <option value="UT">Utah</option>
                  <option value="VT">Vermont</option>
                  <option value="VA">Virginia</option>
                  <option value="WA">Washington</option>
                  <option value="WV">West Virginia</option>
                  <option value="WI">Wisconsin</option>
                  <option value="WY">Wyoming</option>
                </select>
              </div>
              <div class="col">
                <input class="form-control" type="text" id="zipcode" name="zipcode" value="11730" placeholder="Zip Code">
              </div>
            </div>
            <div class="form-group form-row">
              <div class="col">
                <label for="cardnumber">Card Number:</label>
                <input class="form-control" type="text" id="cardnumber" name="cardnumber" value="">
              </div>
            </div>
            <div class="form-group form-row">
              <div class="col">
                <label for="expmonth">Expiration Date:</label>
                <div class="form-row">
                  <div class="col">
                    <select class="form-control" name="expmonth" id="expmonth" placeholder="Month">
                      <option value="01">01</option>
                      <option value="02">02</option>
                      <option value="03">03</option>
                      <option value="04">04</option>
                      <option value="05">05</option>
                      <option value="06">06</option>
                      <option value="07">07</option>
                      <option value="08">08</option>
                      <option value="09">09</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                    </select>
                  </div>
                  <div class="col">
                    <select class="form-control" name="expyear" id="expyear" placeholder="Year">
                      <option value="2019">2019</option>
                      <option value="2020">2020</option>
                      <option value="2021">2021</option>
                      <option value="2022">2022</option>
                      <option value="2023">2023</option>
                      <option value="2024">2024</option>
                      <option value="2025">2025</option>
                      <option value="2026">2026</option>
                      <option value="2027">2027</option>
                      <option value="2028">2028</option>
                      <option value="2029">2029</option>
                      <option value="2030">2030</option>
                      <option value="2031">2031</option>
                      <option value="2032">2032</option>
                      <option value="2033">2033</option>
                      <option value="2034">2034</option>
                      <option value="2035">2035</option>
                      <option value="2036">2036</option>
                      <option value="2037">2037</option>
                      <option value="2038">2038</option>
                      <option value="2039">2039</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group form-row">
              <label for="cvv">Security Code (CVV):</label>
              <input class="form-control" type="text" id="cvv" name="cvv" value="">
            </div>

            <div class="form-group form-row promo-code-group">
              <label class="col-md-3 col-sm-3 col-form-label text-right "><strong>Enter a discount code:</strong></label>
              <input class="form-control" type="text" id="promo_code" name="promo_code" value="">
            </div>

            <div class="form-group form-row">
              <div class="form-check">
                <label class="form-check-label">
                <input type="checkbox" id="recurring" class="form-check-input" name="recurring" value="1" checked="">
                  <strong>Enable automatic renewal</strong>
                  <br />
                  <span class="small">Your credit card will be automatically charged at the end of your yearly subscription. This will lock in any discounts you have on your individual account, otherwise you will be subject to full price on renewal.</span>
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-2 user-cc-info">
          <div class="form-group">
            <div id="edit-cc-info">
              <button type="button" id="edit-cc-info-button" class="edit dropshadow">Edit Details</button>
            </div>
            <div id="submit-cc-info" class="hidden">
              <button type="submit" id="submit-cc-info-button" class="submit dropshadow">Submit Changes</button>
              <label id="cancel-close" class="link pd-blue-text"><strong>CANCEL</strong></label>
            </div>
          </div>
        </div>
      </div>
    </form>

</div>


  <?php include 'digital-online-certifications.php';?>
</section>

<?php include 'footer.php';?>
