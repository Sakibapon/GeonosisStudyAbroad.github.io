  <?php 
  
    function get_list_view_html($product_id, $product) {
    
    $output = "";
    $output = $output . '<div class="col-lg-3 col-sm-4 col-xs-6 col-md-3">';
    $output = $output . '<div class="thumbnail">';  
    $output = $output . '<a href="product.php?id=' . $product_id . '"><img style="display: block;object-fit: cover;height: 220px;" class="thumbImg" src="' . $product["img-t"] . '" alt="' . $product["name"] . '"></a>';
    $output = $output . '<div class="caption">';    
    $output = $output . '<p style="font-family: Oleo Script; font-size: 20px; height:24px; text-align:center;">' . $product["name"] . '</p>';
    $output = $output . '<p style="text-align:center; font-weight: bold;">RAM: ' . $product["ram"] . '. Storage: ' . $product["storage"] . ' </p>'; 
    $output = $output . '<p style="text-align:center; font-weight: bold;">Price: ' . $product["price"] . ' BDT</p>'; 
    $output = $output . '<div style="text-align:center;">';     
    $output = $output . '<a href="product.php?id=' . $product_id . '" class="btn btn-default" role="button">View details</a>';       
    $output = $output . '<a href="manualOrder.php?id=' . $product_id . '" class="btn btn-default" role="button">Buy Now</a>';       
    $output = $output . '</div>';
    $output = $output . '</div>';   
    $output = $output . '</div>';  
    $output = $output . '</div>';
        return $output;
    }
    $products = array();

    error_reporting(0);
    $sortBy = "";
    $sortBy = $_GET["sortBy"];
    if ($sortBy == "priceAsc") {
      $query = "SELECT * from products ORDER BY sellPrice asc";
    }
    elseif ($sortBy == "priceDesc") {
      $query = "SELECT * from products ORDER BY sellPrice desc";
    }
    elseif ($sortBy == "dateAsc") {
      $query = "SELECT * from products ORDER BY somoy asc";
    }
    elseif ($sortBy == "dateDesc") {
      $query = "SELECT * from products ORDER BY somoy desc";
    }
    elseif ($sortBy == "available") {
      $query = "SELECT * from products where availability = 1";
    }
    else {
      $query = "SELECT * from products";
    }

    include ('connection.php');

    
    $result = mysqli_query($db,$query);

    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
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


      $products[$id] = array(
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

 ?>

