<?php
 
	include "DBconnection.php";
	if (isset($_POST['updatedata']))
 {
	 
		
		$update_id = $_POST['update_id']; 
		$id = $_POST['id']; 
		$year2019 = $_POST['year2019'];
		$year2020 = $_POST['year2020'];
		$year2021 = $_POST['year2021'];
		$year2022 = $_POST['year2022'];
		$year2023 = $_POST['year2023'];
		$year2024 = $_POST['year2024'];
		$year2025 = $_POST['year2025'];
		$year2026 = $_POST['year2026'];

   		$query = "UPDATE tbl_sales SET year2019='$year2019', year2020='$year2020', year2021='$year2021', year2022='$year2022', year2023='$year2023', year2024='$year2024', year2025='$year2025', year2026='$year2026' WHERE id = $update_id ";
		$query_run = mysqli_query($conn, $query);
		
		
	if($query_run)
	{	
	echo "submitted";	
    header('location:salesupdate.php') ;     	
	}
	else
	{
	echo "form not submitted";
	}               
}
?>