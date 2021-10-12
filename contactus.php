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
  <style>



/* Style inputs */
.input1[type=text], select, textarea {
  width: 100%;
  padding: 3px;
  border: 1px solid #ccc;
  margin-top: 3px;
  margin-bottom: 8px;
  resize: vertical;
}

.input1[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 3px 5px;
  border: none;
  cursor: pointer;
}

.input1[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */


/* Create two columns that float next to eachother */
.column1 {
  float: left;
  width: 50%;
  margin-top: 2px;
  padding: 10px;
font-size: 15px;    
}

/* Clear floats after the columns */
.row1:after {
  content: "";
  display: table;
  clear: both;
    font-size: 15px;    
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column1, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
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
 


 
 <div class="container single-product" style="margin-top: -20px">
    <div class="row">
        <div class="col-2">
			  <h1 style="margin-top:-30px ">Contact Us</h1>
      
        </div>
        <div class="col-2">
           
           
				
				<h2>Online Express supermarket Services Pvt </h2>
<h2>No:148, Maxwell Street, Colombo 2, Sri Lanka.</h2>

<h2><i class="fa fa-phone-square fa-2x"></i> +94 11 2323540  <br>
(Daily operating hours 8.00a.m to 11.00p.m)<h1>
 
            
             
           
        </div>
    </div>
</div>

</div> 
 
 	
<!-----featured categories------>
<div class="catergories">
    <div class="small-container">
        <div class="row">
            <div class="col-3">
                <a href="PVegetable.html"><img src="images/va01.png" alt="" ><figcaption style="text-align: center;font-size: 50px;">Vegetables</figcaption></a>
                
            </div>
            <div class="col-3">
                <a href="PBaverages.html"><img src="images/c02.png" alt=""><figcaption style="text-align: center;font-size: 50px;">Baverages</figcaption></a>
            </div>
            <div class="col-3">
                <a href="PFruits.html"><img src="images/f01.png" alt=""><figcaption style="text-align: center;font-size: 50px;">Fruits</figcaption></a>
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
                    Enjoy the same lowest prices as your local Online Express supermarket, Express & Food Hall store</p>
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
                <h3>Download our app </h3>
                <p>Download app for android and ios mobile phones</p>
                <div class="app-logo">
                    <img src="images/play-store.png" alt="">
                    <img src="images/app-store.png" alt="">
                </div>
            </div>
            <div class="footer-col-2">
                <img src="images/logo-white.png" alt="">
                <p>Download app for android and ios mobile phones</p>
            </div>
            <div class="footer-col-3">
                <h3>usful links</h3>
                <ul>
                    <li>coupons</li>
                    <li>blog post</li>
                    <li>return policy</li>
                    <li>join affilitate</li>
                </ul>
            </div>
            <div class="footer-col-4">
                <h3>follow us</h3>
                <ul>
                    <li>facebook</li>
                    <li>twiter</li>
                    <li>instagram</li>
                    <li>youtube</li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="copyright">copyright 2020 - </p>
    </div>
</div>
</body>
</html>>>>>
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
</html>>>>>>>>>>>