<?php
   $title = "Jeans"; 
   include ('header.php') ;
   $category = "Jeans" ;
  ?>

<div class="container category_title">
    <h1><?php echo "$category"; ?></h1>
  </div>

<?php 
    // connect to database
    $db = mysqli_connect("localhost", "root", "", "sparna");
    // Search for items
    $sql = "SELECT * FROM products";
    $result = mysqli_query($db, $sql);
    while ($row = mysqli_fetch_array($result)) {
      # code...
    }
  ?>

<?php include ('footer.php') ?>