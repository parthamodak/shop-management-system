<?php include "l_dtb.php"; ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Add product</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
	</head>
	<body>

		<style>
			body{
				background-color: lightblue;
			}
		</style>

		<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
			<div class="container-fluid">
				
			
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="mynavbar">
					<ul class="navbar-nav me-auto">
						<li class="nav-item">
							<a  class="nav-link" href="main.php">Home</a>
						</li>
						<li class="nav-item">
							
							<a  class="nav-link" href="">Update product</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="">Delete Product</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="">Serach Product</a>
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
				
					<!---Form for enter the product --->


		<div class="container mt-5 pt-5">
			<div class="row"> <div class="col-12 col-sm-8 col-md-6 m-auto"> <div
				class="card border-0 shadow"> <div class="card-body">
					
					<svg class="container" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-basket-fill" viewBox="0 0 16 16">
						<path d="M5.071 1.243a.5.5 0 0 1 .858.514L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 6h1.717L5.07 1.243zM3.5 10.5a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3z"/>
					</svg>
					
					<div class="text-center mt-3">Add Product</div>
					
					<form  action="add_d.php" method="POST">
						<input type="text" name="p_name" class="form-control my-3 py-2" placeholder="Product Name">
						<input type="text" name="p_quantity" class="form-control my-3 py-2" placeholder="product quantity">
						<input type="text" name="pb_price" class="form-control my-3 py-2" placeholder="Product byeing Price">
						<input type="text" name="ph_price" class="form-control my-3 py-2" placeholder="Hole selling Price">
						<input type="text" name="ps_price" class="form-control my-3 py-2" placeholder="Single selling Price">
						
						<div class="text-center mt-3" >
							<button name="upload" class="btn btn-primary" >Add Product</button>
							
						</div>
					</form>
					
				</div>
			</div>
			
		</div>
		
	</div>
</div>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php 

	if (isset($_SESSION['status']) && $_SESSION['status'] !='') 
	{
		
	

 ?>


<script>

		
	swal({
		title: "<?php echo $_SESSION['status'];  ?>",
		icon: "<?php echo $_SESSION['status_code'] ; ?>",

		button: "Aww yiss!",
		});
</script>
	<?php

	unset($_SESSION['status']);

	}
	?>


</body>
</html>