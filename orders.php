<?php
   $title = "Orders"; 
   include ('header.php') ;
  ?>
 
<div class="container">
	<div class="col-lg-8">
		<br>
	<table class="table table-bordered">

		<?php 
			include ('orders-list.php');
			foreach ($items as $product_id => $product) {
				 echo get_list_view_html($product_id,$product);
			}
		?>
	</table>
	</div>
</div>

<?php include ('footer.php') ?>