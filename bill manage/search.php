<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>search product</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	</head>
</head>
<body>
	<!-Navbar->
	
	<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
		<div class="container-fluid">
			
			
			
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="mynavbar">
				<ul class="navbar-nav me-auto">
					<li class="nav-item">
						<a  class="nav-link" href="add_p.php">Add Product</a>
					</li>
					<li class="nav-item">
						
						<a  class="nav-link" href="">Update product</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="">Delete Product</a>
					</li>
					<li class="nav-item">
						<a class="nav-link " href="search.php">Serach Product</a>
					</li>
					
				</ul>
				
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					
					
					<li class="nav-item">
						<a class="btn btn-primary" class="nav-link " href="">Sell Product</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-navbar ends->
	<div class="container">
		<form action="" method="POST">
			<div class="input-group mb-3">
				<input type="text" name="p_name" class="form-control" placeholder="search  the data">
				<button type="submit" name="search" class="btn btn-info">search</button>
			</div>
		</form>
	</div>
	
	
	<?php
	include "l_dtb.php";
	if (isset($_POST['search']))
	{
		$name=$_POST['p_name'];
		$query="SELECT * FROM `add_p` WHERE p_name='$name' ";
		$query_run=mysqli_query($con,$query);
		while ($row =mysqli_fetch_array($query_run))
		{
	?>
	
	<div class="container mt-5 pt-5">
		<div class="row">
			<div class="col-12 col-sm-8 col-md-6 m-auto">
				<div class="card border-2 shadow">
					<div class="card-body">
						
						
						<form action="" method="POST">
							<input type="hidden" class="form-control my-3 py-2" name="id"         value="<?php echo $row['id']; ?>">    </br>
							<input type="text" class="form-control my-3 py-2"  name="p_name" 	 value="<?php echo $row['p_name']; ?>"> </br>
							<input type="text" class="form-control my-3 py-2" name="p_quantity" value="<?php echo $row['p_quantity'];?>"></br>
							<input type="text" class="form-control my-3 py-2" name="pb_price"   value="<?php echo $row['pb_price']; ?>"></br>
							<input type="text" class="form-control my-3 py-2" name="ph_price"   value="<?php echo $row['ph_price']; ?>"></br>
							<input type="text" class="form-control my-3 py-2" name="ps_price"   value="<?php echo $row['ps_price']; ?>"></br>
							<button type="submit" name="update"  class="btn btn-success"> Update</button>
							<button type="submit" name="delate"  class="btn btn-danger"> Delate</button>
						</form>
					</div>
				</div>
				
			</div>
			
		</div>
	</div>
	<?php
	}
	}
	?>
</body>
</html>
<?php
include "l_dtb.php";
if (isset($_POST['update']))
{
	$id1= $_POST['id'];
	$pname =$_POST['p_name'];
	$pquantity=$_POST['p_quantity'];
	$pbprice =$_POST['pb_price'];
	$phprice =$_POST['ph_price'];
	$psprice =$_POST['ps_price'];
	$sql="UPDATE `add_p` SET `p_name`='$pname',`p_quantity`='$pquantity',`pb_price`='$pbprice',`ph_price`='$phprice',`ps_price`='$psprice' WHERE id='$id1'";
	$result=mysqli_query($con,$sql);
	if ($result)
	{
echo '<script> alert("Data Updated") </script>';
header("location:main.php");
}
else
{
echo '<script> alert("Data not Updated") </script>';
header("location:search.php");
}
}
?>