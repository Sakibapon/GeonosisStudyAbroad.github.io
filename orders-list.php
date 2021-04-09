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
			      <a href="http://localhost/ukplanet/product.php?id=' . $product["id"] . '">
              <h4>' . $product["brand"] . ' ' . $product["name"] .' ' . $product["year"] . '</h4>
            </a>
							<p>Size: <a href="#">13"</a> Qty: <a href="#">1</a></p>
              <p>Order Time: ' . $product["date"] . '</p>
              <p>Order Status: ' . $product["orderStatus"] . '</p>
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

    $userID = (int) $userID;


    $query = 'SELECT orderItems.productID, orders.orderStatus, orderItems.somoy from orderItems, orders 
    where orders.id = orderItems.orderid and orderItems.userID = ' . $userID;
    $result = mysqli_query($db,$query);

    $orderCnt = 0;
    while ($item_row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
      $product_id = $item_row["productID"];
      $timestamp = $item_row["somoy"];
      $orderStatus = $item_row["orderStatus"];
      
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


       $items[$orderCnt] = array(
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
      "date" => $timestamp,
      "orderStatus" => $orderStatus,
      "id" => $product_id
      );
       $orderCnt = $orderCnt + 1;
    }
		 		
?>












<!-- //////////////Total Items///////////////  -->