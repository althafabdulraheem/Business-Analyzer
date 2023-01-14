<?php

	if(!isset($_SESSION)){
	session_start();}

	$name=$_SESSION['name'];
	$amount=$_POST['amount'];
	$salect=$_POST['types'];
	$mode=$_POST['pmode'];
	$brnch=$_SESSION['branch'];
	

	$conff=mysqli_connect('fdb34.awardspace.net','3954118_trading','althaf@1998','3954118_trading'); 
	if(!$conff)
	{
		echo 'errrorr'.mysqli_connect_error();    //checking connecton
	}
	//if($name=="staff"&&$pass="123")  only taking password as security
	
	
	elseif(isset($_POST['stfsub'])){
	$sqt="SELECT typecat FROM type WHERE type='$salect'";
		$sqtq=mysqli_query($conff,$sqt);
		$sqtd=mysqli_fetch_assoc($sqtq);
		$typepass=$sqtd['typecat'];
		//echo"$typepass";
	//print_r($sqtd);
        $datep=date('d-m-y');
	$sq="INSERT INTO data(name,Trans_Type,Trans_Amount,paymentmode,branch,Trans_Cat,Dates)VALUES('$name','$salect','$amount','$mode','$brnch','$typepass','$datep')";
	$ab=mysqli_query($conff,$sq);
	

	$_SESSION['dataadd']="1";
	echo'<script>window.location.href="staff1.php"</script>';
	}
	else{
		echo'<script>window.location.href="staff1.php"</script>';
	}

	

?>
