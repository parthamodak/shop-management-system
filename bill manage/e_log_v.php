<?php
	include "l_dtb.php";
	
if (isset($_POST['e_log_in'])) {
	$e_user=$_POST['e_name'];
	$e_pass=$_POST['e_password'];
	
	$query = "SELECT * FROM e_log_in WHERE e_name='$e_user' AND e_password='$e_pass'";


	$results = mysqli_query($con, $query);
	
	if (mysqli_num_rows($results) == 1)
	{
	
	header('location: main.php');
	
	}
	else {
		
	header('location: login_e.php');
		exit();
	}
}

	
?>