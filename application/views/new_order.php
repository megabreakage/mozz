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
      <div class="col-xs-6 col-sm-6">
        <div class="card">
          <div class="card-header text-center">
            Order Information
          </div>
          <div class="card-body">
            <div class="form-group">
              <label class="form-control-label">Choose Products</label>
              <div class="form-check">
                <div class="checkbox">
                  <label for="checkbox1" class="form-check-label ">
                    <input type="checkbox" id="checkbox1" name="checkbox1" value="1" class="form-check-input"> Curtains
                  </label>
                </div>
                <div class="checkbox">
                  <label for="checkbox2" class="form-check-label ">
                    <input type="checkbox" id="checkbox2" name="checkbox2" value="2" class="form-check-input"> Pillows
                  </label>
                </div>
                <div class="checkbox">
                  <label for="checkbox3" class="form-check-label ">
                    <input type="checkbox" id="checkbox3" name="checkbox3" value="3" class="form-check-input"> Bedcovers & Bedsheets
                  </label>
                </div>
                <div class="checkbox">
                  <label for="checkbox3" class="form-check-label ">
                    <input type="checkbox" id="checkbox3" name="checkbox4" value="4" class="form-check-input"> Track Suits
                  </label>
                </div>
                <div class="checkbox">
                  <label for="checkbox3" class="form-check-label ">
                    <input type="checkbox" id="checkbox3" name="checkbox5" value="5" class="form-check-input"> Mosquito Nets
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="form-control-label">Select Curtain Package</label>
              <select data-placeholder="Please Select..." class="standardSelect form-control" tabindex="1">
                <option value="">Please Select...</option>
                <option value="1">Platinum</option>
                <option value="2">Gold</option>
                <option value="3">Diamond</option>
                <option value="4">Bronze</option>
              </select>
            </div>
            <hr>
            <div class="form-group">
              <p class="text-center">Specifications</p>
              <label class="form-control-label">Curtain Size</label>
              <div class="input-group">
                <input type="number" name="size" placeholder="Curtain size" id="size" class="form-control" required>
                <select data-placeholder="Please Select..." class="standardSelect form-control" tabindex="1">
                  <option value="1">centimeters (cm)</option>
                  <option value="2">meters (m)</option>
                  <option value="3">inches (in)</option>
                  <option value="4">feet (ft)</option>
                </select>
              </div>
              <label class="form-control-label">Number of Folds</label>
              <div class="input-group">
                <select data-placeholder="Please Select..." class="standardSelect form-control" tabindex="1">
                  <option value="1">Maximum (x3)</option>
                  <option value="2">Medium (x2.5)</option>
                  <option value="3">Minimum (x2)</option>
                </select>
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
