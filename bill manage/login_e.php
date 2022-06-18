<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Latest compiled and minified CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
		<!-- Latest compiled JavaScript -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/formcss.php">
		<title>Project </title>
	</head>
	
	<body>
		<style>
			body {background-color: lightsteelblue;}
		</style>
		
		<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
			<div class="container-fluid">
				<a class="navbar-brand" href="">Make By</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="mynavbar">
					<ul class="navbar-nav me-auto">
						<li class="nav-item">
							<a class="nav-link" href="login.php">Admin Login</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="login_e.php">Employee Login</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="">Help</a>
						</li>
					</ul>
					
				</div>
			</div>
		</nav>

		
		<form class="form-inline my-2 my-lg-0" action="e_log_v.php" method="POST">
			
			<div class="container mt-5 pt-5">
				
				<div class="row"> <div class="col-12 col-sm-8 col-md-6 m-auto"> 

				<div class="card border-0 shadow"> 
					<div class="card-body">
						
						<svg class="container" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
							<path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
							<path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
							<path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
						</svg>
						
						<div class="text-center mt-3"><a href="login_e.php">Employee</a></div>
						
						<input type="text" name="e_name" class="form-control my-3 py-2" placeholder="User name">
						<input type="password" name="e_password" class="form-control my-3 py-2" placeholder="Password">
						<div class="text-center mt-3">
							<button  class="btn btn-primary" name="e_log_in">Log In</button>
							
						</div>
					</form>
					
				</div>
			</div>
			
		</div>
		
	</div>
</div>


	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>