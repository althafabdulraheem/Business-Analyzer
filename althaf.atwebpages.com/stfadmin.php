<?php
	session_start();
	
if(!isset($_SESSION['username']))
{
	header("location:index.php");
}	
else{

	
	$stfname=$_SESSION['dtname'];
	
	
	include("databaseconnection.php");
?>



<!DOCTYPE html>
<html>
<head>
	<title>Tradding</title>
	<link rel="icon" href="bag-dash.svg" type="image/png" sizes="16x16">
		<link rel="stylesheet" href="adminphp.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</head>
<style>
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
<body>
<header class="bg-primary border">
			<div class="row text-white">
				<div class="col-md-4 p-2 pt-4 fw-bold">
					&nbsp<?Php echo"hello' $stfname ";?>
				</div>
				<div class="col-md-8 p-2 fw-bold">
					<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  				<div class="container-fluid">
    
				    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				      <span class="navbar-toggler-icon"></span>
				    </button>
				    <div class="collapse navbar-collapse" id="navbarSupportedContent">
				      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
				      	
				        <li class="nav-item">
				          <a class="nav-link " aria-current="page" href="addtype-frnd.php">Add Type</a>
				        </li>
				        <li class="nav-item">
				          <a class="nav-link " aria-current="page" href="reset-frndadmin.php">Reset Password</a>
				        </li>

				        <li class="nav-item">
				          <form class="nav-link" action="index.php" method="get"><input type="submit" value="LogOut" name="logout"></form>
				        </li>
				        <li class="nav-item">
				          <a class="nav-link" href="#">Select From:</a>
				        </li>
				        
				        
						<form class="d-flex" action="searchdataadmin.php" method="get">
						
						<input type="date" name="dts1">
						<li class="nav-item">
				          <a class="nav-link" href="#">To:</a>
				        </li>
						
						<input type="date" name="dts2">
						&nbsp<button class="btn btn-outline-light" type="submit">Search</button>

						
						</form>
		   
        
        
    				</div>
  					</div>
					</nav>
				</div>

			</div>

		</header>
			<br><?php
			$sbr="SELECT branch FROM user WHERE uname='$stfname'";
				$sbrq=mysqli_query($conff,$sbr);
				$sbrd=mysqli_fetch_assoc($sbrq);
				$branch=$sbrd['branch'];?>
			<div class="text-center">
			<h2>Data Sheet:<?php echo"$branch";?></h2>
			</div><?php
			$dt=date('d-m-y');
			$sql="SELECT * FROM data WHERE branch='$branch' AND Dates='$dt'";
			$result=mysqli_query($conff,$sql);
			$x=mysqli_fetch_assoc($result);
			if($x=="")
				{	//echo"<br>";echo"<br>";echo"<br>";echo"<br>";
					//echo"<p align=center><strong>no data</strong></p>";
					include("nodataanim.html");//no data krla visn
				}

				else{
				?>
			<table border=1px>
				<tr>
					<th>DATE</th>
					<th>Amount</th>
					<th>Transaction Type</th>
					<th>Payment Mode</th>
					

				</tr>
				<?php
				//$dt=date('20y-m-d');
                                $dt=date('d-m-y');
				
				$sql="SELECT * FROM data WHERE branch='$branch' AND Dates='$dt'";
				
				
				
				$result=mysqli_query($conff,$sql);
				
				
				
					while ($x=mysqli_fetch_assoc($result)){
						//$date = date('d/m/y', strtotime($x['Dates']));
						
				echo"<tr>
							<td>".$x['Dates']."</td>
							<td>".$x['Trans_Amount']."</td>
							<td>".$x['Trans_Type']."</td>
							<td>".$x['paymentmode']."</td>
							
						
							</tr>";}
				

						}

			?>
		</table>
	</body>
</html>
<?php
}
?>