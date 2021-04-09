<?php
   $title = "Address"; 
   include ('connection.php');
   include ('header.php') ;
   $btn_action = "delivery.php";
   $btn_name = "Proceed to Checkout";

   include ('cart-list.php');
   $userID = (int) $userID;
   $order_id = mysqli_insert_id($db);
   
   

   $btn_name = "Confirm Payment with Cash on Delivery";
   $order_id = mysqli_insert_id($db);

   if (isset($_POST['place_order'])) {

    // connect to database
    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $address = $_POST['address'];
    $address2 = $_POST['address2'];
    $telephone = $_POST['telephone'];
    $phone = $_POST['cell'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $postCode = $_POST['postCode'];


    $sql = "INSERT INTO orders (user, firstName, lastName, address, address2, telephone, phone, state, city, postCode, total, orderStatus) 
    VALUES ('$userID', '$firstName', '$lastName','$address','$address2','$telephone','$phone','$state','$city','$postCode','$totalAmount','Processing')";

    $Query = mysqli_query($db, $sql); // store the submitted data to the database..
    $newOrderID = mysqli_insert_id($db);
    
    foreach ($items as $product_id => $product) {
      $sql = "INSERT INTO orderItems (userID, productID, orderID) 
      VALUES ('$userID', '$product_id', '$newOrderID')";

      $Query = mysqli_query($db, $sql);
    }
    
    $sql = 'DELETE from cart where user = ' . $userID;
    $Query2 = mysqli_query($db, $sql); 
    
    if ($Query) {
      header('Location: http://' . $_SERVER['HTTP_HOST'] . '/ukplanet/orderComplete.php?id=' . $newOrderID);
    }
    echo "New record has id: " . mysqli_insert_id($db);
    
  }


  ?>
<div class="container">
    <ol class="breadcrumb">
    <li><a href="cart.php">Cart</a></li>
    <li class="active">Address</li>
    <li><a href="#">Payment</a></li>
    <li><a href="#">Delivery</a></li>
  </ol>
</div>
 
<div class="container">

<form method="post" enctype="multipart/form-data">
  <div class="col-lg-8">
    <table class="table table-bordered">
       <tr class="warning">
                <td><h2>Delivery Address:</h2></td>
              </tr>

       <tr class="warning">
          <td>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <p>First Name:</p>
              <input type="text" name="first-name">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                      <p>Last Name:</p>
              <input type="text" name="last-name">
            </div>
          </td>
        </tr>

        <tr class="warning">
          <td>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <p>Telephone:</p>
              <input type="text" name="telephone">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
               <p>Cell Phone:</p>
              <input type="text" name="cell">
            </div>
          </td>
        </tr>

        <tr class="warning">
          <td>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <p>Address*:</p>
              <input type="text" name="address" class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
            </div>
          </td>
        </tr>

        <tr class="warning">
          <td>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <p>Address 2:</p>
              <input type="text" name="address2" class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
            </div>
          </td>
        </tr>

        <tr class="warning">
          <td>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <p>State:</p>
              <select name="state">
                <option value="Please Select">Please Select</option>
                <option value="Dhaka">Dhaka</option>
                <option value="Chittagong">Chittagong</option>
                <option value="Khulna">Khulna</option>
                <option value="Barishal">Barishal</option>
                <option value="Mymensingh">Mymensingh</option>
                <option value="Sylhet">Sylhet</option>
                <option value="Rajshahi">Rajshahi</option>
                <option value="Rangpur">Rangpur</option>
            </select>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <span>City: </span>
              <input type="text" name="city">
              <br>
              <span>Post Code: </span>
              <input type="text" name="postCode">
            </div>
          </td>
        </tr>
    </table>
  </div>






<!-- Calculation Panel -->
 <div class="col-lg-4">
    <h4>Coupons</h4>
    <input class="btn btn-default" type="submit" value="Apply Coupons">
    <br>
    <h4>Gift Wrap</h4>
    <label>
          <input type="checkbox"> Wrap as a gift for BDT 25 Only
      </label>
      <br>
    <table class="table table-bordered">
      <thead>
        <tr class="warning">
          <td><b>PRODUCT DESCRIPTION</b></td>
          <td><b>PRICE</b></td>
        </tr>
      </thead>
      <tbody>
        <tr class="warning">
          <td>
            Cart Total
          </td>
          <td>
            BDT <span id="total-price"><?php echo $totalAmount; ?></span>
          </td>
        </tr>
        <tr class="warning">
          <td>
            Cart Discount
          </td>
          <td>
            BDT <span id="discount-price">0</span>
          </td>
        </tr>
        <tr class="warning">
          <td>
            Estimated VAT/CST
          </td>
          <td>
            BDT <span id="total-vat">0</span>
          </td>
        </tr>
        <tr class="warning">
          <td>
            Coupon Discount
          </td>
          <td>
            BDT <span id="total-coupon">0</span>
          </td>
        </tr>
        <tr class="warning">
          <td>
            Delivery Charge
          </td>
          <td>
            BDT <span id="delivery-charge">1000</span>
          </td>
        </tr>
        <tr class="warning">
          <td>
            Gift Wrap Charge
          </td>
          <td>
            BDT <span id="gift-charge">0</span>
          </td>
        </tr>
        <tr class="warning">
          <td>
            <b>Order Total</b>
          </td>
          <td>
            <b>BDT <span id="total-price"><?php echo $totalAmount + 1000; ?></span></b>
          </td>
        </tr>
      </tbody>
    </table>
      <button type="submit" name="place_order" class="btn btn-success center-block"><?php echo $btn_name ?></button>
  </div>
</form>
  <!-- Calculation panel End -->
</div>

<?php include ('footer.php') ?>

