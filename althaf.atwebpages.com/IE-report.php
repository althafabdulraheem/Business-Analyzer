<?php
										session_start();
										$_SESSION['unames']="admin";
										$_SESSION['password']="123";
									
$conff=mysqli_connect('fdb34.awardspace.net','3954118_trading','althaf@1998','3954118_trading'); //or die("connection failed");//connecting 

		if(!$conff)
	{
		echo 'errrorr'.mysqli_connect_error();    //checking connecton
	}
	?>
<DOCTYPE html>
	<html>
	<head>
		

		<link rel="stylesheet" href="sales.css">
		<title>Tradding-Report</title>

		<meta charset="UTF-8">
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
<br><br>		
<h5 class="fs-32" align="center"><strong>Income Expense Report</strong></h5>
<br><br>
<table border=5px class="table table-bordered table-dark table-hover">
  <tr>
    <th style='font-size:40px;' rowspan="2">Date</th>
    <th style='font-size:40px;' colspan="2">Income<span style='font-size:40px; color:transparent; text-shadow: 0 0 white'>&#128176;</span></th>
    <th style='font-size:40px;' colspan="2">Expense<span style='font-size:40px; color:transparent; text-shadow: 0 0 white'>&#128176;</span></th>
  </tr>
  <tr class="table-active">
  	
  	<th>type</th>
  	<th>amount</th>
  	<th>type</th>
  	<th>amount</th>
  </tr>
  <?php
  $sql="SELECT * FROM data" ;
  
		$sql2="SELECT Trans_Cat FROM data";
		$sql2q=mysqli_query($conff,$sql2);
		//$sql2d=mysqli_fetch_assoc($sql2q);
		
		while($sql2d=mysqli_fetch_assoc($sql2q)){


		//echo"$sql2d[type]";

	}
		
		
		
		
			
			$sume=0;
			$sumi=0;
			$dd="";
			$ff="";
			$result=mysqli_query($conff,$sql);
			while ($x=mysqli_fetch_assoc($result)) {
				$date = date('d/m/y', strtotime($x['Dates']));
					
				
				if($x['Trans_Cat']=='E'){
					$ff=$x['Trans_Type'];
					$dd=$x['Trans_Amount'];
					
					$x['Trans_Amount']="";
					$x['Trans_Type']="";
					$sume=$sume+$dd;
					
				}
					
					//$sumi=$sumi+$xx;

				
			echo"<tr>
					<td>".$x['Dates']."</td>
					<td style='font-weight:bold'>".$x['Trans_Type']."</td>
					
					<td style='font-weight:bold'>".$x['Trans_Amount']."</td>
					
					<td style='font-weight:bold'>$ff</td>
					<td style='font-weight:bold'>$dd</td>
				
					
				</tr>";
				$ff="";
				$dd="";
					} 
					$sumeq="SELECT * FROM data WHERE Trans_cat='I'";
					$sumeqq=mysqli_query($conff,$sumeq);
					
					while($sumeqd=mysqli_fetch_assoc($sumeqq)){
						$sumi=$sumi+$sumeqd['Trans_Amount'];

					}
	?>
	<tr class="table-secondary">
		<th style='color: black;font-weight:bold;font-size: 35px;'>Total</th>
		<th style='color: black;font-weight:bold;font-size: 35px;' colspan="2">&#x20B9 <?php echo"$sumi";?></th>
		<th style='color: black;font-weight:bold;font-size: 35px;' colspan="2">&#x20B9 <?php echo"$sume";?></th>
	</tr>		
</table>
</body>
</html>