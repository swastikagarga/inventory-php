<?php
session_start();

$opass=$_POST['opass'];
$npass=$_POST['npass'];
$cpass=$_POST['cpass'];


$userid = $_SESSION['userid'];

$conn=mysqli_connect('localhost','root','','apdcl');
if(!$conn)
{
	die ("Connection fail".mysqli_connect_error());
}


if($npass=$cpass)
{
	$qry="update users set password='$npass' where password='$opass' AND userid='$userid'";
	if(mysqli_query($conn,$qry))
{
    echo "success";
	
	$activity="insert into activity (userid,status,description) values ('$userid','INSERT','password has been changed')";
    mysqli_query($conn,$activity);
    header("Location: account.php?password=ok");
	}
else{
	header("Location: account.php?password=fail");
	}
}
mysqli_close($conn);

?>