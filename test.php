<?php 
	// if upload button is pressed
	if (isset($_POST['upload'])) {
		// the path to store the image
		$target = "images/".basename($_FILES['img']['name']);

		// connect to database

		$db = mysqli_connect("localhost", "root", "", "sparna");

		// get all the submitted data from the form

		$image = $_FILES['img']['name'];
		$text = $_POST['description'];

		$sql = "INSERT INTO test (img, description) VALUES ('$image', '$text')";
		mysqli_query($db, $sql); // store the submitted data to the database..

		//now move the uploaded image to the htdocs directory
		if (move_uploaded_file($_FILES['img']['tmp_name'], $target)) {
			$msg = "Image uploaded successfully";
		}else{
			$msg = "There is an error uploading the image";
		}


	}
 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Upload image</title>
</head>
<body>
	<div id="content">
		<form method="post" action="test.php" enctype="multipart/form-data">
			<input type="hidden" name="size" value="1000000">
			<div>
				<input type="file" name="img">
			</div>
			<div>
				
				<select name="description">
					<option value="Selecting 1">A</option>
					<option value="Selecting 1">B</option>
				</select>
			</div>
			<div>
				<input type="submit" name="upload" value="Upload Imgae">
			</div>
		</form>
	</div>
</body>
</html>