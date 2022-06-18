<?php
	include "l_dtb.php";
	
if (isset($_POST['log_in'])) {
	$user=$_POST['name'];
	$pass=$_POST['password'];
	
	$query = "SELECT * FROM log_in WHERE name='$user' AND password='$pass'";


	$results = mysqli_query($con, $query);
	
	if (mysqli_num_rows($results) == 1)
	{
	
	header('location: main.php');
	
	}
	else {
		header('location: login.php');
		exit();
	}
}

	
?>