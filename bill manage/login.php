<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		
		<title>Project </title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		
		
	</head>
	
	<body>
		<style>
			body {background-color: lightseagreen;}
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
							<a class="nav-link " href="">Help</a>
						</li>
					</ul>
					<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link" href="">joy</a>
							
						</li>
					</ul>
					
				</div>
			</div>
		</nav>
		
		
		
		
		<div class="container mt-5 pt-5">
			<div class="row"> <div class="col-12 col-sm-8 col-md-6 m-auto"> <div
				class="card border-0 shadow"> <div class="card-body">
					
					<svg class="container" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
						<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
						<path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
					</svg>
					<div class="text-center mt-3"><a href="login_e.php">Employee</a></div>
					<form  action="log_v.php" method="POST">
						<input type="text" name="name" class="form-control my-3 py-2" placeholder="User name">
						<input type="password" name="password" class="form-control my-3 py-2" placeholder="Password">
						<div class="text-center mt-3">
							<button  class="btn btn-primary" name="log_in">Log In</button>
							
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