<?php 

	include "l_dtb.php";

	if (isset($_POST['upload'])) {
		
		$pname =$_POST['p_name'];
		$pquantity=$_POST['p_quantity'];
		$pbprice =$_POST['pb_price'];
		$phprice =$_POST['ph_price'];
		$psprice =$_POST['ps_price'];

		$sql="INSERT INTO `add_p`(`p_name`,`p_quantity`, `pb_price`, `ph_price`, `ps_price`) VALUES ('$pname','$pquantity','$pbprice','$phprice','$psprice')";

		$result=mysqli_query($con,$sql);


		if ($result) {

			
			header("location:add_p.php");
		}
		else{
			
			header("location:main.php");
		}

	}

	

 ?>