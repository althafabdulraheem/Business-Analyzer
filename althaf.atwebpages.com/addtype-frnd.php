<?php
session_start();
$stfname=$_SESSION['dtname'];
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Add Type</title>
	<link rel="icon" href="bag-dash.svg" type="image/png" sizes="16x16">
		
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
	<link rel="stylesheet" href="comm.css">
</head>
<body>
	<style>
		h1{

			
			font-family: "Trirong", serif;
 			font-weight: bold;
 			
		}
						.row {
			    --bs-gutter-x: -0.5rem;
			    --bs-gutter-y: 0;
			    display: flex;
			    flex-wrap: wrap;
			    margin-top: calc(var(--bs-gutter-y) * -1);
			    margin-right: calc(var(--bs-gutter-x) * -.5);
			    margin-left: calc(var(--bs-gutter-x) * -.5);
			}
				.navbar-light .navbar-nav .nav-link {
			    color: rgb(236 238 241);
			}
			.navbar-light:hover .navbar-nav:hover .nav-link:hover {
			    color: grey;
			}


	</style>
	<header class="bg-primary border">
			<div class="row text-white">
				<div class="col-md-10 p-2 pt-4 fw-bold">
					&nbsp&nbsp<?php echo"hello' $stfname ";?>
				</div>
				<div class="col-md-2 p-2 fw-bold">
					<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  				<div class="container-fluid">
    
				    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				      <span class="navbar-toggler-icon"></span>
				    </button>
				    <div class="collapse navbar-collapse" id="navbarSupportedContent">
				      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
				      	
				        <li class="nav-item">
				          <a class="nav-link " aria-current="page" href="stfadmin.php">Home</a>
				        </li>
				        <li class="nav-item">
				          <a class="nav-link " aria-current="page" href="index.php">LogOut</a>
				        </li>
				       

						
						</form>
		   
        
        
    				</div>
  					</div>
					</nav>
				</div>

			</div>

		</header>
	<br>
	<h1 align="center">Add The Type</h1>
	<br>

		<div class="container-fluid">
			<form action="staff1.php" method="post">
				<label for="type">&nbspEnter Type </label>
				<input type="text" id="type" placeholder="Enter Type To Be Added" name="type" required>
				<br>
				<br>
				<input type="radio" name="typeadd" id="Etype" value="E" required>
				<label for="Etype" >Expense</label>
				<input type="radio" name="typeadd" id="Itype" value="I" required>
				<label for="Itype">Income</label>
				<br>
				<br>
				<input type="submit" value="SUBMIT" name="sub">
			</form>
		</div>	

</body>
</html>