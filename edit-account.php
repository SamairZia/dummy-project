<?php include 'inc/header.php' ?>

<section class="dash-sec-1">
  <div class="container">
    <div class="row">
      <div class="col-sm-3 col-md-3 col-lg-3">
        <?php include 'inc/dash-sidebar.php' ?>
      </div>
      <div class="col-sm-9 col-md-9 col-lg-9">
        <div class="dashboard-right-wrapper">
          <h4 class="dash-main-heading">Account</h4>
          <h5 class="dash-subheading">Your Personal Details</h5>
          <hr>
          <form>
            <div class="edit-account-form-wrap">
              <div class="single-field row">
                <div class="col-sm-3 col-md-2 col-lg-2">
                  <label>First Name</label>
                </div>
                <div class="col-sm-10 col-md-10 col-lg-10">
                  <input type="text" placeholder="Full Name">
                </div>
              </div>
              <div class="single-field row">
                <div class="col-sm-3 col-md-2 col-lg-2">
                  <label>Email</label>
                </div>
                <div class="col-sm-10 col-md-10 col-lg-10">
                  <input type="email" placeholder="Email">
                </div>
              </div>
              <div class="single-field row">
                <div class="col-sm-3 col-md-2 col-lg-2">
                  <label>Phone Number</label>
                </div>
                <div class="col-sm-10 col-md-10 col-lg-10">
                  <input type="text" placeholder="Phone Number">
                </div>
              </div>
              <div class="single-field row">
                <div class="col-sm-3 col-md-2 col-lg-2">
                  <label>Password</label>
                </div>
                <div class="col-sm-10 col-md-10 col-lg-10">
                  <input type="password" placeholder="Enter Password">
                </div>
              </div>
              <div class="single-field row">
                <div class="col-sm-3 col-md-2 col-lg-2">
                  <label>Confirm Password</label>
                </div>
                <div class="col-sm-10 col-md-10 col-lg-10">
                  <input type="password" placeholder="Confirm Password">
                </div>
              </div>
              <div class="row">
                <div class="col-12 text-right">
                  <button class="btn-continue">Continue</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>


<?php include 'inc/footer.php' ?>