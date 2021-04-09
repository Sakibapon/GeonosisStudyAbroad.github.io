<?php
   $title = "MacBook Air"; 
   include ('header.php') ;
   $category = "MacBook Air" ;
  ?>

<div class="container category_title">
    <h1><?php echo "$category"; ?></h1>
    <?php include ('sorting.php'); ?>
  </div>

<?php 
 include ('all_products.php');
 foreach ($products as $product_id => $product) {
		 	if ($product["cat"]=="mbair") {
		 		echo get_list_view_html($product_id,$product);
		 	}	      
  		} ;
  		include ('pagination.php');
  ?>

<?php include ('footer.php') ?>