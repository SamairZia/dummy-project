<?php include 'inc/header.php' ?>

<section class="breadcrumbs mt-3">
  <div class="container">
    <div class="breadcrumbs-inner">
      <a href="#!">Home</a>
      <a href="#!">Shopping Cart</a>
    </div>
  </div>
</section>

<section class="cart-sec-1">
  <div class="container">
    <div class="cart-inner-head">
      <h3>Total Weight: (1.03kg)</h3>
      <button>Empty Cart</button>
    </div>
    <div class="cart-table-wrap table-responsive-md">
      <table class="table table-sm table-bordered">
        <thead>
          <tr>
            <th class="text-center"><i class="fas fa-trash-alt"></i></th>
            <th class="text-center">Image</th>
            <th>Product Name</th>
            <th>Model</th>
            <th class="text-center">Quantity</th>
            <th class="text-right">Weight(kg)</th>
            <th class="text-right">Unit Price</th>
            <th class="text-right">Total</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="text-center"><i class="fas fa-trash-alt"></i></td>
            <td class="text-center">
              <a href="#!" class="cart-img"><img src="images/product-img-1.png" alt=""></a>
            </td>
            <td>
              <a href="#!" class="cart-pname">ETUDE HOUSE – Soonjung 2x Barrier Intensive Cream 60ml</a>
            </td>
            <td>
              <p>etude_123</p>
            </td>
            <td class="text-center">
              <div class="pd-qty justify-content-center">
                <span class="minus">-</span>
                <input type="text" value="1">
                <span class="plus">+</span>
              </div>
            </td>
            <td class="text-right">
              <p>0.56</p>
            </td>
            <td class="text-right">
              <p><b>￦4,550</b></p>
            </td>
            <td class="text-right">
              <p><b>￦4,550</b></p>
            </td>
          </tr>

          <tr>
            <td class="text-center"><i class="fas fa-trash-alt"></i></td>
            <td class="text-center">
              <a href="#!" class="cart-img"><img src="images/product-img-2.png" alt=""></a>
            </td>
            <td>
              <a href="#!" class="cart-pname">THE FACE SHOP - Styling Eye Palette No.2 Fatal Burgundy</a>
            </td>
            <td>
              <p>faceshop_987</p>
            </td>
            <td class="text-center">
              <div class="pd-qty justify-content-center">
                <span class="minus">-</span>
                <input type="text" value="1">
                <span class="plus">+</span>
              </div>
            </td>
            <td class="text-right">
              <p>0.78</p>
            </td>
            <td class="text-right">
              <p><b>￦4,550</b></p>
            </td>
            <td class="text-right">
              <p><b>￦4,550</b></p>
            </td>
          </tr>

        </tbody>
      </table>
    </div>
  </div>
</section>

<section class="cart-sec-2">
  <div class="container">
    <div class="cart-next-head">
      <h2>What would you like to do next?</h2>
      <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
    </div>

    <div class="accordion" id="accordionCartNext">
      <div class="next-card">
        <div class="next-card-header">
          <h4 class="collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <span>Use Coupon Code</span>
            <i class="fas fa-caret-down"></i>
          </h4>
        </div>
        <div id="collapseOne" class="collapse next-cart-body" aria-labelledby="headingOne" data-parent="#accordionCartNext">
          <div class="next-input-group">
            <label>Enter your coupon here</label>
            <div class="next-input-wrap">
              <input type="text" placeholder="Enter your coupon here">
              <button>Apply Coupon</button>
            </div>
          </div>
        </div>
      </div>
      <div class="next-card">
        <div class="next-card-header">
          <h4 class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <span>Use Store Credit (Available ￦2,000)</span>
            <i class="fas fa-caret-down"></i>
          </h4>
        </div>
        <div id="collapseTwo" class="collapse next-cart-body" aria-labelledby="headingTwo" data-parent="#accordionCartNext">
          <div class="next-input-group">
            <label>Store credit to use</label>
            <div class="next-input-wrap">
              <input type="text" placeholder="Store credit to use">
              <button>Apply Credit</button>
            </div>
          </div>
        </div>
      </div>
      <div class="next-card">
        <div class="next-card-header">
          <h4 class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <span>Estimate Shipping & Taxes</span>
            <i class="fas fa-caret-down"></i>
          </h4>
        </div>
        <div id="collapseThree" class="collapse next-cart-body" aria-labelledby="headingThree" data-parent="#accordionCartNext">
          <form>
            <h5>Enter your destination to get a shipping estimate.</h5>
            <div class="next-input-group">
              <label>Country <span>*</span></label>
              <div class="next-input-wrap">
                <select>
                  <option>--- Please Select ---</option>
                  <option>USA</option>
                  <option>Korea</option>
                  <option>Pakistan</option>
                </select>
              </div>
            </div>
            <div class="next-input-group">
              <label>Region / State <span>*</span></label>
              <div class="next-input-wrap">
                <select>
                  <option>--- None ---</option>
                  <option>New York</option>
                  <option>Seol</option>
                  <option>Karachi</option>
                </select>
              </div>
            </div>
            <div class="next-input-group">
              <label>Post Code <span>*</span></label>
              <div class="next-input-wrap">
                <input type="text" placeholder="Post Code">
              </div>
            </div>
            <button class="get-quote-btn">Get Quotes</button>
          </form>
        </div>
      </div>
      <div class="next-card">
        <div class="next-card-header">
          <h4 class="collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          <span>Use Gift Certificate</span>
            <i class="fas fa-caret-down"></i>
          </h4>
        </div>
        <div id="collapseFour" class="collapse next-cart-body" aria-labelledby="headingFour" data-parent="#accordionCartNext">
          <div class="next-input-group">
            <label>Enter gift certificate code</label>
            <div class="next-input-wrap">
              <input type="text" placeholder="Enter your gift certificate code here">
              <button>Apply Code</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="cart-total-wrap">
      <div class="col-sm-6 col-md-4 col-lg-4 offset-md-8 offset-lg-8 pr-0">
        <div class="total-cart-table">
          <table class="table table-bordered">
            <tbody>
              <tr>
                <td><strong>Sub-Total:</strong></td>
                <td>￦49,890</td>
              </tr>
              <tr>
                <td><strong>8 [DHL] 8 Zone (Weight: 1.03kg):</strong></td>
                <td>￦36,489</td>
              </tr>
              <tr>
                <td><strong>Total:</strong></td>
                <td>￦86,379</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="cart-btns-wrap">
      <a href="#!">Continue Shopping</a>
      <a href="#!">Checkout</a>
    </div>


  </div>
</section>

<?php include 'inc/footer.php' ?>