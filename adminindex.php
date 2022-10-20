<?php   
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "sampath_store");  
include "DBconnection.php";  
if(!isset($_SESSION['name']))
{
	header("location:adminindex.php");
}
else
	{
		$id = $_SESSION["id"];
		$name=$_SESSION['name'];
	 		
		$result = mysqli_query($conn,"SELECT * FROM tbl_customer WHERE CustomerID ");
 
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
                   <h1 style="color:rgb(11, 52, 24);">AAA  <br> Technologies</h1>
 </div>
			
			
     <nav>
     <ul style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, 'sans-serif';font-size: 18px">
				 
				 
				 
	 <li><a class="active" href="adminindex.php">Home</a></li>
 
     <li><a href="bavarages.php">LAPTOP AND ACCESSORIES</a></li>
	 <li><a href="cookingessentials.php">COMPUTER AND ACCESSORIES</a></li>
	 <li><a href="fruits.php">NETWORKING</a></li>			 
	 <li><a href="vegetables.php">PHONES & TABS</a></li>	
     <li><a href="salesupdate.php">Sales</a></li>	
	 <li><a href="salesprediction.php">Sales Prediction</a></li>	 
 	

	<li><a class="" style="border-radius: 30px;transition: background 0.5s;display: inline-block;padding: 8px 20px;marging:15px 0;"> <i class="fa fa-user-circle"></i> Admin <?php echo $name;?></a> </li>
				 
	<li><a class="" style="border-radius: 30px;transition: background 0.5s;display: inline-block;padding: 8px 20px;marging: 15px 0;" href="userLogout.php">Log Out &nbsp;<i class="fa fa-sign-out"></i></a>  </li> 
	 </i></a>
</li> 
 
     </ul>
     </nav>
          
        </div>
 <div class="row">
            <div class="col-2">
                <h1 style="color:rgb(11, 110, 24);">EVERYTHING UNDER<br> ONE ROOF</h1>
                <p style="color:rgb(4, 20, 5);font-size:20px;">Buy your products</p>
                    <a href="vegetables.php" class="btn">Expore now &#8594;</a>
            </div>
            <div class="col-2">
                <img src="images/v1.png" alt="">
            </div>
        </div>
    </div>
</div>
 
	
	
<!-----featured categories------>
<div class="catergories">
    <div class="small-container">
        <div class="row">
            <div class="col-3">
                <a href="vegetables.php"><img src="images/va01.png" alt="" ><figcaption style="text-align: center;font-size: 50px;">Vegetables</figcaption></a>
                
            </div>
            <div class="col-3">
                <a href="bavarages.php"><img src="images/c02.png" alt=""><figcaption style="text-align: center;font-size: 50px;">Baverages</figcaption></a>
            </div>
            <div class="col-3">
                <a href="fruits.php"><img src="images/f01.png" alt=""><figcaption style="text-align: center;font-size: 50px;">Fruits</figcaption></a>
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
                <a href="vegetables.php" class="btn">buy now &#8594;</a>
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