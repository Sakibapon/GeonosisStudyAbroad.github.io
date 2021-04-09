<?php
error_reporting(0);
include('all_products.php');
$title = "Admin Panel"; 
include ('header.php') ;
	// if upload button is pressed
	if (isset($_POST['add_item'])) {
		// the path to store the image
		$targetA = "products/".basename($_FILES['a_img']['name']);
		$targetB = "products/".basename($_FILES['b_img']['name']);
		$targetC = "products/".basename($_FILES['c_img']['name']);
		$targetD = "products/".basename($_FILES['d_img']['name']);
		$targetE = "products/".basename($_FILES['e_img']['name']);
		$targetF = "products/".basename($_FILES['f_img']['name']);

		// connect to database

		include ('connection.php');

		// get all the submitted data from the form

		$aimage = $_FILES['a_img']['name'];
		$bimage = $_FILES['b_img']['name'];
		$cimage = $_FILES['c_img']['name'];
		$dimage = $_FILES['d_img']['name'];
		$eimage = $_FILES['e_img']['name'];
		$fimage = $_FILES['f_img']['name'];

		$brand = $_POST['brand'];
		$model = $_POST['model'];
		$year = $_POST['year'];
		$type = $_POST['type'];
		$sizes = $_POST['sizes'];
		$processor = $_POST['processor'];
		$ram = $_POST['ram'];
		$storage = $_POST['storage'];
		$battery = $_POST['batteryCycle'];
		$cond = $_POST['cond'];
		$gpu = $_POST['gpu'];
		$bulkPrice = $_POST['bulkPrice'];
		$price = $_POST['sellPrice'];
		$description = $_POST['description'];
		
		

		$sql = "INSERT INTO products (brand, model, year, type, size, processor, ram, storage, battery, cond, gpu, bulkPrice, sellPrice, availability, description, image1, image2, image3, image4, image5, image6) 
			VALUES ('$brand', '$model','$year','$type','$sizes','$processor','$ram','$storage','$battery','$cond','$gpu','$bulkPrice','$price','1','$description','$aimage', '$bimage', '$cimage', '$dimage', '$eimage', '$fimage')";

		$addQuery = mysqli_query($db, $sql); // store the submitted data to the database..

		if ($addQuery) {
			echo '<div class="alert alert-success">';
  			echo "<strong>Success!</strong> Item added.";
			echo "</div>";
		}
		else{
			echo '<div class="alert alert-danger">';
  			echo "<strong>Failed!</strong> Item not added. Try again";
			echo "</div>";
		}

		//now move the uploaded image to the htdocs directory

		if (move_uploaded_file($_FILES['a_img']['tmp_name'], $targetA)) {
			$msg = "Image uploaded successfully";
		}else{
			$msg = "There is an error uploading the image";
		}

		if (move_uploaded_file($_FILES['b_img']['tmp_name'], $targetB)) {
			$msg = "Image uploaded successfully";
		}else{
			$msg = "There is an error uploading the image";
		}

		if (move_uploaded_file($_FILES['c_img']['tmp_name'], $targetC)) {
			$msg = "Image uploaded successfully";
		}else{
			$msg = "There is an error uploading the image";
		}

		if (move_uploaded_file($_FILES['d_img']['tmp_name'], $targetD)) {
			$msg = "Image uploaded successfully";
		}else{
			$msg = "There is an error uploading the image";
		}

		if (move_uploaded_file($_FILES['e_img']['tmp_name'], $targetE)) {
			$msg = "Image uploaded successfully";
		}else{
			$msg = "There is an error uploading the image";
		}

		if (move_uploaded_file($_FILES['f_img']['tmp_name'], $targetF)) {
			$msg = "Image uploaded successfully";
		}else{
			$msg = "There is an error uploading the image";
		}


	}

	// if modify button is pressed
	if (isset($_POST['modify_item'])) {
		// connect to database
		include ('connection.php');

		$id = $_POST['id'];
		$brand = $_POST['m_brand'];
		$model = $_POST['m_model'];
		$year = $_POST['m_year'];
		$type = $_POST['m_type'];
		$sizes = $_POST['m_sizes'];
		$processor = $_POST['m_processor'];
		$ram = $_POST['m_ram'];
		$storage = $_POST['m_storage'];
		$battery = $_POST['m_batteryCycle'];
		$cond = $_POST['m_cond'];
		$gpu = $_POST['m_gpu'];
		$bulkPrice = $_POST['m_bulkPrice'];
		$price = $_POST['m_sellPrice'];
		$description = $_POST['m_description'];
		
		$sql = "UPDATE products SET brand = '$brand', model = '$model', year = '$year', type = '$type', size = '$sizes', processor = '$processor', ram = '$ram', storage = '$storage', battery = '$battery', cond = '$cond', gpu = '$gpu', bulkPrice = '$bulkPrice', sellPrice = '$price', availability = '$availability', description = '$description' WHERE id = '$id'";

		$modifyQuery = mysqli_query($db, $sql); // store the submitted data to the database..
		if ($modifyQuery && $id) {
			echo '<div class="alert alert-success">';
  			echo "<strong>Success!</strong> Item modified.";
			echo "</div>";
		}
	}

	// if modify availability button is pressed
	if (isset($_POST['modify_availability'])) {
		// connect to database
		include ('connection.php');

		$id = $_POST['a_id'];
		$availability = $_POST['m_availability'];
		
		$sql = "UPDATE products SET availability = '$availability' WHERE id = '$id'";

		$modifyAQuery = mysqli_query($db, $sql); // store the submitted data to the database..
		if ($modifyAQuery && $id) {
			echo '<div class="alert alert-success">';
  			echo "<strong>Success!</strong> Item availability changed.";
			echo "</div>";
		}
	}

	if (isset($_POST['delete_item'])) {
		// connect to database
		include ('connection.php');

		$id = $_POST['a_id'];
		
		$sql = "DELETE from products WHERE id = '$id'";

		$deleteQuery = mysqli_query($db, $sql); // store the submitted data to the database..
		if ($deleteQuery && $id) {
			echo '<div class="alert alert-success">';
  			echo "<strong>Success!</strong> Item deleted.";
			echo "</div>";
		}
		
			
	}

	// if reupload image button is pressed
	if (isset($_POST['modify_images'])) {
		// the path to store the image
		$targetA = "products/".basename($_FILES['a_img']['name']);
		$targetB = "products/".basename($_FILES['b_img']['name']);
		$targetC = "products/".basename($_FILES['c_img']['name']);
		$targetD = "products/".basename($_FILES['d_img']['name']);
		$targetE = "products/".basename($_FILES['e_img']['name']);
		$targetF = "products/".basename($_FILES['f_img']['name']);

		// connect to database

		include ('connection.php');

		// get all the submitted data from the form

		$aimage = $_FILES['a_img']['name'];
		$bimage = $_FILES['b_img']['name'];
		$cimage = $_FILES['c_img']['name'];
		$dimage = $_FILES['d_img']['name'];
		$eimage = $_FILES['e_img']['name'];
		$fimage = $_FILES['f_img']['name'];

		$id = $_POST['id'];
		$sql = "UPDATE products SET image1 = $aimage, image2 = $bimage, image3 = $cimage, image4 = $dimage, image5 = $eimage, image6 = $fimage WHERE id = '$id";

		mysqli_query($db, $sql); // store the submitted data to the database..

		//now move the uploaded image to the htdocs directory

		if (move_uploaded_file($_FILES['a_img']['tmp_name'], $targetA)) {
			$msg = "Image uploaded successfully";
		}else{
			$msg = "There is an error uploading the image";
		}

		if (move_uploaded_file($_FILES['b_img']['tmp_name'], $targetB)) {
			$msg = "Image uploaded successfully";
		}else{
			$msg = "There is an error uploading the image";
		}

		if (move_uploaded_file($_FILES['c_img']['tmp_name'], $targetC)) {
			$msg = "Image uploaded successfully";
		}else{
			$msg = "There is an error uploading the image";
		}

		if (move_uploaded_file($_FILES['d_img']['tmp_name'], $targetD)) {
			$msg = "Image uploaded successfully";
		}else{
			$msg = "There is an error uploading the image";
		}

		if (move_uploaded_file($_FILES['e_img']['tmp_name'], $targetE)) {
			$msg = "Image uploaded successfully";
		}else{
			$msg = "There is an error uploading the image";
		}

		if (move_uploaded_file($_FILES['f_img']['tmp_name'], $targetF)) {
			$msg = "Image uploaded successfully";
		}else{
			$msg = "There is an error uploading the image";
		}

	}


$pass = $_POST['pass'];

if($pass == "abcd" || $pass == "1234")
{
        include("adminLayout.php");
}
else
{
    if(isset($_POST))
    {echo '
    	<div class="container"></div>
    	<div style="text-align: center; margin-top: 50px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <form method="POST" action="admin.php">
            <h3><span class="glyphicon glyphicon-lock">Password</h3>
            <input type="password" name="pass"></input>
            <input type="submit" name="submit" value="Go"></input>
            </form>
        </div>';
    }
}

include ('footer.php')
?>