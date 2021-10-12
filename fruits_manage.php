<?php

$mysqli = new mysqli('localhost','root','','sampath_store') or die(mysqli_error($mysqli));


$targetDir = "images/Fruits/";
$image = basename($_FILES["image"]["name"]);
$targetFilePath = $targetDir . $image;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
 
if (isset($_POST['submit'])){
	
		 
 
		$name = $_POST['name'];
 
		$price = $_POST['price'];
		$details = $_POST['details'];
	
 move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath);
         
	$mysqli->query("INSERT INTO fruits (name, image, price, details) VALUES('$name','$image','$price','$details')") or die($mysqli->error);
	header("location:fruits.php");
	
 
	
}
 

if (isset($_GET['delete'])) {
	$id = $_GET['delete'];
	$mysqli->query("DELETE FROM fruits WHERE id=$id") or die ($mysqli->error());
      
      header("location:fruits.php");
}



?>
 
