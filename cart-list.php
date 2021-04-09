<?php
	
	function get_list_view_html($product_id, $product) {
	    $output = '
	    	<tr class="warning">
				<td>
					<div class="col-lg-12">
						<div class="col-lg-2">
							<img style="max-height: 96px; max-width: 100px;" src="' . $product["img-t"] . '">
						</div>

						<div class="col-lg-8">
							<h4>' . $product["brand"] . ' ' . $product["name"] .' ' . $product["year"] . '</h4>
							<p>Size: <a href="#">13"</a> Qty: <a href="#">1</a></p>
							<p>Only <span>1</span> units in stock</p>
							<a href="#"> Remove Items</a>
						</div>

						<div class="col-lg-1">
							<p>BDT ' . $product["price"] . '</p>
						</div>
					</div>
				</td>
			</tr>
	    ';
	    
        return $output;
    }





	$items = array();

    include ('connection.php');

    $userQuery = 'SELECT * from users where username = "' . $_SESSION['username'] . '"';
    $userIDresult = mysqli_query($db,$userQuery);
    while ($userIDrow = mysqli_fetch_array($userIDresult, MYSQLI_ASSOC)) {
    	$userID = $userIDrow["id"];
    };


    $query = 'SELECT * from cart where user = ' . $userID;
    $result = mysqli_query($db,$query);

    while ($item_row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
      $cart_id = $item_row["cart_ID"];
      $user = $item_row["user"];
      $product_id = $item_row["product"];
      $quantity = $item_row["quantity"];
      $date = $item_row["dateAdded"];
     

      $productQuery = 'SELECT * from products where id = ' . $product_id;
      $product_result = mysqli_query($db,$productQuery);
      $row = mysqli_fetch_array($product_result, MYSQLI_ASSOC);

      $id = $row["id"];
      $brand = $row["brand"];
      $year = $row["year"];
      $name = $row["model"];
      $type = $row["type"];
      $size = $row["size"];
      $processor = $row["processor"];
      $ram = $row["ram"];
      $ssd = $row["storage"];
      $battery = $row["battery"];
      $cond = $row["cond"];
      $gpu = $row["gpu"];
      $bulkPrice = $row["bulkPrice"];
      $price = $row["sellPrice"];
      $availability = $row["availability"];
      $description = $row["description"];
      $img1 = $row["image1"];
      $img2 = $row["image2"];
      $img3 = $row["image3"];
      $img4 = $row["image4"];
      $img5 = $row["image5"];
      $img6 = $row["image6"];
      $date = $row["somoy"];


      $cnt = 0;
      $imageArray = array();
      if ($img1) {
        $imageArray[$cnt] = $img1;
        $cnt++;
      }
      if ($img2) {
        $imageArray[$cnt] =  $img2;
        $cnt++;
      }
      if ($img3) {
        $imageArray[$cnt] = $img3;
        $cnt++;
      }
      if ($img4) {
        $imageArray[$cnt] = $img4;
        $cnt++;
      }
      if ($img5) {
        $imageArray[$cnt] = $img5;
        $cnt++;
      }
      if ($img6) {
        $imageArray[$cnt] = $img6;
      }


       $items[$id] = array(
      "brand" => $brand,
      "year" => $year,
      "name" => $name,
      "cat"   => $type,
      "sizes" => $size,
      "processor" => $processor,
      "ram" => $ram,
      "storage" => $ssd,
      "battery" => $battery,
      "cond" => $cond,
      "gpu" => $gpu,
      "bulkPrice" => $bulkPrice,
      "price" => $price,
      "availability" => $availability,
      "description" => $description,
      "img-t" => "products/" . $img1,
      "thumbs" => $imageArray,
      "date" => $date
      );

    }

    $totalAmount = 0;
	foreach ($items as $product_id => $product) {
		 $totalAmount = $totalAmount + $product["price"];
	}
		 		
?>












<!-- //////////////Total Items///////////////  -->