<?php include 'header.php';?>
  <?php include 'askotis.php';?>
    <?php include 'login-window.php';?>

<section class="main-content light-grey-bg">
  <div class="container-fluid user-registration group-code">

    <div class="row">
      <div class="col user-registration">
      <h1 class="text-center margin-auto bold">Group, District or Institutional Plans</h1>
      <h5>Your group plan membership includes full access to <a href="https://otis.teq.com/" title="https://otis.teq.com/" class="black-text"><u>otis.teq.com</u></a>, course management, profile activity, certification tracks, and more! To gain immediate access please complete the form below. Please note a <strong>Group Code is required</strong> for all group, district or institutional plan sign ups. If you have not been supplied one please contact your administrator or <a class="black-text" href="#"><u>contact us</u></a>.</h5>
    </div>
    </div>

    <div class="row">
      <div class="col user-registration">

        <form action="" method="post" class="registration-form">

        <section class="registration-form-container">
          <div class="form-group row">
            <input class="form-control error" type="text" id="first_name" name="first_name" value="" placeholder="First Name">
            <label class="red-text">Required</label>
          </div>
          <div class="form-group row">
            <input class="form-control" type="text" id="last_name" name="last_name" value="" placeholder="Last Name">
          </div>
          <div class="form-group row">
            <input class="form-control" type="text" id="email" name="email" value="" placeholder="Email">
          </div>
          <div class="form-group row">
            <input class="form-control" type="text" id="confirm_email" name="confirm_email" value="" placeholder="Confirm Email">
          </div>
          <div class="form-group row">
            <input class="form-control" type="text" id="phone" name="phone" value="" placeholder="Phone">
          </div>
          <div class="form-group row">
            <select id="marketing_title_id" name="marketing_title_id" class="form-control" autocomplete="off" >
              <option value="" selected="" disabled="disabled">Select your title/role</option>
              <option value="9" >Assistant Principal</option>
            </select>
          </div>
          <div class="form-group row">
            <input class="form-control" type="text" id="groupname" name="groupname" value="" placeholder="School Name">
          </div>
        </section>
        <section class="registration-form-container">
          <div class="form-group row">
            <input class="form-control" type="text" id="groupcode" name="groupcode" value="" placeholder="Group Code">
            <label>Provided by your district or school administrator</label>
          </div>
        </section>
        <section class="registration-form-container">
          <div class="form-group row">
            <input class="form-control" type="text" id="zipcode" name="zipcode" value="" placeholder="Zip">
          </div>
          <div class="form-group row">
            <select id="country" name="country" class="form-control" autocomplete="off">
              <option value="" selected="" disabled="disabled">Select Country</option>
              <option value="US">United States</option>
            </select>
          </div>
          <div class="form-group row">
            <select id="state" name="state" class="form-control" autocomplete="off">
              <option value="" select="" disable="disabled">Select State</option>
              <option value="MA">Massachusetts</option>
              <option value="NY">New York</option>
              <option value="PA">Pennsylvania</option>
              <option value="TX">Texas</option>
            </select>
            <label>* may require additional info for State Approved Certification</label>
          </div>
        </section>
        <section class="registration-form-container">
          <div class="form-group row">
            <input class="form-control" type="password" id="password" name="password" value="" placeholder="Password">
          </div>
          <div class="form-group row">
            <input class="form-control" type="password" id="password2" name="password2" value="" placeholder="Confirm Password">
          </div>
        </section>
        <section class="registration-form-container">
          <div class="form-group row">
            <select id="" name="" class="form-control" autocomplete="off">
              <option value="" select="" disable="disabled">Security Question One</option>
              <option value="">What was the name of the street where you grew up?</option>
            </select>
            <input class="form-control" type="text" id="" name="" value="" placeholder="Security Question Answer One">
          </div>
          <div class="form-group row">
            <select id="" name="" class="form-control" autocomplete="off">
              <option value="" select="" disable="disabled">Security Question Two</option>
              <option value="">What was your childhood nickname?</option>
            </select>
            <input class="form-control" type="text" id="" name="" value="" placeholder="Security Question Answer Two">
          </div>
        </section>
        <section class="registration-form-container">
          <div class="form-group row">
            <h5>Configure your email notifications below:</h5>
            <div class="form-check">
              <label class="form-check-label">
              <input type="checkbox" class="form-check-input" name="register_course" value="1">Email me when I register for a course</label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
              <input type="checkbox" class="form-check-input" name="day_before_course" value="1">Email me a reminder the day before a course</label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
              <input type="checkbox" class="form-check-input" name="receive_news" value="1">Email me with News about Opd</label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
              <input type="checkbox" class="form-check-input" name="receive_marketing" value="1">Email me with Sales / Marketing promotions</label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
              <input type="checkbox" class="form-check-input" name="receive_replies" value="1" checked="">Email me when someone replies to one of my Discussion posts</label>
            </div>
          </div>
          <hr />
          <div class="form-group row">
            <div class="form-check">
              <label class="form-check-label no-padding">
              <input class="form-check-input" type="checkbox" id="terms" name="terms"> I have read and agree to the <a href="/profile/terms" target="_blank"><strong><u>Terms</u></strong></a> and <a href="/profile/policy" target="_blank"><strong><u>Policies</u></strong></a>.</label>
            </div>
          </div>
          <div class="form-group row">
            <button type="submit" class="submit">SUBMIT</button>
          </div>
        </section>

        </form>

      </div>

    </div>

  </div>

  <?php include 'digital-online-certifications.php';?>
</section>

<?php include 'footer.php';?>
