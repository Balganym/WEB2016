<?php 
	include("db.php");
 ?>

 <?php 
 	if($_POST['name']!= "" && $_POST['des']!="" && $_POST['price']!="" && $_POST['type']!="" && $_POST['subtype']!=""){

 		$name = $_POST['name'];
 		$des = $_POST['des'];
 		$type = $_POST['type'];
 		$subtype = $_POST['subtype'];
 		$price = $_POST['price'];
 		$charac = $_POST['charac'];
 		$file = $_FILES['fileToUpload'];
 		
		$target_dir = "images/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		    if($check !== false) {
		        echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        echo "File is not an image.";
		        $uploadOk = 0;
		    }
		}
		
		if (file_exists($target_file)) {
		    echo "Sorry, file already exists.";
		    $uploadOk = 0;
		}
		
		if ($_FILES["fileToUpload"]["size"] > 700000) {
		    echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		}
		
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif") {
		    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk = 0;
		}
		if ($uploadOk == 0) {
		    echo "Sorry, your file was not uploaded.";
		} else {
		    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}

 		$connection->query("INSERT INTO goods(id, name, des, price, url, type, charac,subtype) VALUES(NULL, \"$name\",\"$des\", \"$price\", \"$target_file\", \"$type\", \"$charac\",\"$subtype\")");

		header("Location:managing.php");
	 }
	 else{

		header("Location:managing.php");
	 }

  ?>