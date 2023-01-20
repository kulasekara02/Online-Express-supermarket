<?php   
$connect = mysqli_connect("localhost", "root", "", "sampath_store");  
?>
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
		 
	 
	$mysqli = new mysqli('localhost','root','','sampath_store') or die(mysqli_error($mysqli));
	$result  = $mysqli->query("SELECT * FROM baverages") or die ($mysqli->erorr);	
 
}

 
?>

<?php

$result= mysqli_query($conn,"SELECT SUM(product_price*product_quantity) as average FROM tbl_order_details");
$row = mysqli_fetch_array($result); 
$average = $row['average'] ;
 ?>
<?php
 $result2 = mysqli_query($conn,"SELECT * FROM tbl_sales WHERE id ='" . 100010001 ."'");
$row  = mysqli_fetch_array($result2);	
		
		 
		 $year2019 = $row['year2019'];		
		 $year2020 = $row['year2020'];	
		 $year2021 = $row['year2021'];	
		 $year2022 = $row['year2022'];
 		 $year2023 = $row['year2023'];
		 $year2024 = $row['year2024'];	
		 $year2025 = $row['year2025'];	
		 $year2026 = $row['year2026'];	
		 
	
	?>
<?php
$a[] = $year2019;
$a[] = $year2020;
$a[] = $year2021;
$a[] = $year2022;
$a[] = $year2023;
$a[] = $year2024;
$a[] = $year2025;
$a[] = $year2026;
 
			  
$a = array_filter($a);
$saverage = array_sum($a)/count($a);
 	  
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Welcome <?php echo $name;?></title>

    <link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>

<body style="margin-top: -20px">
    <div class="header">

        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <h1 style="color:rgb(11, 52, 24);">Online Express <br> supermarket</h1>
                </div>


                <nav>
                    <ul
                        style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, 'sans-serif';font-size: 18px">



                        <li><a class="active" href="adminindex.php">Home</a></li>
                        <li><a href="bavarages.php">Baverages</a></li>
                        <li><a href="cookingessentials.php">Cooking Essentials</a></li>
                        <li><a href="fruits.php">Fruits</a></li>
                        <li><a href="vegetables.php">Vegetables</a></li>
                        <li><a href="salesupdate.php">Sales</a></li>
                        <li><a href="salesprediction.php">Sales Prediction</a></li>


                        <li><a class=""
                                style="border-radius: 30px;transition: background 0.5s;display: inline-block;padding: 8px 20px;marging:15px 0;">
                                <i class="fa fa-user-circle"></i> Admin <?php echo $name;?></a> </li>

                        <li><a class=""
                                style="border-radius: 30px;transition: background 0.5s;display: inline-block;padding: 8px 20px;marging: 15px 0;"
                                href="userLogout.php">Log Out &nbsp;<i class="fa fa-sign-out"></i></a> </li>


                    </ul>
                </nav>

            </div>
            <div style="overflow-y: scroll">
                Current Date:
                <input type="text" id="currentDate" readonly>

                <script>
                var today = new Date();
                var date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
                document.getElementById("currentDate").value = date;
                </script>

                <?php echo ("<h1><script>document.write(new Date().getFullYear())</script>Total Sales Turnover : Rs $average </h1>"); ?>

                <h1 class="alert-success">Next Year Sales Turnover Prediction : Rs <?php echo  $saverage ?>"</h1>

                <div id="chartContainer" style="height: 370px; width: 100%;margin-top: 45px"></div>


            </div>
        </div>



    </div>

    <!-----featured categories------>
    <div class="catergories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <a href="ProductCB4.php"><img src="images/va01.png" alt="">
                        <figcaption style="text-align: center;font-size: 50px;">Vegetables</figcaption>
                    </a>

                </div>
                <div class="col-3">
                    <a href="ProductCB.php"><img src="images/c02.png" alt="">
                        <figcaption style="text-align: center;font-size: 50px;">Baverages</figcaption>
                    </a>
                </div>
                <div class="col-3">
                    <a href="ProductCB3.php"><img src="images/f01.png" alt="">
                        <figcaption style="text-align: center;font-size: 50px;">Fruits</figcaption>
                    </a>
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
                        Enjoy the same lowest prices as your local Online Express supermarket, Express & Food Hall store
                    </p>
                    <a href="products.html" class="btn">buy now &#8594;</a>
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
            <p class="copyright">copyright 2021 - </p>
        </div>
    </div>



    <script>
    window.onload = function() {

        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            theme: "dark1", // "light1", "light2", "dark1", "dark2"
            title: {
                text: "Total Sales Turn Over of Every Year"
            },
            axisY: {
                title: "Sales Turn Over (Rs.)"
            },
            data: [{
                type: "column",
                showInLegend: true,
                legendMarkerColor: "blue",
                legendText: "Year",
                dataPoints: [{
                        y: <?php echo   $year2019 ?>,
                        label: "2019"
                    },
                    {
                        y: <?php echo   $year2020 ?>,
                        label: "2020"
                    },
                    {
                        y: <?php echo   $average ?>,
                        label: "2021"
                    },
                    {
                        y: 0,
                        label: "2022"
                    },
                    {
                        y: 0,
                        label: "2023"
                    },
                    {
                        y: 0,
                        label: "2024"
                    },
                    {
                        y: 0,
                        label: "2025"
                    },
                    {
                        y: 0,
                        label: "2026"
                    },

                ]
            }]
        });
        chart.render();

    }
    </script>

    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slider.js"></script>
</body>

</html>

</html> >>>>>>>