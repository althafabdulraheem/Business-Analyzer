<?php
$uname=$_POST['newstaff'];
$password=$_POST['newpassword'];
$type=$_POST['typestaff'];
$branch=$_POST['newbranch'];
//echo"hello $uname $password $type $branch";
$conff=mysqli_connect('fdb34.awardspace.net','3954118_trading','althaf@1998','3954118_trading');
$sql="INSERT INTO user(uname,password,usertype,branch)VALUES('$uname','$password','$type','$branch')";
mysqli_query($conff,$sql);
echo'<script>window.location.href="addstaff-frnd.php"</script>';
?>