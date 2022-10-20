

<?php $dbhost='localhost';

$dbuser='root';

$dbpass='';

$conn=mysqli_connect($dbhost,$dbuser,$dbpass);
if(!$conn){
die('could not connect:'.mysqli_error ($conn));
}
//echo'connected successfully';
echo'<br>';

//select the database

$db= mysqli_select_db($conn,'sampath_store');
if(!$db){
echo'select database first';
}else 
 ?>

</body>
</html>
