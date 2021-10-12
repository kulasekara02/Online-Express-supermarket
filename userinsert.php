
<?php
	;
	
if (isset($_POST['submit'])) {
	include("DBconnection.php");

$CustomerName=$_POST['CustomerName'];
$Address=$_POST['Address'];
$City=$_POST['City'];
$PostalCode=$_POST['PostalCode'];
$Country=$_POST['Country'];
$email=$_POST['email'];	
$password=$_POST['password'];
//$trn_date = date("Y-m-d H:i:s");

//echo $user_fname;
//echo $user_lname;
//echo $user_email;
//echo $user_address;
//echo $user_City;
//echo $user_ZipCode;
//echo $user_password;

	$sql = "INSERT INTO tbl_customer ". "(CustomerName, Address, City, PostalCode,Country,email ,password)"."VALUE('$CustomerName','$Address','$City','$PostalCode','$Country','$email','$password')";
	
	$results = mysqli_query($conn, $sql);
	
	if(!$results) {
	  die('Could not enter data: '.mysqli_error($conn));
	}
	else
	{
  //  echo "Entered data successsfully\n";
	header("Location:account.php");
	}
   }
else
   {
	  //  echo 'submit the form first';
   }
?>
