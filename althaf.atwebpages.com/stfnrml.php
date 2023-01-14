<?php
	session_start();
	if(!isset($_SESSION['username']))
{
	header("location:index.php");
}	
else{

	$name=$_SESSION['dtname'];
	include("databaseconnection.php");
?>

<!doctype html>
	<html>
	<head><title>Tradding</title>
		<link rel="icon" href="bag-dash.svg" type="image/png" sizes="16x16">
		<link rel="stylesheet" href="adminphp.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>



	</head>
	<style>
		input[id=upd]:hover {
  			background-color: red;

  
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
				<div class="col-md-8 p-2 pt-4 fw-bold">
					&nbsp<?Php echo"hello' $name ";?>
				</div>
				<div class="col-md-4 p-2 fw-bold">
					<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  				<div class="container-fluid">
    
				    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				      <span class="navbar-toggler-icon"></span>
				    </button>
				    <div class="collapse navbar-collapse" id="navbarSupportedContent">
				      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
				      	<li class="nav-item">
				          <a class="nav-link " aria-current="page" href="#">Home</a>
				        </li>
				        <li class="nav-item">
				          <a class="nav-link " aria-current="page" href="staff1.php">Add Transaction</a>
				        </li>
				        <li class="nav-item">
				          <a class="nav-link "  href="reset-frnd.php">Reset Pawssord</a>
				        </li>
						<li class="nav-item">
				          <form class="nav-link" aria-current="page" action="index.php" method="get"><input type="submit" value="LogOut" name="logout"></form>
				        </li>
				        
		   
        
        
    				</div>
  					</div>
					</nav>
				</div>

			</div>

		</header>


			<table border=1px>
				<tr>
					
					<th>Amount</th>
					<th>Transaction Type</th>
					<th>Payment Mode</th>
					<th>DATE</th>
					
				</tr>
					<?php
					
					
					$_SESSION['name']=$name;

					$sql="SELECT * FROM data WHERE name='$name'";
					
					
					
					$result=mysqli_query($conff,$sql);
					
					
					
						while ($x=mysqli_fetch_assoc($result)){
							//$te=$x['Trans_Id']; checking trans id
							//print_r($te);
							$date = date('d/m/y', strtotime($x['Dates']));
							
					echo"<tr>
							<form action='update-frnd.php' method='post'>
							
							<td>".$x['Trans_Amount']."</td>
							<td>".$x['Trans_Type']."</td>
							<td>".$x['paymentmode']."</td>
							<td>$date</td>
							<input type='hidden' name='hide1' value=".$x['Trans_Id'].">
							<input type='hidden' name='hide2' value=".$x['Trans_Amount'].">
							<input type='hidden' name='hide3' value=".$x['Trans_Type'].">
							<input type='hidden' name='hide4' value=".$x['paymentmode'].">
							<td><input  type='submit' value='Edit &#128295' name='up' id='upd'></td>
							</form>
							";}
							?>
							</tr>
					<br>
				</table>
						</body>
				</html>
				<?php
}
?>