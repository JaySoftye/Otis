<div id="accountInfo" class="row align-items-start user-dashboard-content leaderboard-is-active tab">
  <div class="row user-dashboard-container-titles top">
    <div class="col-md">My Account</div>
  </div>

  <div class="row user-dashboard-account-info">

    <div class="col-md">
      <form class="tile user-info-container">
        <a class="edit activated">Edit Profile</a>
        <a class="is-editing">CANCEL</a>
        <div class="form-group file-input">
          <input type="file" name="imagefile" class="form-control form-control-file" disabled="disabled">
          <div class="profile-photo" style="background-image: url('https://otis.teq.com/uploads/avatars/47126.gif');"></div>
        </div>
        <div class="form-group">
          <label for="first_name">First Name</label>
          <input class="form-control is-required" type="text" id="first_name" name="first_name" value="Jay" placeholder="" disabled="disabled">
        </div>
        <div class="form-group">
          <label for="last_name">Last Name</label>
          <input class="form-control is-required error" type="text" id="last_name" name="last_name" value="" placeholder="" disabled="disabled">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input class="form-control is-required" type="text" id="email" name="email" value="jay@teq.com" placeholder="email" disabled="disabled">
        </div>
        <div class="form-group">
          <label for="phone">Phone</label>
          <input class="form-control" type="tel" id="phone" name="phone" value="6314567891" placeholder="phone" disabled="disabled">
        </div>
        <div class="form-group">
          <label for="groupname">School Name</label>
          <input class="form-control" type="text" id="groupname" name="groupname" value="Huntington" placeholder="school name" disabled="disabled">
        </div>
        <div class="form-group">
          <label for="state">State</label>
          <select id="state" name="state" class="form-control is-required" autocomplete="off"  disabled="disabled">
            <option value="" disabled="disabled">Select State</option>
          </select>
        </div>
        <div class="form-group">
          <label for="zipcode">Zip</label>
          <input class="form-control" type="text" id="zipcode" name="zipcode" value="11746" placeholder="zip code" disabled="disabled">
        </div>
        <div class="form-group">
          <label for="zipcode">Country</label>
          <select id="country" name="country" class="form-control is-required" autocomplete="off" disabled="disabled">
            <option value="US">United States</option>
          </select>
        </div>
        <div class="form-group">
          <button type="submit" class="form-control submit" disabled="disabled">SUBMIT</button>
        </div>
      </form>
    </div>

    <div class="col-md">
      <div class="tile is-important">
        <a class="edit renew">Renew</a>
        <img src="./assets/images/otis-dashboard-course-license.svg" />
        <p class="course-title white-text">License Information</p>
        <p class="course-title white-text">1,585 days <br /><small class="white-text h6">until Account Expires<br />Friday October, 31 2025</small></p>
      </div>
      <form class="tile user-info-container">
        <a class="edit activated">Edit Notifications</a>
        <a class="is-editing">CANCEL</a>

        <div class="form-group form-switch">
          <div class="switch">
            <span>Email me when I register for a course</span>
            <input type="checkbox" class="form-control" id="register_course" disabled />
            <label for="register_course"></label>
          </div>
        </div>
        <div class="form-group form-switch">
          <div class="switch">
            <span>Email me a reminder the day before a course</span>
            <input type="checkbox" class="form-control" id="day_before_course" disabled />
            <label for="day_before_course"></label>
          </div>
        </div>
        <div class="form-group form-switch">
          <div class="switch">
            <span>Email me a reminder the week before a course</span>
            <input type="checkbox" class="form-control" id="week_before_course" disabled />
            <label for="week_before_course"></label>
          </div>
        </div>
        <div class="form-group form-switch">
          <div class="switch">
            <span>Email me with News about OTIS</span>
            <input type="checkbox" class="form-control" id="receive_news" disabled />
            <label for="receive_news"></label>
          </div>
        </div>
        <div class="form-group form-switch">
          <div class="switch">
            <span>Email me with Sales / Marketing promotions</span>
            <input type="checkbox" class="form-control" id="receive_marketing" disabled />
            <label for="receive_marketing"></label>
          </div>
        </div>
        <div class="form-group form-switch">
          <div class="switch">
            <span>Email me when someone replies to one of my Discussion posts</span>
            <input type="checkbox" class="form-control" id="receive_replies" disabled />
            <label for="receive_replies"></label>
          </div>
        </div>
        <div class="form-group">
          <button type="submit" class="form-control submit" disabled="disabled">SUBMIT</button>
        </div>
      </form>
    </div>

    <div class="col-md">
      <form class="tile user-info-container">
        <a class="edit activated">Edit Password</a>
        <a class="is-editing">CANCEL</a>
        <div class="form-group form-content-hidden">
          <p class="form-control content">Password Requirements:</p>
          <ul>
            <li>Must be at least 8 characters in length.</li>
            <li>Must contain at least one uppercase letter.</li>
            <li>Must contain at least one number.</li>
            <li>Do not use any spaces.</li>
          </ul>
        </div>
        <div class="form-group form-content-hidden">
          <label for="first_name">New Password</label>
          <input class="form-control is-required" type="text" id="password" name="password" value="" placeholder="" disabled="disabled">
        </div>
        <div class="form-group form-content-hidden">
          <label for="first_name">Confirm Password</label>
          <input class="form-control is-required" type="text" id="password2" name="password2" value="" placeholder="" disabled="disabled">
        </div>
        <div class="form-group">
          <button type="submit" class="form-control submit" disabled="disabled">SUBMIT</button>
        </div>
      </form>
      <form class="tile user-info-container">
        <a class="edit activated">Edit Security Questions</a>
        <a class="is-editing">CANCEL</a>
        <div class="form-group form-content-hidden multiple-input">
          <select id="SQ1" name="SQ1" class="form-control is-required" autocomplete="off" disabled="disabled">
            <option value="1" selected="selected" disabled="disabled" class="red-txt">What was your childhood nickname?</option>
            <option value="2" class="red-txt" disabled="disabled">What is the name of your favorite childhood friend?</option>
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
          <input class="form-control" type="text" id="SA1" name="SA1" value="" placeholder="Security Question Answer" disabled="disabled">
        </div>
        <div class="form-group form-content-hidden multiple-input">
          <select id="SQ2" name="SQ2" class="form-control is-required" autocomplete="off" disabled="disabled">
            <option value="1" selected="selected" disabled="disabled" class="red-txt">What was your childhood nickname?</option>
            <option value="2" class="red-txt" disabled="disabled">What is the name of your favorite childhood friend?</option>
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
          <input class="form-control" type="text" id="SA2" name="SA2" value="" placeholder="Security Question Answer" disabled="disabled">
        </div>
        <div class="form-group">
          <button type="submit" class="form-control submit" disabled="disabled">SUBMIT</button>
        </div>
      </form>
      <form class="tile user-info-container">
        <a class="edit activated">State Approved Certification Registration</a>
        <a class="is-editing">CANCEL</a>
        <div class="form-group form-content-hidden">
          <p class="form-control content">The information you provide here is required by the State of for you to receive state-approved PD hours.</p>
        </div>
        <div class="form-group form-content-hidden multiple-input">
          <input class="form-control is-disabled" type="text" id="" name="" value="123456789" disabled="disabled">
        </div>
      </form>
      <form class="tile user-info-container">
        <a class="edit payment-options activated">Payment Options</a>
        <a class="is-editing">CANCEL</a>
        <div class="form-group form-content-hidden">
          <p class="form-control content cc-payment-title">CREDIT CARD PAYMENT OPTION</p>
        </div>
        <div class="form-group form-content-hidden">
          <label for="cc_name">Name on card</label>
          <input class="form-control is-required" type="text" id="cc_name" name="cc_name" value="" placeholder="" disabled="disabled">
        </div>
        <div class="form-group form-content-hidden">
          <label for="cc_number">Credit Number</label>
          <input class="form-control is-required" type="text" id="cc_number" name="cc_number" value="" placeholder="" disabled="disabled">
        </div>
        <div class="form-group form-content-hidden cc_fields">
          <input class="form-control cc_month is-required" type="text" id="cc_exp_date_mm" name="cc_exp_date" value="" placeholder="" maxlength='2' disabled="disabled">
          <span>/</span>
          <input class="form-control is-required" type="text" id="cc_exp_date_yyyy" name="cc_exp_date" value="" placeholder="" maxlength='4' disabled="disabled">
          <label for="cc_exp_date">Exp. Date (MM/YYYY)</label>
        </div>
        <div class="form-group form-content-hidden">
          <label for="cc_number">Security Code (CVV)</label>
          <input class="form-control is-required" type="text" id="cc_cvv" name="cc_cvv" value="" placeholder="" disabled="disabled">
        </div>
        <div class="form-group form-content-hidden">
          <label for="cc_zip">Billing Zip</label>
          <input class="form-control is-required" type="text" id="cc_zip" name="cc_zip" value="" placeholder="" disabled="disabled" maxlength='5'>
        </div>
        <div class="form-group">
          <button type="submit" class="form-control submit" disabled="disabled">SUBMIT</button>
        </div>
      </form>
      <form class="tile user-info-container">
        <a class="edit order-history activated">Order History</a>
        <a class="is-editing">CANCEL</a>
        <div class="form-group form-content-hidden">
          <p class="form-control content">Previous Orders: </p>
        </div>
        <div class="form-group form-content-hidden">
          <div class="form-control order">
            <a href>Teq DTC: Google Educator Basics- 2020</a>
          </div>
        </div>
      </form>
    </div>

  </div>
</div>
