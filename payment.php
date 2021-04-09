<?php
   $title = "Payment"; 
   include ('header.php') ;
   $btn_action = "delivery.php";
   $btn_name = "Confirm Order";


   include ('cart-list.php');
   include ('connection.php');
   $order_id = mysqli_insert_id($db);
   $userID = (int) $userID;
    
    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $address = $_POST['address'];
    $address2 = $_POST['address2'];
    $telephone = $_POST['telephone'];
    $phone = $_POST['cell'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $postCode = $_POST['postCode'];
    $total = $product["price"];

    //testing purpose
     echo ($userID) . '<br>';
     echo $firstName . '<br>';
     echo $postCode . '<br>';
     echo $total . '<br>';
     if (isset($db)) {
       echo "Success";
     }

   if (isset($_POST['submit'])) {
    // connect to database
    //$item = $product_id;
    
    foreach ($items as $product_id => $product) {
       echo $product_id;
       $sql = "INSERT INTO orders (user, firstName, lastName, address, address2, telephone, phone, state, city, postCode, item, total, orderStatus) 
       VALUES ('$userID','$firstName', '$lastName','$address','$address2','$telephone','$phone','$state','$city','$postCode','$product_id','$total','Processing')";

       $Query = mysqli_query($db, $sql); // store the submitted data to the database..
    }
    

    if ($Query) {
      header('Location: http://' . $_SERVER['HTTP_HOST'] . '/delivery.php?id=' . mysqli_insert_id($db));
    }
    echo "New record has id: " . mysqli_insert_id($db);
    
  }


  ?>
<div class="container">
    <ol class="breadcrumb">
    <li><a href="cart.php">Cart</a></li>
    <li><a href="address.php">Address</a></li>
    <li class="active">Payment</li>
    <li><a href="#">Delivery</a></li>
  </ol>
</div>
 
<div class="container">

<form method="post" enctype="multipart/form-data">
  <div class="col-lg-8">
    <table class="table table-bordered">
       <tr class="warning">
         <h2>Please select a payment method</h2>
       </tr>

        <tr class="warning">
          <td>
            <img src="cards/visa.png">
          </td>

          <td>
            <label for="visa">VISA</label>
          </td>

          <td>
            <input type="radio" name="paytype" id="visa">
          </td>
        </tr>

        <tr class="warning">
          <td>
            <img src="cards/mastercard.png">
          </td>

          <td>
            <label for="mastercard">Mastercard</label>
          </td>

          <td>
            <input type="radio" name="paytype" id="mastercard">
          </td>
        </tr>

        <tr class="warning">
          <td>
            <img src="cards/amex.png">
          </td>

          <td>
            <label for="amex">American Express</label>
          </td>

          <td>
            <input type="radio" name="paytype" id="amex">
          </td>
        </tr>

        <tr class="warning">
          <td>
            <img src="cards/bkash.png">
          </td>

          <td>
            <label for="bkash">bKash</label>
          </td>

          <td>
            <input type="radio" name="paytype" id="bkash">
          </td>
        </tr>

        <tr class="warning">
          <td>
            <img src="cards/rocket.png">
          </td>

          <td>
            <label for="rocket">Rocket (DBBL Mobile Banking)</label>
          </td>

          <td>
            <input type="radio" name="paytype" id="rocket">
          </td>
        </tr>

        <tr class="warning">
          <td>
            <img src="cards/cash.png">
          </td>

          <td>
            <label for="cash">Cash on delivery</label>
          </td>

          <td>
            <input type="radio" name="paytype" id="cash">
          </td>
        </tr>



    </table>
  </div>
</form>




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
    
      <button type="submit" class="btn btn-success center-block"><?php echo $btn_name ?></button>
    
  </div>
  <!-- Calculation panel End -->
</div>

<?php include ('footer.php') ?>