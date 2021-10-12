<?php
 
	include "DBconnection.php";
	if (isset($_POST['updatedata']))
		
	$targetDir = "images/Baverages/";
$image = basename($_FILES["image"]["name"]);
$targetFilePath = $targetDir . $image;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

 {
		$update_id = $_POST['update_id']; 
		$id = $_POST['id'];
		$name = $_POST['name'];
	 	$details = $_POST['details'];
		$price = $_POST['price'];
		 
	    move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath);

   		$query = "UPDATE baverages SET name='$name', image='$image', price='$price', details='$details'  WHERE id = $update_id ";
		$query_run = mysqli_query($conn, $query);
		
		
	if($query_run)
	{	
	echo "submitted";	
    header('location:bavarages.php') ;     	
	}
	else
	{
	echo "form not submitted";
	}               
}
?>