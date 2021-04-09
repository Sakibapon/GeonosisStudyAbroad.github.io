<?php
	include ('all_products.php');

    $product_id = $_GET["id"];
    $product = $products[$product_id];

 	$title = $product["name"]; 
    include ('header.php') ;
	include ('connection.php');


    $userID = -1;
	if (isset($_SESSION['username'])){
	    $userQuery = 'SELECT * from users where username = "' . $_SESSION['username'] . '"';
	    $userIDresult = mysqli_query($db,$userQuery);
	    while ($userIDrow = mysqli_fetch_array($userIDresult, MYSQLI_ASSOC)) {
	      $userID = $userIDrow["id"];
	    };
	    $userID = (int) $userID;
	}

    if (isset($_POST['add-to-cart'])) {
	    $sql = "INSERT INTO cart (user, product, quantity) VALUES ('$userID','$product_id','1')";

	    $Query = False;

	    if ($product["availability"] == 1){
	    	$Query = mysqli_query($db, $sql); // store the submitted data to the database..
	    	if ($Query) {
		      	echo '<div class="alert alert-success">';
	  			echo "<strong>Success!</strong> Item added.";
				echo "</div>";
		    }
		    else{
		    	echo '<div class="alert alert-danger">';
	  			echo "<strong>Failed!</strong> Item not added.";
				echo "</div>";
		    }
		}
		else {
			echo '<div class="alert alert-danger">';
  			echo "<strong>Out of Stock!</strong> Item not added.";
			echo "</div>";
		}	
	    
    }

  ?> 

<section>
	<div class="col-lg-7 col-md-7 col-sm-12 preview">
		<div class="col-lg-8 col-md-8 col-sm-8">
			<a href="#"><img id="expandedImg" src="<?php echo $product["img-t"]; ?>" class="cen thumbnail img-responsive"></a>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 thum">

			<?php foreach ($product["thumbs"] as $thumb) {
				$output = "";
				$output = $output . '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3"><img style="height:100px;width:100%;object-fit: cover;" onclick="myFunction(this)" src="';
				$output = $output . "products/" . $thumb;
				$output = $output . '" class="thumbnail h-img"></div>';
				echo $output;
			}?>
			
		</div>
	</div> 
	<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
	<table class="table table-bordered">
		<tr class="warning">
			<td>
			<h2><?php echo $product["brand"] . " " . $product["name"] . " " . $product["year"]; ?></h2>
			<p><?php echo "Processor: " . $product["processor"] . ". RAM: " . $product["ram"] . 
				". Storage: " . $product["storage"] . "<br>GPU: " . $product["gpu"] . ". Battery Cycle Count: " . $product["battery"]; ?></p>
			</td>
		</tr>
			<br>
		<tr class="warning">
			<td>
				<label for="sizes"><h4>Size: <?php echo $product["sizes"] . " inch"?></h4></label>
			</td>
		</tr>
		
		<tr class="warning">
			<td>
			<p><?php echo $product["description"] ?></p>
			</td>
		</tr>
		

		<tr class="warning">
			<td>
				<p>Pay advnace before delivery*<br>No return policy<br>Product is as similar as described*<br>Genuine Product from UK</p>
			</td>
		</tr>
		<tr class="warning">
			<td>
			<p><i class=""></i>Date Added: <?php echo $product["date"]?></p>
			</td>
		</tr>
		<tr class="warning">
			<td>
				<?php 
					if ($product["availability"] == 1) {
						echo "<h4>In Stock</h4>
						<p>Delivery within 2-3 business days.</p>";
					}
					else {
						echo "<h4>Out of Stock</h4>";
					}
				?>

			
			</td>
		</tr>
		<form method="post">
			<tr class="warning">
				<td>
				<h2 id="price">BDT <?php echo $product["price"] ?></h2>
					<?php  if (isset($_SESSION['username'])){
								echo '<input class="btn btn-default" type="submit" name="add-to-cart" value="Add to Cart">';
							}
							else{
								echo '<input class="btn btn-default disabled" type="" value="Login for add to Cart">';
							}
					?>
				<?php echo '<a href="manualOrder.php?id=' . $product_id . '" class="btn btn-default" role="button">Buy Now</a>' ?>
				</td>
			</tr>
		</form>
	</table>
	</div>
</section>

<script type="text/javascript">
	function myFunction(imgs) {
		var expandImg = document.getElementById("expandedImg");
		expandImg.src = imgs.src;
		//expandImg.parentElement.style.display = "block";
	}
</script>

<?php include ('footer.php') ?>