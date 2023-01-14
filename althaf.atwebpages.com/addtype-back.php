<?php
		session_start();
		$_SESSION['data']="abc";


	?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Add Type</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
	<link rel="stylesheet" href="comm.css">
</head>
<body>
	<style>
		h1{

			
			font-family: "Trirong", serif;
 			font-weight: bold;
 			margin-left:499px;
		}



	</style>
	<h1>Add The Type</h1>
	<br>
	<form action="login1.php" method="post">
		<label for="type">&nbspEnter Type </label>
		<input type="text" id="type" placeholder="Enter Type To Be Added" name="type" required>
		<input type="submit" value="SUBMIT" name="sub">
	</form>
	
	

</body>
</html>