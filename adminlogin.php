<?php   
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "sampath_store");  
$message="";
if(isset($_POST['submit'])){ 

if(count($_POST)>0) {
 include 'DBconnection.php';
	
$result = mysqli_query($conn,"SELECT * FROM  tbl_admin WHERE admin_email='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
$row  = mysqli_fetch_array($result);

if(is_array($row)) {
$_SESSION["id"] = $row['id'];
$_SESSION["name"] = $row['admin_name'];
$_SESSION["email"] = $row['admin_email'];	
} else {
header("Location:adminaccount.php") ;
  $message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["id"])) {
header("Location:adminindex.php");
}

}
	?>