<style media="screen">
  .pt{
    padding-top: 20px;
  }
  .pb{
    padding-bottom: 20px;
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
  .actionButton{
      padding: 2px 10px;
  }
  .thead{
    border: 1px solid #000000 !important;
  }
  .numRows input, .searchDiv input{
    border: 1px solid #000000;
    border-radius: 5px;
    padding: 2px 5px;
  }
  .productImage{
    height: 150px;
    width: 150px;
    border-radius: 5px;
    box-shadow: 0 5px 8px rgba(0, 0, 0, 0.3);
    -moz-box-shadow: 0 5px 8px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0 5px 8px rgba(0, 0, 0, 0.3);
  }
  .platinum{
    background-color: #E5E4E2;
  }
  .gold{
    background-color: #D4AF37;
  }
  .diamond{
    background-color: ##D9EBF4;
  }
  .bronze{
    background-color: #CD7F32;
  }
  .platinum, .gold, .diamond, .bronze{
    height: 150px;
    border-radius: 5px;
    box-shadow: 0 5px 8px rgba(0, 0, 0, 0.3);
    -moz-box-shadow: 0 5px 8px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0 5px 8px rgba(0, 0, 0, 0.3);
  }
  .platinum h5, .gold h5, .diamond h5, .bronze h5{
    margin-top: 50px;
  }
  .divCurtains{
    display: none;
  }
  .measurementRds ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
  }
  .measurementRds li {
    padding: 0 10px;
    float: left;
  }
  .cart{
    display: none;
  }
  .hooks{
    display: none;
    border: 1px solid #E0E0E0;
    padding: 20px 10px;
    margin-top: 20px;
    border-radius: 5px;
  }
</style>

<div class="col-md-12">

  <!-- Manage Products -->
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <div class="col-md-6">
          <i class="fa fa-edit"></i> <strong>Manage products</strong>
        </div>
        <div class="col-md-6 text-right">
          <!-- Activate modal -->
          <a href="#" data-toggle="modal" data-target="#addProduct"><i class="fa fa-plus-circle"></i> Add Product</a>
        </div>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-6 pt pb numRows">
            <label class="">Showing </label>
            <input type="number" name="rows" id="rows" placeholder="Enter number of Rows" value="10"> entries
          </div>
          <div class="col-md-6 pt pb text-right searchDiv">
            <input type="text" name="" value="" placeholder="Search">
          </div>
        </div>
        <div class="col-md-12">
          <table class="table table-sm table-hover">
        <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col">Product</th>
            <th scope="col">Brand</th>
            <th scope="col" class="text-center">Category</th>
            <th scope="col" class="text-center">Quantity</th>
            <th scope="col" class="text-center">Status</th>
            <th class="text-center">Options</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 1;
          foreach ($products as $product): ?>
            <tr>
              <th scope="row"> <small><?php echo $i; ?>.</small> </th>
              <td><?php echo $product['product_name']; ?></td>
              <td>Brand</td>
              <td class="text-center"><?php echo $product['categories_id']; ?></td>
              <td class="text-center"><?php echo $product['quantity']; ?></td>
              <td class="text-center"> <div class="col-md-6 offset-md-3 alert-success"> <small>available</small> </div> </td>
              <td class="text-center">
                <div class="dropdown">
                  <button class="actionButton dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <small>Action</small>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <small><a class="dropdown-item" href="#" data-toggle="modal" data-target="#editProduct">Edit</a></small>
                    <small><a class="dropdown-item" href="#" data-toggle="modal" data-target="#removeProduct">Remove</a></small>
                  </div>
                </div>
              </td>
            </tr>
          <?php
          $i++;
          endforeach; ?>
        </div>
      </div>
      <!-- Modals -->

      <!-- Add product Modal -->
      <div class="modal fade bd-example-modal-lg" id="addProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Record</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <div class="productImage">
                  <img src="" alt=" photo">
                </div>
              </div>
              <div class="form-group">
                <select data-placeholder="Please Select..." class="standardSelect form-control" tabindex="1">
                  <option value="">Please Select Product...</option>
                  <option value="product1">Curtains</option>
                  <option value="product2">Shears</option>
                  <option value="product3">Pillows</option>
                  <option value="product4">Bed Covers & Sheets</option>
                </select>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-6">
                    <select data-placeholder="Please Select..." class="standardSelect form-control" tabindex="1">
                      <option value="">Select Brand...</option>
                      <option value="brand1">Luis Vuiton</option>
                      <option value="brand2">Gucci</option>
                      <option value="brand3">Dolce & Gabbana</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <select data-placeholder="Select package Group..." class="standardSelect form-control" tabindex="1">
                      <option value="">Select Package group...</option>
                      <option value="package1">Platinum</option>
                      <option value="package2">Gold</option>
                      <option value="package3">Diamond</option>
                      <option value="package4">Bronze</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-9">
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-scissors"></i></div>
                      <input type="number" name="materialSize" placeholder="Set material Size" id="materialSize" class="form-control" required>
                      <select data-placeholder="Please Select..." class="standardSelect form-control" tabindex="1">
                        <option value="1">centimeters (cm)</option>
                        <option value="2">meters (m)</option>
                        <option value="3">inches (in)</option>
                        <option value="4">feet (ft)</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <textarea name="description" rows="4" cols="80" class="form-control" id="description" placeholder="Description"></textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-6 offset-md-6">
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                      <input type="number" name="purchasePrice" placeholder="Set Purchase Price of the material" id="purchasePrice" class="form-control" required>
                    </div>
                  </div>
                </div>
              </div>
              <hr>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-6 text-right">
                    <strong>Estimated Selling Price:</strong>
                  </div>
                  <div class="col-md-6">
                    <!-- make calculations based on Meters * cost of  the package -->
                    <strong>Ksh. </strong>(Size * Package Cost)
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save Changes</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Edit Product Modal -->
      <div class="modal fade" id="editProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit Record</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Add input fields to edit content an update using AJAX
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save Changes</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Delete Product Modal -->
      <div class="modal fade" id="removeProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Remove Record</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Are you Sure you want to Remove this record?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-danger">Remove</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
