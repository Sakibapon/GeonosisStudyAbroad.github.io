<?php
   $title = "Cart"; 
   include ('header.php') ;
   $btn_action = "address.php";
   $btn_name = "Place Order";
  ?>
<div class="container">
	<br>
    <ol class="breadcrumb">
	  <li class="active">Cart</li>
	  <li><a href="#">Address</a></li>
	  <li><a href="#">Payment</a></li>
	  <li><a href="#">Delivery</a></li>
	</ol>
</div>
 
<div class="container">


	<div class="col-lg-8">




	<table class="table table-bordered">

		<?php 
			include ('cart-list.php');
			foreach ($items as $product_id => $product) {
				 echo get_list_view_html($product_id,$product);
			}
		?>
	</table>
	<form method="POST" >
      <button type="submit" name="clearCart" class="btn btn-danger center-block">Clear Cart</button>
      <?php 
      		if (isset($_POST['clearCart'])) {
			    $sql = 'DELETE from cart where user = ' . $userID;
			    $Query = mysqli_query($db, $sql);
			    if ($Query) {
				 	echo '<div class="alert alert-danger">';
	  				echo "<strong>Success!</strong> Cart Cleared. Reload to see changes";
					echo "</div>";
			 	}
			  }
       ?>
    </form>




	</div>





<!-- Calculation Panel -->
	<?php include ('calc.php') ?>
<!-- Calculation panel End -->
</div>

<?php include ('footer.php') ?>