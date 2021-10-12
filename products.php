<?php   
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "sampath_store");  
include "DBconnection.php";  

if(!isset($_SESSION['name']))
{
	header("location:product.php");
}
	$name=$_SESSION['name'];?> 

 

<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online ExpresOnline Express supermarket</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 </head>
<body style="margin-top: -20px">
<div class="header" style="overflow-y: scroll">	
<div class="container">
<div class="navbar">
	
<div class="logo">
    <h1 style="color:rgb(11, 52, 24);">Online Express <br> supermarket</h1>
</div>
<nav>
<ul style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, 'sans-serif';font-size: 18px">
  				 
				 
    <li><a class="active" href="customerindex.php">Home</a></li>
     	
	 	
	
	<li><a class="active" href="products.php">Baverages</a></li>
	<li><a href="products2.php">Cookingessential</a></li>  
	<li><a href="products3.php">Fruits</a></li>  
	<li><a href="products4.php">Vegetables</a></li>  
	
     <li><a data-toggle="tab" href="#cart">Cart &nbsp; <i class="fa fa-shopping-cart"></i>&nbsp;<span class="badge"><?php if(isset($_SESSION["shopping_cart"])) { echo count($_SESSION["shopping_cart"]); } else { echo '0';}?></span></a></li>  
	 
	<li><a class="btn btn-default" href="customerprofile.php"> <i class="fa fa-user-circle"></i>&nbsp; <?php echo $name;?></a> </li>
	<li><a class="btn btn-info" href="userLogout.php">Log Out &nbsp;<i class="fa fa-sign-out"></i></a>  </li> 
	
</ul>
</nav>         
</div>
</div>
 
<div class="productsection" align="center">
          <div class="container-fluid" style="width:1450px;" align="center">    
                <div class="tab-content">  
                     <div id="baverages" class="tab-pane fade in active">  
                     <?php  
                     $query = "SELECT * FROM baverages ORDER BY id ASC";  
                     $result = mysqli_query($connect, $query);  
                     while($row = mysqli_fetch_assoc($result))  
                     {  
                     ?>  
                     <div class="col-md-2" style="margin-top:12px;">  
                          <div style="border:1px solid #333; background-color:#f1f1f7; border-radius:5px; padding:20px; height:400px;" align="center">  
                               <img src="images/Baverages/<?php echo $row["image"]; ?>" class="img-responsive" /><br />  
                              <a href="productdetails1A.php?id=<?php echo $row["id"]; ?>"><?php echo $row["name"]; ?></a></h4> 
                               <h4 class="text-danger">Rs.<?php echo $row["price"]; ?></h4>  
							  
                               <input type="text" name="quantity" id="quantity<?php echo $row["id"]; ?>" class="form-control" value="1" />  
                               <input type="hidden" name="hidden_name" id="name<?php echo $row["id"]; ?>" value="<?php echo $row["name"]; ?>" />  
                               <input type="hidden" name="hidden_price" id="price<?php echo $row["id"]; ?>" value="<?php echo $row["price"]; ?>" />  
                               <input type="button" name="add_to_cart" id="<?php echo $row["id"]; ?>" style="margin-top:5px;" class="btn btn-warning form-control add_to_cart" value="Add to Cart" />  
                          </div>  
                     </div>  
                     <?php  
                     }  
                     ?>  
                     </div>
