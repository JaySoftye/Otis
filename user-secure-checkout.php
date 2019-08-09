<?php include 'header.php';?>
  <?php include 'login-window.php';?>

<section class="main-content light-grey-bg">
  <div class="container-fluid user-registration individual">

    <?php include 'convince-your-admin.php';?>

    <div class="row">
      <div class="col user-registration">

        <form action="" method="post" class="registration-form checkout-form">

        <section class="registration-form-container">
          <h2 class="large-heading text-center bold">Secure <img src="assets/images/secure-checkout-icon.svg" style="height: 3rem;" /> Checkout</h2>
        </section>

        <section class="registration-form-container">
          <div class="price-container">
            <h2 class="extra-large-heading no-margin text-center"><sup class="small-heading">$</sup>99<sup class="small-heading">.00</sup></h2>
            <p class="text-center pink-text">Less than $9 per month</p>
          </div>
          <div class="form-group row">
            <input class="form-control error" type="text" id="first_name" name="first_name" value="" placeholder="Cardholder First Name">
            <label class="red-text">Required</label>
          </div>
          <div class="form-group row">
            <input class="form-control" type="text" id="last_name" name="last_name" value="" placeholder="Cardholder Last Name">
          </div>
          <div class="form-group row">
            <input class="form-control" type="text" id="address" name="address" value="" placeholder="Street Address">
            <div class="col">
              <input class="form-control" type="text" id="city" name="city" value="" placeholder="City">
            </div>
            <div class="col">
              <select id="state" name="state" class="form-control" autocomplete="off">
                <option value="" select="" disabled="disabled">State</option>
                <option value="NY">New York</option>
              </select>
            </div>
            <div class="col">
              <input class="form-control" type="text" id="zipcode" name="zipcode" value="" placeholder="Zip Code">
            </div>
          </div>
          <div class="form-group row">
            <input class="form-control" type="text" id="cardnumber" name="cardnumber" value="" placeholder="Card Number">
          </div>
          <div class="form-group row">
            <div class="col ">
              <select class="form-control" name="expmonth" id="expmonth">
                <option value="" disabled="disabled" selected="selected">Month</option>
                <option value="01">01</option>
              </select>
            </div>
            <div class="col">
              <select class="form-control" name="expyear" id="expyear">
                <option value="" disabled="disabled" selected="selected">Year</option>
                <option value="2019">2019</option>
              </select>
            </div>
            <div class="col">
              <input class="form-control" type="text" id="cvv" name="cvv" value="" placeholder="Security Code (CVV)">
            </div>
          </div>
          <div class="form-group row">
            <input class="form-control" type="text" id="promo_code" name="promo_code" value="" placeholder="Have a Promo Code?">
          </div>
          <div class="form-group row">
            <div class="form-check padding-sm">
              <label class="form-check-label">
                <input type="checkbox" id="recurring" class="form-check-input" name="recurring" value="1" checked="">Enable automatic renewal
              </label>
              <label class="small">Your credit card will be automatically charged at the end of your yearly subscription. This will lock in any discounts you have on your individual account, otherwise you will be subject to full price on renewal.</label>
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
