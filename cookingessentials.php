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
	$result  = $mysqli->query("SELECT * FROM cookingessential") or die ($mysqli->erorr);	
 
}

 
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

<div class="container" >
 <div class="navbar">
 <div class="logo">
                    <h1 style="color:rgb(11, 52, 24);">Online Express <br> supermarket</h1>
 </div>
			
			
            <nav>
             <ul style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, 'sans-serif';font-size: 18px">
				 
				 
				 
	 <li><a class="active" href="adminindex.php">Home</a></li>
     <li><a href="bavarages.php">Baverages</a></li>
	 <li><a href="cookingessentials.php">Cooking Essentials</a></li>
	 <li><a href="fruits.php">Fruits</a></li>			 
	 <li><a href="vegetables.php">Vegetables</a></li>		 
 	<li><a href="salesupdate.php">Sales</a></li>	
	 <li><a href="salesprediction.php">Sales Prediction</a></li>
	 		 
				 
  
	li><a class="" style="border-radius: 30px;transition: background 0.5s;display: inline-block;padding: 8px 20px;marging:15px 0;"> <i class="fa fa-user-circle"></i> Admin <?php echo $name;?></a> </li>
				 
	<li><a class="" style="border-radius: 30px;transition: background 0.5s;display: inline-block;padding: 8px 20px;marging: 15px 0;" href="userLogout.php">Log Out &nbsp;<i class="fa fa-sign-out"></i></a>  </li> 
 
	
                </ul>
            </nav>
          
        </div>
        <div style="overflow-y: scroll">
          			  
			 
     <button type="button" style="margin: 5px"   data-toggle="modal" data-target="#model" class="btn btn-danger btn-lg"><i class="fa fa-user-secret"></i> &nbsp; Add New Items</button>
	
	<!-- insert model -->
	<div id="model" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  		<div class="modal-dialog" role="document">
   			 <div class="modal-content">
      			<div class="modal-header">
        		<h4 class="modal-title" id="exampleModalLabel1">Add Items</h4>	
				    <button type="button" class="close" data-dismiss="modal">close</i></button>		 
				 <hr>
	<form method="post" action="cookingessentials_manage.php"  enctype="multipart/form-data"> 		
 	<div class="modal-body">  	  
     <input type="text" name="name" class="form-control" placeholder="Name" required/>
    <br>
     <input type="file" name="image" class="form-control" placeholder="Image" required/>
    <br>
     <input type="text" name="price" class="form-control" placeholder="Price" required/>
	<br>
     <input type="text" name="details" class="form-control" placeholder="Details" required/>
    
    <div class="modal-footer">
     
	 <button type="submit" name="submit"  class="btn btn-success"/>Insert Data</button>
     <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> 
		
    </div>
   </div>
  </form>
 </div>
</div> 		  
</div>		
		
    </div>
	<!-- update model --> 		  
	<div align="right" class="col-md-12" style="margin-top: 5px" >	
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Existing Items </h5>
		<form method="post" action="cookingessentials_update.php"  enctype="multipart/form-data"> 	
			
			
			
			
       <button type="button" class="close" data-dismiss="modal">close</button>
		 
      </div> 

      <div class="modal-body">
		  
		  
    <input type="hidden" name="update_id" id="update_id" class="form-control" required/>
	 

   <input type="text" name="id" id="id" class="form-control" placeholder="ID" readonly/>
    <br>
	 <input type="text" name="name" id="name" class="form-control" placeholder="  Name" />
     <br>	  
     <input type="file" name="image" id="image" class="form-control" placeholder="Image" />
     <br>	  
     <input type="text" name="price" id="price" class="form-control" placeholder="Price" />
		  <br>	  
     <input type="text" name="details" id="details" class="form-control" placeholder="Details" />
		  
   <div class="modal-footer">                      	
   <button type="submit" value="submit" id="update_id" name="updatedata" class="btn btn-info">Update</button>                
   <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	   
   	</div>
	</form>	
    </div>
  	</div>
	</div>			
    </div>		  
			  <hr>  
<h1 align="center">Cooking Essentials</h1>
<table class="table table-striped table-hover" id="user-data">
  <thead>
    <tr> 
	  <th scope="span">ID</th>
	  <th scope="col">Name</th>
	  <th scope="col">Image</th>
      <th scope="col">Price</th>
	  <th scope="col">Details</th>
	  <th scope="span" style="width: 40px">Edit</th>
	  <th scope="span">Delete</th>	
    </tr>
  </thead>
  <tbody>
	  <?php 
 		while ($row= $result->fetch_assoc()):  ?>  
	  
    <tr>
     	 <td><?php echo $row['id']; ?></td>
		 <td><?php echo $row['name']; ?></td>
		 <td><img width="35px" height="35px" src="images/Cooking Essential/<?php echo $row['image']; ?>"</td>
		 <td><?php echo $row['price']; ?></td>	 
		 <td><?php echo $row['details']; ?></td>
		 
		 
	   	  
<td><button type="button" class="btn btn-danger btn-lg editbtn"><i class="fa fa-edit" aria-hidden="true"> </i></button></td>
<td><a href="cookingessentials_manage.php?delete= <?php echo $row['id']; ?> " class="btn btn-danger btn-lg"><i class="fa fa-trash"></a></td>
		
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

	  

  <script>
		$(document).ready(function() {
			
			$('.editbtn').on('click', function(){
							 
			$('#editmodal').modal('show');				 
		
				
			$tr = $(this).closest('tr');
				
			var data = $tr.children("td").map(function(){
				
				return $(this).text();
			}).get();	
				
			console.log(data);
					
				$('#update_id').val(data[0]);
				$('#id').val(data[0]);
				$('#name').val(data[1]);
				$('#price').val(data[3]);
				$('#details').val(data[4]);
		 		
		});
	
	});
	
	
	</script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/slider.js"></script>
</body>
</html> 
</html> >>>>