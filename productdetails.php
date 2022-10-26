<?php   
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "sampath_store");  
 
include "DBconnection.php";
 ?>
<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Express supermarket</title>
 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
 
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 </head>
<body style="margin-top: -20px " > 
<div class="header" style="overflow-y: scroll">	
 <div class="container">
<div class="navbar">
	
<div class="logo">
    <h1 style="color:rgb(11, 52, 24);">Online Express <br> supermarket</h1>
</div>
<nav>
<ul style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, 'sans-serif';font-size: 18px">
  	<li><a class="active" href="index.php">Home</a></li>
 
		<li><a class="active" href="ProductCB.php">Baverages</a></li>
	<li><a href="ProductCB2.php">Cooking Essential</a></li>
 	<li><a href="ProductCB3.php">Fruits</a></li>
 	<li><a href="ProductCB4.php">Vegetables</a>	</li>			
	<li><a   href="aboutus.php">About</a></li>
  	<li><a href="contactus.php">Contact Us</a></li>
					
	<li><a href="account.php">Account</a></li>
 
</ul>
</nav>
          
</div>
	
	
  
    </div>
 
	<?php 
		$id = $_GET['id'];
	
 	
	$result = mysqli_query($conn,"SELECT * FROM vegetables WHERE id='" . $id."'");
	$row= $result->fetch_assoc();
	 
 
   	  $pid = $row['id']; 
	  $image = $row['image']; 
	  $pname = $row['name'];
	  $price = $row['price']; 
	  $details = $row['details']; 
	 
	 
	?>

 
 <div class="container single-product" style="margin-top: -20px">
    <div class="row">
        <div class="col-2">
			  <h1><?php echo $pname ; ?></h1>
          <img src="images/Vegetables/<?php echo $image ; ?>"  width="300px" height="300px" >
        </div>
        <div class="col-2">
           
<!--            <h4><?php echo $pid ; ?></h1>-->
            
            
			
			<h2>Price - Rs. <?php echo $price ; ?> /=</h2>
            
            <h2>Product Details</h2>
			<br>
            <p style="font-size: 20px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, 'sans-serif'"><?php echo $details ; ?></p>
        </div>
    </div>
</div>

</div> 
 
 	
<!-----featured categories------>


 
<!-------offer-->
<div class="catergories">
    <div class="small-container">
        <div class="row">
            <div class="col-3">
                <a href="ProductCB4.php"><img src="images/va01.png" alt="" ><figcaption style="text-align: center;font-size: 50px;">Vegetables</figcaption></a>
                
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

<!----testimonial-->

<!-----brands------>

<div class="brands">
    <div class="small-container">
        <div class="row">
            <div class="col-5">
                <img src="images/logo-godrej.png" alt="">
            </div>
            <div class="col-5">
                <img src="images/logo-oppo.png" alt="">
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
                <h3>Online Express supermarket</h3>
                <p>To get in touch with our customer service team email us at customerservice@OnlineExpress.com or give us a call on +94 11 2323540 between 8am to 8pm daily. We look forward to serving you with all grocery needs fresh to your home!</p>
               
            </div>
            <div class="footer-col-2">
                 <h3 >Online Express supermarket</h3>
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
        <p class="copyright">©Online Express
supermarket 2021</p>
    </div>
</div>
</html>>>>>>
	<script type="text/javascript">
function conf()
{
var con=confirm("You Must Log In First. Thank You !");
}
</script>
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/slider.js"></script>
  </body>
</html>


		
	 
 
</body>
</html>>>>>>