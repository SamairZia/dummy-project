<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Beautytrend Korea</title>
  <link rel="icon" href="./images/favicon.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/responsive.css" />
  <!-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;900&display=swap" rel="stylesheet"> -->
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
</head>

<body>

  <section class="checkout-main-sec">
    <div class="checkout-left-wrap">
      <div class="checkout-left-inner-wrap">
        <a href="#!" class="checkout-logo">
          <img src="images/logo.png" class="img-fluid" alt="logo">
        </a>
        <div class="checkout-tabs-wrap">
          <nav>
            <div class="nav" id="nav-tab" role="tablist">
              <a class="ck-tab-link active" id="nav-info-tab" data-toggle="tab" href="#nav-info" role="tab" aria-controls="nav-info" aria-selected="true">Information</a>

              <a class="ck-tab-link" id="nav-shipping-tab" data-toggle="tab" href="#nav-shipping" role="tab" aria-controls="nav-shipping" aria-selected="false">Shipping</a>

              <!-- <a class="ck-tab-link" id="nav-payment-tab" data-toggle="tab" href="#nav-payment" role="tab" aria-controls="nav-payment" aria-selected="false">Payment</a> -->

            </div>
          </nav>
          <div class="tab-content checkout-tabs-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-info" role="tabpanel" aria-labelledby="nav-info-tab">
              <div class="tab-content-inner-wrap">
                <div class="cktab-head">
                  <h3>Contact information</h3>
                  <h4>Already have an account? <a href="#!">Log in</a></h4>
                </div>
                <div class="cktab-body row">
                  <div class="cktab-field-wrap col-sm-12">
                    <label>Email <span>*</span></label>
                    <input type="email" placeholder="Enter Email">
                  </div>
                  <h5 class="col-sm-12">Shipping address</h5>
                  <div class="cktab-field-wrap col-sm-6">
                    <label>First Name <span>*</span></label>
                    <input type="text" placeholder="First Name">
                  </div>
                  <div class="cktab-field-wrap col-sm-6">
                    <label>Last Name <span>*</span></label>
                    <input type="text" placeholder="Last Name">
                  </div>
                  <div class="cktab-field-wrap col-sm-12">
                    <label>Address <span>*</span></label>
                    <input type="text" placeholder="Address">
                  </div>
                  <div class="cktab-field-wrap col-sm-12">
                    <label>Appartment, Suite, etc</label>
                    <input type="text" placeholder="Appartment, Suite, etc">
                  </div>
                  <div class="cktab-field-wrap col-sm-12">
                    <label>Phone Number <span>*</span></label>
                    <input type="text" placeholder="Phone Number">
                  </div>
                  <div class="cktab-field-wrap col-sm-6">
                    <label>Country <span>*</span></label>
                    <select>
                      <option selected disabled>-- Select Country --</option>
                      <option>USA</option>
                      <option>Korea</option>
                      <option>Pakistan</option>
                      <option>UK</option>
                    </select>
                  </div>
                  <div class="cktab-field-wrap col-sm-6">
                    <label>City <span>*</span></label>
                    <select>
                      <option selected disabled>-- Select City --</option>
                      <option>New York</option>
                      <option>Seoul</option>
                      <option>Karachi</option>
                      <option>London</option>
                    </select>
                  </div>
                  <div class="cktab-btn-wrap col-sm-12">
                    <a href="#!" class="return-cart"><i class="fas fa-angle-left"></i> Return to cart</a>
                    <a href="#!" class="cktab-continue-btn">Continue Shipping</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="nav-shipping" role="tabpanel" aria-labelledby="nav-shipping-tab">
              <div class="tab-content-inner-wrap">
                <div class="ck-shipping-wrapper">
                  <div class="ck-ship-single">
                    <h6>Contact</h6>
                    <div class="sk-ship-single-inner">
                      <p>someone@email.com</p>
                      <a href="#!">Change</a>
                    </div>
                  </div>
                  <div class="ck-ship-single">
                    <h6>Ship to</h6>
                    <div class="sk-ship-single-inner">
                      <p>Somewhere, second floor, New York, USA</p>
                      <a href="#!">Change</a>
                    </div>
                  </div>
                </div>
                <h5 class="ship-heading">Shipping method</h5>
                <div class="ck-shipping-wrapper">
                  <label class="ck-ship-single">
                    <input type="radio" name="shipping">
                    <div class="sk-ship-single-inner">
                      <span>Free U.S. Standard Shipping</span>
                      <span>Free</span>
                    </div>
                  </label>
                  <label class="ck-ship-single">
                    <input type="radio" name="shipping">
                    <div class="sk-ship-single-inner">
                      <span>EMS Shipping service</span>
                      <span>$5</span>
                    </div>
                  </label>
                </div>
                <div class="cktab-btn-wrap">
                  <a href="#!" class="return-cart"><i class="fas fa-angle-left"></i> Return to Information</a>
                  <a href="#!" class="cktab-continue-btn">Continue to Payment</a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="nav-payment" role="tabpanel" aria-labelledby="nav-payment-tab">
              ...c
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="checkout-right-wrap">
      <div class="checkout-right-inner-wrap">
        <div class="checkout-prod-wrap">
          <div class="ckp-single-wrap">
            <div class="ckp-desc-wrap">
              <div class="ckp-desc-img-wrap">
                <img src="images/product-img-1.png" alt="">
                <span class="ckp-qty">2</span>
              </div>
              <h6 class="ckp-pname">ETUDE HOUSE – Soonjung 2x Barrier Intensive Cream 60ml</h6>
            </div>
            <label class="ckp-price">￦ 9,550</label>
          </div>
          <div class="ckp-single-wrap">
            <div class="ckp-desc-wrap">
              <div class="ckp-desc-img-wrap">
                <img src="images/product-img-2.png" alt="">
                <span class="ckp-qty">1</span>
              </div>
              <h6 class="ckp-pname">THE FACE SHOP - Styling Eye Palette No.2 Fatal Burgundy</h6>
            </div>
            <label class="ckp-price">￦ 4,120</label>
          </div>
        </div>

        <div class="checkout-discount-wrap">
          <input type="text" placeholder="Gift card or discount code">
          <button>Apply</button>
        </div>

        <div class="checkout-total-wrap">
          <div class="ck-subtotal-single">
            <label>Subtotal</label>
            <label><b>￦ 13,670</b></label>
          </div>
          <div class="ck-subtotal-single">
            <label>Shipping (does not include Duty/Tax/Fee for International Shipping)</label>
            <label><b>Free</b></label>
          </div>
          <div class="ck-total">
            <label>Total</label>
            <p>￦ 13,670</p>
          </div>

        </div>

      </div>

    </div>

  </section>


  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/zoomsl.js"></script>
  <script src="js/custom.js"></script>

</body>

</html>