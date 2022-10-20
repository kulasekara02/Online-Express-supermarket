<?php error_reporting(0); ?>
<?php   
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "sampath_store");  
include "DBconnection.php";  
if(!isset($_SESSION['name']))
{
	header("location:product.php");
}
else
	{
	//	$name=$_SESSION['name'];
		//$id = $_SESSION["id"];
	 
		
		$result = mysqli_query($conn,"SELECT * FROM tbl_customer WHERE CustomerID='" . $id."'");
		$row  = mysqli_fetch_array($result);
		
		if($row >0)
		{
		$CustomerName =$row['CustomerName'];
		$Address =$row['Address'];
		$City =$row['City'];
		$PostalCode =$row['PostalCode'];
		$Country =$row['Country'];		
		$password =$row['password'];

		//$id = $_SESSION['id'];		
	 	}
		if($row >0)
		{	
		$mysqli = new mysqli('localhost','root','','sampath_store') or die(mysqli_error($mysqli));	
		$result =  $mysqli->query("SELECT * FROM tbl_order WHERE tbl_order")or die ($mysqli->erorr);	
	
			 
	//$id = $_SESSION['id'];	 
	///	$oid= $_SESSION['order_id'];
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Welcome <?php echo $name;?></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
</head>
<body style="margin-top: -20px">
<div class="header">

<div class="container">
 <div class="navbar">
 <div class="logo">
                    <h1 style="color:rgb(11, 52, 24);">AAA Technologies</h1>
 </div>
			
			
            <nav>
             <ul style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, 'sans-serif';font-size: 18px">
				 
				 
				 
	 <li>  <a class="active" href="customerindex.php">Home</a></li>
<li>  <a class="active" href="products.php">All Products</a></li>
 <li>  <a class="active" href="customerprofile.php">My Profile</a></li>				 
 <li>  <a class="active" href="myorders.php">Orders</a></li>
<li>  <a class="active" href="orderItems.php">Order Details</a></li>




				 
	 <li><a data-toggle="tab" href="#cart">  &nbsp; <i class="fa fa-shopping-cart"></i>&nbsp;<span class="badge"><?php if(isset($_SESSION["shopping_cart"])) { echo count($_SESSION["shopping_cart"]); } else { echo '0';}?></span></a></li> 			 
				 
  
	<li><a class="btn btn-default" href="customerprofile.php"> <i class="fa fa-user-circle"></i>&nbsp; <?php echo $name;?></a> </li>
	<li><a class="btn btn-info" href="userLogout.php">Log Out &nbsp;<i class="fa fa-sign-out"></i></a>  </li> 
 
	
                </ul>
            </nav>
          
        </div>
        <div >
	

<div class="container">

   	 <h2 align="center">My Orders</h2>	
				
				
             
         
	
	
	
	<table class="table table-striped table-hover" align="left" style="margin-top: ">
  <thead>
    <tr style="font-size: 19px">
 		  <th scope="row">Order ID</th>
		  <th scope="row">My ID</th>
		  <th scope="row">Order Date</th>
		  <th scope="row">Order Status</th>
    </tr>
  </thead>
  <tbody align="center"  >
	<?php 
 		while ($row= $result->fetch_assoc()):  ?>  
	  
    <tr style="font-size: 19px">
      <td align="left"><?php echo $row['order_id']; ?> </td>
      <td align="left"><?php echo $row['customer_id']; ?> </td>
	  <td align="left"><?php echo $row['creation_date']; ?></td>
	  <td align="left"><?php echo $row['order_status']; ?></td>
    </tr>
  
  
    
  </tbody>


<?php endwhile; ?>
</table>
	<?php
 	 function pre_r( $array ){
 	 	echo '<pre>';
 	 	print_r($array);
 	 	echo '</pre>';

 	 }
 	 ?>
 	  
	
	
	
	
	
	
	
	
	
	
	
	
	</div>
	
	
	
	
	
	
	</div>
	
	
	</div>	
	
	</div>
	
	
	
<!-----featured categories------>
<div class="catergories">
    <div class="small-container">
        <div class="row">
            <div class="col-3">
                <a href="PProductCB4.php"><img src="images/va01.png" alt="" ><figcaption style="text-align: center;font-size: 50px;">Vegetables</figcaption></a>
                
            </div>
            <div class="col-3">
                <a href="ProductCB.php"><img src="images/c02.png" alt=""><figcaption style="text-align: center;font-size: 50px;">Baverages</figcaption></a>
            </div>
            <div class="col-3">
                <a href="ProductCB3.php"><img src="images/f01.png" alt=""><figcaption style="text-align: center;font-size: 50px;">Fruits</figcaption></a>
            </div>
        </div>
    </div>
</div>

 
<!-------offer-->
<div class="offer">
    <div class="small-container">
        <div class="row">
            <div class="col-2">
                <img src="images/Ban-TxHlZ0NqAe08-CO-DISCOUNT-STORE-WEB-BANNER-new (002).png" class="offer-img">
            </div>
            <div class="col-2">
                <h1>Best Prices & Offers</h1>
                <p>
                    Enjoy the same lowest prices as your local AAA Technologies, Express & Food Hall store</p>
                 <a href="ProductCB4.php" class="btn">buy now &#8594;</a>
            </div>
        </div>
    </div>
</div>

<!----testimonial-->

<!-----brands------>


<div class="brands">
    <div class="small-container">
        <div class="row">
            <div class="col-5">
                <img src="images/logo-godrej.png" alt="">
            </div>
            <div class="col-5">
                <img src="images/logo-coca-cola.png" alt="">
            </div>
            <div class="col-5">
                <img src="images/logo-paypal.png" alt="">
            </div>
            <div class="col-5">
                <img src="images/logo-philips.png" alt="">
            </div>
        </div>
    </div>
</div>


<!----footer---->

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>AAA Technologies</h3>
                <p>To get in touch with our customer service team email us at customerservice@OnlineExpress.com or give us a call on +94 11 2323540 between 8am to 8pm daily. We look forward to serving you with all grocery needs fresh to your home!</p>
               
            </div>
            <div class="footer-col-2">
                 <h3 >AAA Technologies</h3>
                <p>Enter Sri Lanka's freshest online grocery store </p>
            </div>
            <div class="footer-col-3">
                <h3>Customer Benefits</h3>
                <ul>
                    <li>Best Prices </li>
                    <li>Wide Assortment</li>
                    <li>Easy Returns</li>
                    <li>Offers</li>
                </ul>
            </div>
            <div class="footer-col-4">
                <h3>Follow Us</h3>
                <ul>
                    <li>Facebook</li>
                    <li>Twiter</li>
                    <li>Instagram</li>
                    <li>Youtube</li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="copyright">©AAA Technologies</p>
    </div>
</div>
</body>
</html>>>>>>