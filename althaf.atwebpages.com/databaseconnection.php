<?php
	$conff=mysqli_connect('localhost','root','','test'); //or die("connection failed");//connecting 

// $conff=mysqli_connect('fdb34.awardspace.net','3954118_trading','althaf@1998','3954118_trading'); //or die("connection failed");//connecting 

		if(!$conff)
	{
		echo 'errrorr'.mysqli_connect_error();    //checking connecton
	}
?>