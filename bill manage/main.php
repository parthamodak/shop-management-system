<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Home</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
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
							
							<a  class="nav-link" href="">employee</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="">Delete Product</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="search.php">Update/Delate</a>
						</li>
						
					</ul>
					<div class="dropdown">
						<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
						Employee
						</button>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
							<li><a class="dropdown-item" href="#">Add Employee </a></li>
							<li><a class="dropdown-item" href="#">Delate action</a></li>
							<li><a class="dropdown-item" href="#">Something else here</a></li>
						</ul>
					</div>
					
					

					<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
						
						
						<li class="nav-item">
							<a class="btn btn-primary" class="nav-link " href="">Sell Product</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-navbar ends->
		<!-show the data->
		<?php
		include "l_dtb.php";
		$show="SELECT * FROM add_p";
		$result=mysqli_query($con,$show);
		?>
		<!-show the data ends->
		<!-show the table->
		
		<div class="container mt-5 pt-5">
			<div class="row">
				
				<div class="col-12 col-sm-8 col-md-6 m-auto">
					<div class="card border-5 shadow">
						<div class="card-body">
							<div>Products </div>
							
							<table class= "table table-hover">
								<thead>
									<tr>
										<th scope="col">Product Id</th>
										<th scope="col">Product Name </th>
										<th scope="col">Product quantity</th>
										<th scope="col">Byeing price</th>
										<th scope="col">Hole selling price</th>
										<th scope="col">single selling price</th>
										
									</tr>
								</thead>
								<tbody>
									<?php
									while ($row= mysqli_fetch_array($result)) {
										
									
									?>
									<tr>
										<td><?php echo $row['id'];  ?> </td>
										<td><?php echo $row['p_name']; ?>  </td>
										<td><?php echo $row['p_quantity'];  ?> </td>
										<td><?php echo $row['pb_price'];?>  </td>
										<td><?php echo $row['ph_price'];?> </td>
										<td><?php echo $row['ps_price'];?> </td>
										
										<?php
										}
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-show the table ends->
			<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
			
		</body>
	</html>