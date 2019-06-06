<?php

session_start();
$divid=$_POST['divid'];
$divname=$_POST['divname'];

$userid = $_SESSION['userid'];


$conn=mysqli_connect('localhost','root','','apdcl');
if(!$conn)
{
	die ("Connection fail".mysqli_connect_error());
}
$qry="insert into division (divname) values ('$divname')";

if(mysqli_query($conn,$qry))
{
	header("Location: adition.php?div=ok");
	$activity="insert into activity (userid,status,description) values ('$userid','INSERT','A new record inserted into division table')";
	mysqli_query($conn,$activity);
	}
else{
	header("Location: adition.php?div=fail");
	}

mysqli_close($conn);

?>