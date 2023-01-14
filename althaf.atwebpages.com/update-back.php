<?php
include("databaseconnection.php");
session_start();
$name=$_SESSION['name'];
	$amount=$_POST['amount'];
	$salect=$_POST['types'];
	$mode=$_POST['pmode'];
	$brnch=$_SESSION['branch'];
if(isset($_POST['hiddy']))
	{	
	$up=$_POST['hiddy'];
	}

		$q="UPDATE data SET Trans_Amount='$amount',Trans_Type='$salect',paymentmode='$mode' WHERE Trans_Id='$up'"; 
		mysqli_query($conff,$q);
		$_SESSION['update']="Successfuy Edited";
		echo'<script>window.location.href="stfnrml.php"</script>';
	
?>