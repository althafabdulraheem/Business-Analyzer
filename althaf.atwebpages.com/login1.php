<?php
if(!isset($_SESSION))
{
	session_start();}
	?>
<!doctype html>
	<html>
	<head><title>Tradding</title>
		<link rel="icon" href="logo.png" type="image/png" sizes="16x16">
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
		
		input[id=upd]{
			color:white;background-color:#1aff66;font-size: 10px;
  								border-radius: 4px;
		}
		
		body{
			background-color: white;
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
	<body>
			
			
					


	<?php
	
	

	
	$name=$_POST["user"];
	$pass=$_POST["pass"];
	
	

	
	
	
	// $conff=mysqli_connect('fdb34.awardspace.net','3954118_trading','althaf@1998','3954118_trading'); //or die("connection failed");//connecting to db
	$conff=mysqli_connect('localhost','root','','test'); //or die("connection failed");//connecting 

		if(!$conff)
	{
		echo 'errrorr'.mysqli_connect_error();    //checking connecton
	}
	

	if($name=="admin"&&$pass=="123") 
	{
		?>
		<header class="bg-dark ">
			<div class="row text-white">
				
				<div class="col-4 col-md-10 p-2  fw-bold ">
					<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  				<div class="container-fluid">
    
				    <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				      <span class="navbar-toggler-icon "></span>
				    </button>
				    <div class="collapse navbar-collapse" id="navbarSupportedContent">
				      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
				      	
				        <li class="nav-item">
				          <a class="nav-link " aria-current="page" href="addstaff-frnd.php">Add Staff</a>
				        </li>
				        <li class="nav-item">
				          <a class="nav-link " aria-current="page" href="IE-report.php">I E Report</a>
				        </li>
				        
				        <li class="nav-item">
				          <a class="nav-link " aria-current="page" href="index.php">LogOut</a>
				        </li>
				        <li class="nav-item">
				          <a class="nav-link" href="#">Select From:</a>
				        </li>
				        
				        
						<form class="d-flex" action="searchdata.php" method="get">
						
						<input type="date" name="dts1">
						<li class="nav-item">
				          <a class="nav-link" href="#">To:</a>
				        </li>
						
						<input type="date" name="dts2">

						&nbsp&nbsp&nbsp<button class="btn btn-outline-success"  type="submit">Search</button>

						
						</form>
		   
        
        
    				</div>
  					</div>
					</nav>
				</div>
				<div class="col-8 col-md-2 p-2 pt-4 fw-bold">
					&nbsp&nbsp&nbspHello' Admin <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-file-lock2-fill" viewBox="0 0 16 16">
  <path d="M7 6a1 1 0 0 1 2 0v1H7V6z"/>
  <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-2 6v1.076c.54.166 1 .597 1 1.224v2.4c0 .816-.781 1.3-1.5 1.3h-3c-.719 0-1.5-.484-1.5-1.3V8.3c0-.627.46-1.058 1-1.224V6a2 2 0 1 1 4 0z"/>
</svg>
				</div>

			</div>

		</header>
		<br>
		<br>
		
			<br>
			<div class="text-center">
			<h2>Data Sheet <?php $d=date('d-m-y');
			$d1=date('d/m/y');echo":$d1"; ?></h2>
			</div><?php
			$sql="SELECT * FROM data WHERE Dates='$d'";
		
		
		
				$result=mysqli_query($conff,$sql);
			$x=mysqli_fetch_assoc($result);
			if($x=="")
				{	//echo"<br>";echo"<br>";echo"<br>";echo"<br>";
					//echo"<p align=center><strong>no data</strong></p>";
					include("nodataanim.html");
				}

			else{
				?>
			<table border=5px class="table table-bordered table-dark table-hover">
				<tr>
					
					<th>DATE</th>
					<th>Amount</th>
					<th>Transaction Type</th>
					<th>Payment Mode</th>
					

				</tr>
					
					

		<?php
		//$v=isset($_POST['submit']);   	
    			
    			$_SESSION['abc']=" ";
    			$_SESSION['data']="";
	
		$sql="SELECT * FROM data WHERE Dates='$d'";
		
		
		
		$result=mysqli_query($conff,$sql);
		
		
			$sum=0;
			while ($x=mysqli_fetch_assoc($result)) {
				//$date = date('d/m/y', strtotime($x['Dates']));
				$sum=$sum+$x['Trans_Amount'];
			
			echo"<tr>
					<td>".$x['Dates']."</td>
                                        
					<td>".$x['Trans_Amount']."</td>
					<td>".$x['Trans_Type']."</td>
					<td>".$x['paymentmode']."</td>
					
				</tr>
					";}
					
		
			
		}
	}
	else{
			// $test=$_SESSION['username'];
			// echo"$test";	
			$m="SELECT uname,password,usertype FROM user";
			$n=mysqli_query($conff,$m);
			$stfadmin=0;$stfnrml=0;
		if(!isset($_SESSION['success']))
			{	
			$_SESSION['username']=$name;
			$_SESSION['password']=$pass;
			
			}	
			while($b=mysqli_fetch_assoc($n))
			{
				if($b['uname']==$_SESSION['username']&&$b['password']==$_SESSION['password']&&$b['usertype']==1)
				{
					
					$stfadmin=$stfadmin+1;
				}
				elseif($b['uname']==$_SESSION['username']&&$b['password']==$_SESSION['password']){
					$stfnrml=$stfnrml+1;
				}

			}		




	
		
			if($stfadmin==1)
			{	
					$_SESSION['success']="yes";
					if(!isset($_SESSION['dtname']))
					{
						$_SESSION['dtname']=$name;
					}
					echo'<script>window.location.href="stfadmin.php"</script>';
			}
			elseif($stfnrml==1)
			{   
				$_SESSION['success']="yes";
				if(!isset($_SESSION['dtname']))
				{
					$_SESSION['dtname']=$name;
				}
				echo'<script>window.location.href="stfnrml.php"</script>';
                                
			}
                        	
			else{
    			//$x=isset($_POST['submit']);    	
    			
    			$_SESSION['abc']="Invalid Username Or Password*";
                        echo'<script>window.location.href="index.php"</script>';
    		
			
                       }

					
			
					
			
			
    	
    }
	?>		

	
</table>
</body>
</html>
	
	

	
	

    
     
     

		


