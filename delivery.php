<?php
   $title = "Delivery"; 
   include ('header.php') ;

   $order_id = $_GET["id"];
   include ('cart-list.php');
   $btn_action = "index.php";
   $btn_name = "Go to Home";
   $userID = (int) $userID;

   if (isset($_POST['place_order'])) {
    // connect to database
    include ('connection.php');
    $sql = "INSERT INTO orders (user, firstName, lastName, address, address2, telephone, phone, state, city, postCode, item, total, orderStatus) 
      VALUES ($userID,'$firstName', '$lastName','$address','$address2','$telephone','$phone','$state','$city','$postCode','$item','$total','Processing')";
    mysqli_query($db, $sql); // store the submitted data to the database..
  }







  ?>
<div class="container">
    <ol class="breadcrumb">
    <li class="active">Cart</a></li>
    <li class="active">Address</a></li>
    <li class="active">Payment</li>
    <li class="active">Delivery</li>
  </ol>
</div>
 
<div class="container">
  <div class="col-lg-8">
    <table class="table table-bordered">
       <tr class="warning">
          <td><h2>Thank you for your order</h2></td>
        </tr>

        <tr class="warning">
          <td>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <p>Dear </p>
              <p>We have recieved you order. We will contact you soon.<br>We will also send you the bank account details to deposit the amount as soon as possible. If you think you have made any mistake please mail at support@uk-planet.com or open <a href="javascript:void(Tawk_API.toggle())">the chat box</a> and message us.</p>
            </div>
          </td>
        </tr>

        <tr class="warning">
          <td>
            <div class="col-lg-12 col-md-12 col-sm-12 col col-xs-12">
              <h4>Please note down your order number for future investigations</h4>
              <h3>Order Number: <?php echo $order_id ?></h3>
            </div>
          </td>
        </tr>
    </table>
  </div>

</div>

</div>

<?php include ('footer.php') ?>