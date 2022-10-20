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
    <title>AAA Technologies</title>
 
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
    <h1 style="color:rgb(11, 52, 24);">AAA  <br> Technologies</h1>
</div>
<nav>
<ul style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, 'sans-serif';font-size: 18px">
  	<li><a class="active" href="index.php">Home</a></li>
 
	<li><a class="active" href="ProductCB.php">LAPTOP AND ACCESSORIES</a></li>
	<li><a href="ProductCB2.php">COMPUTER AND ACCESSORIES</a></li>
 	<li><a href="ProductCB3.php">NETWORKING</a></li>
 	<li><a href="ProductCB4.php">PHONES & TABS</a>	</li>			
	<li><a   href="aboutus.php">About</a></li>
  	<li><a href="contactus.php">Contact Us</a></li>			
	<li><a href="account.php">Account</a></li>
 
</ul>
</nav>\avatar\6c26dc3418e96a4e66b6eec57aeba5ed
          
</div>
	
	
  
    </div>
      


 
 <div class="container single-product" style="margin-top: -20px">
    <div class="row">
        <div class="col-2">
			  <h1 style="margin-top:-30px ">About Us</h1>
      
        </div>
        <div class="col-2">
           
            <p style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, 'sans-serif';font-size: 16px">AAA Technologies is proudly Sri Lankan, owned and operated over the last 15 years, delivering the freshest quality products, along with great value, serving thousands of Sri Lankans every day.
<br>
As a subsidiary of the  Online Express Group, Online Express Group operates 11 supermarkets; 19 of which are fully owned and 6 franchise outlets operating under the ‘Super K’ brand. Operating with the core purpose of improving the quality of life for the nation, the supermarkets are conveniently located across the country providing our shoppers with a world class retail experience.
<br>
With a passion for food particularly fresh food, our team of over 4500 people are at the heart of our success as we strive to provide our customers with an enjoyable shopping experience and our stakeholders with long lasting partnerships. With over 7 collection centers in strategic locations Online Express sources fresh produce from farmers and ensures this produce reaches the stores in 24 hours delivering on the promise of freshness. Our SLSI certified bakeries at store provide oven fresh bread and bakery products and our Good Manufacturing Practices (GMP) certified hot kitchens provide the busy customers of today with food to go.
 
 </p>
            
             
           
        </div>
    </div>
</div>

</div> 
 
 	
<!-----featured categories------>
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
        <p class="copyright">©AAA   Technologies  2022
    </div>
</div></body>
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
</html>>>>>>>>>