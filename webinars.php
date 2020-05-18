<?php
  $logged_in = False;
  $default_background_image_url='assets/images/default-course-background_lg.jpg';
?>

<?php include 'header.php';?>
  <?php include 'askotis.php';?>

<section class="main-content thin-search-bar course-details">
  <script>
$(document).ready(function(){
  $('.course-card-container').on('click', function(e) {
    $('.course-card-container').not(this).hide(100);
    $('#demoform').show(100);
  });
  $('.backBTN').on('click', function(e) {
    $('.course-card-container').show(100);
    $('#demoform').hide(100);
  });

});
</script>
  <div class="container-fluid" style="padding-bottom: 150px;">
    <div class="row d-flex justify-content-center">
      <div class="text-center col-sm-6">
        <img style="width: inherit;" src="./assets/images/webinars-virtual-demo-icon.png" />
      </div>
    </div>
    <div class="row d-flex justify-content-center">
      <div class="text-center col-sm-12">
        <h3>Join a Virtual STEM Demo hosted by our very own <strong>Teq Squad</strong> – former classroom teachers and your current edtech experts. Choose from any of our <strong>STEM Demos below and use the register link</strong> to save your spot!</h3>
      </div>
    </div>
    <div class="row d-flex justify-content-center padding">
      <div class="col-md-3 course-card-container" style="display:flex;cursor:pointer;">
        <div class="card course-card">
          <div class="card-header product-familiarization">
            <ul class="nav course-details">
              <li class="thin-heading">MAY 19</li>
            </ul>
          </div>
          <div class="card-body">
            <h3>Elementary STEM</h3>
            <h6 class="thin-heading"><strong>Tuesday, 10:00am EST</strong></h6>
            <p><small>Learn about Cubelets, Dash robots, Osmo, Littlebits, and more great STEM tools for elementary project-based learning activities.</small></p>
          </div>
          <div class="card-footer">
            <img src="./assets/images/webinars-registar-course-icon.gif" />
          </div>
        </div>
      </div>
      <div class="col-md-3 course-card-container" style="display:flex;cursor:pointer;">
        <div class="card course-card">
          <div class="card-header product-familiarization">
            <ul class="nav course-details">
              <li class="thin-heading">MAY 19</li>
            </ul>
          </div>
          <div class="card-body">
            <h3>MakerBot</h3>
            <h6 class="thin-heading"><strong>Tuesday, 1:00pm EST</strong></h6>
            <p><small>Learn about Makerbot’s line of 3D printers including the Method and new Sketch printer.</small></p>
          </div>
          <div class="card-footer">
            <img src="./assets/images/webinars-registar-course-icon.gif" />
          </div>
        </div>
      </div>
      <div class="col-md-3 course-card-container" style="display:flex;cursor:pointer;">
        <div class="card course-card">
          <div class="card-header frameworks-resources">
            <ul class="nav course-details">
              <li class="thin-heading">MAY 21</li>
            </ul>
          </div>
          <div class="card-body">
            <h3>SMART MX</h3>
            <h6 class="thin-heading"><strong>Thursday, 10:00am EST</strong></h6>
            <p><small>Get a complete review of the features and benefits of the SMART Board MX interactive display.</small></p>
          </div>
          <div class="card-footer">
            <img src="./assets/images/webinars-registar-course-icon.gif" />
          </div>
        </div>
      </div>
      <div class="col-md-3 course-card-container" style="display:flex;cursor:pointer;">
        <div class="card course-card">
          <div class="card-header frameworks-resources">
            <ul class="nav course-details">
              <li class="thin-heading">MAY 21</li>
            </ul>
          </div>
          <div class="card-body">
            <h3>SMART 6000S</h3>
            <h6 class="thin-heading"><strong>Thursday, 1:00pm EST</strong></h6>
            <p><small>The New SMART Board 6000S is an improved version of the most popular SMART Board IFP for education. Learn about new Google integration and ToolSense – only available with SMART.</small></p>
          </div>
          <div class="card-footer">
            <img src="./assets/images/webinars-registar-course-icon.gif" />
          </div>
        </div>
      </div>
      <div class="col-md-3 course-card-container" style="display:flex;cursor:pointer;">
        <div class="card course-card">
          <div class="card-header product-familiarization">
            <ul class="nav course-details">
              <li class="thin-heading">MAY 26</li>
            </ul>
          </div>
          <div class="card-body">
            <h3>MS/HS STEM</h3>
            <h6 class="thin-heading"><strong>Tuesday, 10:00am EST</strong></h6>
            <p><small>Learn about Ozobots, Cue robots, pi-top, and more great STEM tools for high school project-based learning activities.</small></p>
          </div>
          <div class="card-footer">
            <img src="./assets/images/webinars-registar-course-icon.gif" />
          </div>
        </div>
      </div>
      <div class="col-md-3 course-card-container" style="display:flex;cursor:pointer;">
        <div class="card course-card">
          <div class="card-header product-familiarization">
            <ul class="nav course-details">
              <li class="thin-heading">MAY 26</li>
            </ul>
          </div>
          <div class="card-body">
            <h3>Ultimaker</h3>
            <h6 class="thin-heading"><strong>Tuesday, 1:00pm EST</strong></h6>
            <p><small>Ultimaker has a new line-up of printers for 2020 including he s3. Learn about the benefits of Ultimaker printers and how they fit into STEM learning.</small></p>
          </div>
          <div class="card-footer">
            <img src="./assets/images/webinars-registar-course-icon.gif" />
          </div>
        </div>
      </div>
      <div class="col-md-3 course-card-container" style="display:flex;cursor:pointer;">
        <div class="card course-card">
          <div class="card-header frameworks-resources">
            <ul class="nav course-details">
              <li class="thin-heading">MAY 28</li>
            </ul>
          </div>
          <div class="card-body">
            <h3>SMART 6000S</h3>
            <h6 class="thin-heading"><strong>Thursday 10:00am EST</strong></h6>
            <p><small>The New SMART Board 6000S is an improved version of the most popular SMART Board IFP for education. Learn about new Google integration and ToolSense – only available with SMART.</small></p>
          </div>
          <div class="card-footer">
            <img src="./assets/images/webinars-registar-course-icon.gif" />
          </div>
        </div>
      </div>
      <div class="col-md-3 course-card-container" style="display:flex;cursor:pointer;">
        <div class="card course-card">
          <div class="card-header product-familiarization">
            <ul class="nav course-details">
              <li class="thin-heading">MAY 28</li>
            </ul>
          </div>
          <div class="card-body">
            <h3>Elementary STEM</h3>
            <h6 class="thin-heading"><strong>Thursday, 1:00pm EST</strong></h6>
            <p><small>Learn about Cubelets, Dash robots, Osmo, Littlebits, and more great STEM tools for elementary project-based learning activities.</small></p>
          </div>
          <div class="card-footer">
            <img src="./assets/images/webinars-registar-course-icon.gif" />
          </div>
        </div>
      </div>
      <div class="col-md-9" id="demoform" style="display:none;margin-top: 3rem;">
        <h4 class="thin-heading"><strong>Register</strong> for a course using the form below or you can go back to view all course descriptions by <span class="bold backBTN"><u>clicking here</u></span>.</h4>
        <hr />
        <!--[if lte IE 8]>
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
        <![endif]-->
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
        <script>
          hbspt.forms.create({
        	portalId: "182596",
        	formId: "00641ac9-9648-4d4d-9c23-ee610162b07e"
        });
        </script>
      </div>
    </div>
  </div>

  <div class="container-fluid" style="background-color: ffffff; background-image:
    linear-gradient(to bottom,#ffffff,#eceeef 20%,#eceeef 20%); padding-bottom: 50px;">
    <div class="text-center">
      <img src="./assets/images/webinars-schedule-icon.png" />
    </div>
    <div class="row" style="border: 1px white; border-radius: 10px; background-color: white;">
    <div class="col-lg-6 col-md-12 col-sm-12" style="padding: 50px;">
      <h2 class="bold">You can now request a custom webinar for your team through OTIS for educators!</h2>
      <h4>Pick a product from our line-up, grab 5 or more of your colleagues, and we'll give you a personalized demo geared around your interests.<br><br>
        <span class="bold">Request your webinar today!</span><br><br>A Teq Rep will contact you about scheduling and content specifics.
      </h4>
      <h6 class="bold">Book your webinar today!</h6>
    </div>
    <div style="margin-top: 25px;" class="col-lg-6 col-md-12 col-sm-12">
      <h5 class="bold" style="padding-top: 10px;">Schedule your custom webinar</h5>
      <form action="/webinars/save-requested-webinar" method="POST">
        <div class="form-group">
          <div class="input-group" style="margin-bottom: 15px;">
            <input type="text" class="form-control" placeholder="First Name" name="first_name" style="border-radius: 7px;" required="">
            <span style="visibility: hidden;" class="input-group-addon">--</span>
            <input type="text" class="form-control" placeholder="Last Name" name="last_name" style="border-radius: 7px;" required="">
          </div>
          <div class="input-group" style="margin-bottom: 15px;">
            <input type="email" class="form-control" placeholder="Email Address" name="email" style="border-radius: 7px;" required="">
            <span style="visibility: hidden;" class="input-group-addon">--</span>
            <input type="text" class="form-control" placeholder="School" name="school" style="border-radius: 7px;" required="">
          </div>
          <div class="input-group" style="margin-bottom: 15px;">
            <input type="text" class="form-control" placeholder="1-(XXX) XXX-XXXX" name="phone" style="border-radius: 7px;" required="">
            <span style="visibility: hidden;" class="input-group-addon">--</span>
            <select class="form-control" style="border-radius: 7px; " name="state" required="">
              <option value="" disabled="" selected="" style="color: lightgrey;">Your State</option>
              <option value="AL">Alabama</option>
              <option value="AK">Alaska</option>
              <option value="AZ">Arizona</option>
              <option value="AR">Arkansas</option>
              <option value="CA">California</option>
              <option value="CO">Colorado</option>
              <option value="CT">Connecticut</option>
              <option value="DE">Delaware</option>
              <option value="DC">District Of Columbia</option>
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
              <option value="NY">New York</option>
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
          <div class="input-group" style="margin-bottom: 15px;">
            <input type="text" class="form-control" placeholder="Title" name="title" style="border-radius: 7px;" required="">
            <span style="visibility: hidden;" class="input-group-addon">--</span>
            <select class="form-control" style="border-radius: 7px;" name="product" required="">
              <option value="" disabled="" selected="" style="color: lightgrey;">Pick The Product</option>
              <option value="SMART Board 7000 Series">SMART Board 7000 Series</option>
              <option value="SMART Board 6000 Series">SMART Board 6000 Series</option>
              <option value="SMART Board MX Series">SMART Board MX Series</option>
              <option value="Ultimaker 3D Printers">Ultimaker 3D Printers</option>
              <option value="Makerbot 3D Printers">Makerbot 3D Printers</option>
              <option value="Sphero">Sphero</option>
              <option value="Wonder Workshop">Wonder Workshop</option>
              <option value="KIBO">KIBO</option>
              <option value="Littlebits">Littlebits</option>
              <option value="Osmo">Osmo</option>
              <option value="Bloxels">Bloxels</option>
              <option value="Cubelets">Cubelets</option>
              <option value="MERGE">MERGE</option>
              <option value="UBTECH">UBTECH</option>
              <option value="Robotis">Robotis</option>
              <option value="pi-top">pi-top</option>
              <option value="SAM Labs">SAM Labs</option>
              <option value="Veative">Veative</option>
            </select>
          </div>
          <div class="input-group" style="margin-bottom: 15px;">
            <input type="text" onchange="gethours();" placeholder="Pick Your Day" class="form-control hasDatepicker" id="datepicker" name="date" style="border-radius: 5px;" autocomplete="off" required="">
            <textarea name="comments" style="width: 49.5%; border-radius: 7px; margin-left: 10px; height: 95px; " placeholder="Comments..."></textarea>
          </div>
          <div class="input-group" style="margin-bottom: 15px;">
            <select id="timeselect" class="form-control" style="border-radius: 7px; margin-top: -55px; margin-right: 51%;" name="time" required="">
              <option disabled="" selected="" style="color: lightgrey;">Pick a day – then select a time</option>
            </select>
            <!--<span style="visibility: hidden;" class="input-group-addon">--</span>
            <select class="form-control" style="border-radius: 7px; visibility: hidden;" name="producthidden">
            <option>this select box is hidden and just a placeholder for styling</option>
            </select>-->
          </div>
          <div id="g-recaptcha-webinar" class="g-recaptcha" data-sitekey="6LfNneUUAAAAAJ0t9ghAbimL3RF--cAHac1W6MJA"><div style="width: 304px; height: 78px;"><div><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LfNneUUAAAAAJ0t9ghAbimL3RF--cAHac1W6MJA&amp;co=aHR0cHM6Ly9vdGlzLnRlcS5jb206NDQz&amp;hl=en&amp;v=JPZ52lNx97aD96bjM7KaA0bo&amp;size=normal&amp;cb=h6aavflpk4su" width="304" height="78" role="presentation" name="a-yg5j6g345asl" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div>
            <button id="sub-btn-webinar" type="submit" class="btn btn-primary">Submit</button>
          </div></form>
        </div>
      </div>
    </div>

  <?php include 'digital-online-certifications.php';?>
</section>

<?php include 'footer.php';?>
