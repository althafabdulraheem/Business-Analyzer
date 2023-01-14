<?php
										session_start();
										$_SESSION['unames']="admin";
										$_SESSION['password']="123";
									?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Sheet</title>
	<link rel="stylesheet" href="adminphp.css">
	<link rel="stylesheet" type="text/css" href="comm.css">
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
	<header class="bg-dark border">
			<div class="row text-white">
				<div class="col-md-10 p-2 pt-4 fw-bold">
					&nbsp&nbsp&nbsp<?Php echo"hello' Admin ";?>
				</div>
				<div class="col-md-2 p-2 fw-bold">
					<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  				<div class="container-fluid">
    
				    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				      <span class="navbar-toggler-icon"></span>
				    </button>
				    <div class="collapse navbar-collapse" id="navbarSupportedContent">
				      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
				      	<li class="nav-item">
										      	
				          <a class="nav-link " aria-current="page" href="login1.php">Home</a>
				        </li>
				        
				        <li class="nav-item">
				          <a class="nav-link " aria-current="page" href="index.php">LogOut</a>
				        </li>
				        
        
        
    				</div>
  					</div>
					</nav>
				</div>

			</div>

		</header>
	<table class="table table-dark table-bordered table-hover">
		<tr>
					<th class="table-active">DATE</th>
					<th class="table-active">Amount</th>
					<th class="table-active">Transaction Type</th>
					<th class="table-active">Payment Mode</th>
					
		<tr>
<?php
$conff=mysqli_connect('fdb34.awardspace.net','3954118_trading','althaf@1998','3954118_trading');

$d1=$_GET['dts1'];
$d2=$_GET['dts2'];
$date1=date('d-m-y',strtotime($d1));
$date2=date('d-m-y',strtotime($d2));
?>
<br><br>
<div class="text-center">
<?php echo"<h5><strong>Data From : $date1 to : $date2</strong></h5>";?>
</div>
<br><br>
<?php
$x="SELECT*FROM data WHERE Dates BETWEEN '$date1' AND '$date2'";
$ys=mysqli_query($conff,$x);
  
  while($z=mysqli_fetch_assoc($ys)){
  	$date=date('d-m-y',strtotime($z['Dates']));
 			echo"<tr>
 							<td>".$z['Dates']."</td>
 						
 							<td>".$z['Trans_Amount']."</td>
 							<td>".$z['Trans_Type']."</td>
 							<td>".$z['paymentmode']."</td>
 							</tr>";
}
?>
</table>
</body>
</html>