<?php
if(!isset($_SESSION))
{
session_start();
}
  $_SESSION['put1']="";
   $_SESSION['put2']="";
   $name=$_SESSION['dtname'];


$pass=$_POST["oldpass"];
$newpass=$_POST["newpass"];
$rpass=$_POST["rnewpass"];

$conff=mysqli_connect('fdb34.awardspace.net','3954118_trading','althaf@1998','3954118_trading');
if(!$conff)
{

	echo"no database connectivity";
	die("errr:no found");
}
 $c="SELECT password FROM user WHERE uname='$name'";
  $d=mysqli_query($conff,$c);
  $f=mysqli_fetch_assoc($d);
  $r=$f['password'];
if($pass==$r&&$rpass=="$newpass")
{
  $_SESSION['put1']="";
   $_SESSION['put2']="";
   $a="UPDATE user SET password='$newpass' WHERE uname='$name'";
  $b=mysqli_query($conff,$a);
  header("location:index.php");
}
 elseif($rpass=="$newpass"){
    session_start();
    $_SESSION['put1']="Invalid Password*";
    header("location:reset-frnd.php");
  }
 else{
session_start();
  $_SESSION['put2']="Please check the new password*";
  header("location:reset-frnd.php");
 }  
?>  
   
   

 
 
 



















