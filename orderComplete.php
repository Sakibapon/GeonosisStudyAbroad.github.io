<?php
  include ('all_products.php');
  $order_id = $_GET["id"];

   $title = "Order Complete"; 
   include ('header.php') ;
   $btn_action = "payment.php";
   $btn_name = "Proceed to Checkout";


  ?>
 
<div class="container">
  <div class="col-lg-8">
    <table class="table table-bordered">
       <tr class="warning">
          <td><h2>Thank you for your order</h2></td>
        </tr>

        <tr class="warning">
          <td>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <p>Dear Customer</p>
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

<?php include ('footer.php') ?>