<div id="cart" class="tab-pane fade">  
                          <div class="table-responsive" id="order_table">  
                               <table class="table table-bordered">  
                                    <tr>  
                                         <th width="40%">Product Name</th>  
                                         <th width="10%">Quantity</th>  
                                         <th width="20%">Price</th>  
                                         <th width="15%">Total</th>  
                                         <th width="5%">Action</th>  
                                    </tr>  
                                    <?php  
                                    if(!empty($_SESSION["shopping_cart"]))  
                                    {  
                                         $total = 0;  
                                         foreach($_SESSION["shopping_cart"] as $keys => $values)  
                                         {                                               
                                    ?>  
                                    <tr>  
                                         <td><?php echo $values["product_name"]; ?></td>  
                                         <td><input type="text" name="quantity[]" id="quantity<?php echo $values["product_id"]; ?>" value="<?php echo $values["product_quantity"]; ?>" data-product_id="<?php echo $values["product_id"]; ?>" class="form-control quantity" /></td>  
                                         <td align="right">Rs.<?php echo $values["product_price"]; ?></td>  
                                         <td align="right">Rs.<?php echo number_format($values["product_quantity"] * $values["product_price"], 2); ?></td>  

                                         <td><button name="delete" class="btn btn-danger btn-xs delete" id="<?php echo $values["product_id"]; ?>">Remove</button></td>  
                                    </tr>  
                                    <?php  
                                              $total = $total + ($values["product_quantity"] * $values["product_price"]);  
                                         }  
                                    ?>  
                                    <tr>  
                                         <td colspan="3" align="right">Total</td>  
                                         <td align="right">Rs.<?php echo number_format($total, 2); ?></td>  
                                         <td></td>  
                                    </tr>  
                                    <tr>  
                                         <td colspan="5" align="right">  
                                              <form method="post" action="cart.php">  
                                                   <input type="submit" name="place_order" class="btn btn-success" value="Place Order" />  
                                              </form>  
                                         </td>  
                                    </tr>  
                                    <?php  
                                    }  
                                    ?>  
                               </table>  
                          </div>  
                     </div>  
                </div>  
           </div>  
	</div>	
	
	</div>
	
	
	
	
	
	


	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	  

    
	  
	  
	  
	  <embed src="http://www.yoursite.com/music/musicfile.wav" autostart="true" loop="false" hidden="true">
	  
	  
	  
	  
	 
	  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/slider.js"></script>
  </body>
</html>

<script>  
 $(document).ready(function(data){  
      $('.add_to_cart').click(function(){  
           var product_id = $(this).attr("id");  
           var product_name = $('#name'+product_id).val();  
           var product_price = $('#price'+product_id).val();  
           var product_quantity = $('#quantity'+product_id).val();  
           var action = "add";  
           if(product_quantity > 0)  
           {  
                $.ajax({  
                     url:"action.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{  
                          product_id:product_id,   
                          product_name:product_name,   
                          product_price:product_price,   
                          product_quantity:product_quantity,   
                          action:action  
                     },  
                     success:function(data)  
                     {  
                          $('#order_table').html(data.order_table);  
                          $('.badge').text(data.cart_item);  
                          alert("Product has been Added into Cart");  
                     }  
                });  
           }  
           else  
           {  
                alert("Please Enter Number of Quantity")  
           }  
      });  
      $(document).on('click', '.delete', function(){  
           var product_id = $(this).attr("id");  
           var action = "remove";  
           if(confirm("Are you sure you want to remove this product?"))  
           {  
                $.ajax({  
                     url:"action.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{product_id:product_id, action:action},  
                     success:function(data){  
                          $('#order_table').html(data.order_table);  
                          $('.badge').text(data.cart_item);  
                     }  
                });  
           }  
           else  
           {  
                return false;  
           }  
      });  
      $(document).on('keyup', '.quantity', function(){  
           var product_id = $(this).data("product_id");  
           var quantity = $(this).val();  
           var action = "quantity_change";  
           if(quantity != '')  
           {  
                $.ajax({  
                     url :"action.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{product_id:product_id, quantity:quantity, action:action},  
                     success:function(data){  
                          $('#order_table').html(data.order_table);  
                     }  
                });  
           }  
      }); 
	
 });
	
	 
 </script>	



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
                    Enjoy the same lowest prices as your local Online ExpresOnline Express supermarket, Express & Food Hall store</p>
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
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/slider.js"></script>
  </body>
</html>

 >>