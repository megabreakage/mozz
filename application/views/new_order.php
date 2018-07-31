<style media="screen">
  .pt{
    padding-top: 20px;
  }
  .pb{
    padding-bottom: 20px;
  .pa{
    padding: 20px;
  }
  .mt{
    margin: 20px 0 20px 0;
  }
  .dashBoardTab{
    padding: 10px;
    border-radius: 5px;
  }
  .dateTab{
    background-color: green;
    padding: 40px 0 0 0!important;
  }
  .tabLabel{
    background-color: #ffffff;
  }
  .revenueTab{
    background: blue;
    padding: 40px 0 0 0!important;
  }
  .boxBorder{
    border-radius: 5px;
    box-shadow: 0 5px 8px rgba(0, 0, 0, 0.3);
    -moz-box-shadow: 0 5px 8px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0 5px 8px rgba(0, 0, 0, 0.3);
  }
</style>
<div class=" card">
  <div class="text-right card-header">
    Order Number:
    <strong>
      <?php
      $string = 'AT247MOZZ001';
      echo $string; ?>
  </strong>
  </div>
  <div class="col-md-12 pt pb">
    <div class="date text-right">
      <h6><?php
        $d=strtotime("10:30pm April 15 2014");
        echo  date("d-m-Y h:i:sa", $d);
        ?></h6>
    </div>
    <form id="newOrder" action="index.html" method="post">

      <div class="row">
        <!-- Select Product -->
        <div class="col-md-12">
          <div class="form-group">
            <h6 class="text-center pt">Select a Product</h6>
            <div class="col-md-6 offset-md-3 pt pb">
              <select data-placeholder="Select a Product..." class="standardSelect form-control" tabindex="1" id="selectProduct">
                <option value="">Select a Product...</option>
                <option value="1">Curtains</option>
                <option value="2">Pillows</option>
                <option value="3">Bed Covers & Sheets</option>
                <option value="4">Track Suits</option>
              </select>
            </div>
          </div>
        </div>

        <!-- Order -->
        <div class="col-xs-12 col-sm-12 col-md-8">
          <div class="row">
            <!-- Specifications -->
            <div class="col-md-12 form-group" id="specs">
              <h6 class="text-center pt">Specifications</h6>
              <hr>
              <div class="row">
                <div class="col-md-6">
                  <input type="number" name="materialSize" class="form-control" placeholder="Enter length of your Window" id="materialSize">
                </div>
                <div class="col-md-6 measurementRds">
                  <ul><li><input type="radio" name="units" value="m" id="meters" required> meters</li></ul>
                  <ul><li><input type="radio" name="units" value="cm" id="centimeters" requried> centimeters</li></ul>
                  <ul><li><input type="radio" name="units" value="in" id="inches" required> inches</li></ul>
                  <ul><li><input type="radio" name="units" value="ft" id="feet" required> feet</li></ul>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 pt">
                  <!-- <label for="" class="form-control-label">Number of Folds</label> -->
                  <select data-placeholder="Select Number of folds..." class="standardSelect form-control" tabindex="1" id="selectFold">
                    <option value="">Select Number of folds...</option>
                    <option value="3">Maximum (x3)</option>
                    <option value="2.5">Medium (x2 .5)</option>
                    <option value="2">Minimum (X2)</option>
                  </select>
                </div>
                <div class="col-md-6 measurementRds pt">
                  <ul><li><input type="radio" name="curtainType" value="Rods" id="rod"> Rod (Eyelets)</li></ul>
                  <ul><li><input type="radio" name="curtainType" value="Curtain Box" id="curtainBox"> Curtain Box</li></ul>
                  <div class="col-md-6 offset-md-3 hooks text-center" id="hooks">
                    <ul><li><input type="radio" name="units" value="1" id="bigHook"> Big</li></ul>
                    <ul><li><input type="radio" name="units" value="2" id="smallHook"> Small</li></ul>
                  </div>
                </div>
              </div>
              <hr>
            </div>
            <!-- Packages -->
            <div class="col-md-12 divCurtains text-center" id="packages">
              <div class="col-xs-12 col-sm-12 col-md-12"><a href="#" id="platinum">
                <div class="col-md-3" id="package">
                  <div class="col-md-12 alert alert-success platinum" >
                    <h5>Platium</h5>
                  </div>
                </div>
              </a>
              <a href="#" id="gold">
                <div class="col-md-3 " id="package" value="platinum">
                  <div class="col-md-12 alert alert-success gold" >
                    <h5>Gold</h5>
                  </div>
                </div>
              </a>
              <a href="#" id="diamond">
                <div class="col-md-3 " id="package">
                  <div class="col-md-12 alert alert-success diamond">
                    <h5>Diamond</h5>
                  </div>
                </div>
              </a>
              <a href="#" id="bronze">
                <div class="col-md-3 " id="package">
                  <div class="col-md-12 alert alert-success bronze">
                    <h5>Bronze</h5>
                  </div>
                </div>
              </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Cart -->
        <div class="col-xs-12 col-sm-12 col-md-4 mt">
          <div class="card">
            <div class="card-header">
              <h6 class="text-center">Your Cart</h6>
            </div>
            <div class="card-body">
              <div class="col-md-8 offset-md-2 alert alert-danger text-center" id="cartEmpty">
                <small>Your Cart is Empty!</small>
              </div>
              <div class="row">
                <div class="col-md-12 cart" id="cart">
                  <small>
                    <div class="row">
                      <div class="col-md-6">
                        <strong>Items</strong>
                      </div>
                      <div class="col-md-2">
                        <small><strong>L<i> (m)</i></strong></small>
                      </div>
                      <div class="col-md-4 text-right">
                        <strong>Price</strong>
                      </div>
                      <div class="col-md-12">
                        <div class="row">
                          <div class="col-md-6 cartList" id="cartList">

                          </div>
                          <div class="col-md-2" id="length">

                          </div>
                          <div class="col-md-4 cartPrices text-right" id="cartPrices">

                          </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <hr>
                        <div class="row">
                          <div class="col-md-6 text-right">
                            <p><strong>Total Cost</strong></p>
                          </div>
                          <div class="col-md-6">
                            <p><strong>Ksh. </strong> <span id="totalCost"></span></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </small>
                </div>
              </div>
              <div class="col-md-12 checkoutCancel">
                <hr>
                <div class="row">
                  <div class="col-md-6 text-center">
                    <button type="button" name="cancel" id="cancel" class="btn btn-danger">Cancel</button>
                  </div>
                  <div class="col-md-6 text-center">
                    <button type="button" name="checkout" id="checkout" class="btn btn-primary">Checkout</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-12">
        <div id="output">

        </div>
      </div>


      <!-- Customer Information -->
      <div class="col-xs-6 col-sm-6">
        <div class="card">
          <div class="card-header text-center">
            Customer Information
          </div>
          <div class="card-body card-block">
            <div class="form-group">
              <label class="form-control-label">Customer's Name</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-male"></i></div>
                <input type="text" name="fname" placeholder="first Name" id="fName" class="form-control" required>
                <input type="text" name="lname" placeholder="last Name" id="lName" class="form-control" required>
              </div>
            </div>
            <div class="form-group">
              <label class="form-control-label">Phone number</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                <input type="number" name="phone" placeholder="phone" id="phone" class="form-control" required>
              </div>
            </div>
            <div class="form-group">
              <label class="form-control-label">Email Address</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                <input type="email" name="email" placeholder="email" id="email" class="form-control" required>
              </div>
            </div>
            <div class="form-group">
              <label class="form-control-label">Delivery Location</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-globe"></i></div>
                <input type="location" name="address" placeholder="Delivery Address" id="address" class="form-control" required>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-12">
        <div class="price">
          Products:
        </div>
      </div>
    </form>
  </div>
</div>
