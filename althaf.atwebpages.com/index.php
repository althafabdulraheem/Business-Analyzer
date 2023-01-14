<?php
session_start();
if(isset($_GET['logout']))
{
	session_destroy();
	include("logout.php");
}
elseif(isset($_SESSION['success']))
{
	header("location:login1.php");
}
else{
			
?>


<!DOCTYPE html>
<head>
	<title>Login Portal</title>
	<link rel="icon" href="logo.png" type="image/png">
	
	<link rel="stylesheet" href="login.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	
	
</head>


<style>
p{
	color: red;


}
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  background:#f5f5f0;
  overflow: hidden;
}
::selection{
  background: rgba(26,188,156,0.3);
}
.container{
  max-width: 440px;
  padding: 0 20px;
  margin: 170px auto;
}
form{
	 padding: 30px 30px 30px 30px;
}
.title{
height: 90px;
  background: #1976D2;
  border-radius: 5px 5px 0 0;
  color: #fff;
  font-size: 30px;
  font-weight: 600;
  display: flex;
  align-items: center;
  justify-content: center;
}.frmfull{
width: 100%;
  background: #fff;
  border-radius: 5px;
  box-shadow: 0px 4px 10px 1px rgba(0,0,0,0.1);
  }
  form .row input::placeholder{
  color: #999;

}
form .row label input:focus{
  border-color: #1976D2;
  box-shadow: inset 0px 0px 2px 2px rgba(26,188,156,0.25);
  background-color:#e6ecff;
}
.frmfull form .row input{
  height: 100%;
  width: 100%;
  outline: none;
  padding-left: 30px;
  border-radius: 5px;
  border: 1px solid lightgrey;
  font-size: 22px;
  transition: all 0.3s ease;
}
.frmfull form .button input{
	color: #fff;
  font-size: 30px;
  font-weight: 500;
  padding-left: 0px;
  background: #1976D2;
  border: 1px solid #16a085;
  cursor: pointer;
}
.frmfull form .button input:hover{
	background-color:#e6ecff;
	color: #1976D2 ;
	border-color: #1976D2;
	}
</style>

<body>
	
	
		
	<div class="container">
	<div class="frmfull">
	<div class="title">L O G I N</div>
	<form action="login1.php" method="post">
			<div class="row">
					<label for="us"><strong>USERNAME&nbsp&nbsp</strong><br><input type="text" id="us" name="user"placeholder="enter a valid username" required></label>
					
					<?php
						//session_start();
						if(!isset($_SESSION['data'])){
							$_SESSION['data']="";

						}
						if(!isset($_SESSION['abc'])){
							$_SESSION['abc']="";

						}

						
						
						
						$alert=$_SESSION['data'];
						if($alert!=""){
							echo'<script>alert("Added Type Successfully")</script>';
						}

						
						
						$name=$_SESSION['abc'];
						echo"<p>$name</p>";
						$name=$_SESSION['abc']="";  
					?>
				</div>
				<br>
				<div class="row">
					<label for="ps"><strong>PASSWORD&nbsp&nbsp</strong><input type="password" id="ps" name="pass" placeholder="enter password"required></label>
				</div>
				<br>
				<div class="row button">
					<input type="submit" value="SUBMIT" name="submit">
				</div>	 
	</form>
	</div>
 </div>



		



</body>

</html>
<?php
}
?>