<?php
session_start();

$tid=$_POST['tid'];
$tname=$_POST['type'];

$userid = $_SESSION['userid'];

$conn=mysqli_connect('localhost','root','','apdcl');
if(!$conn)
{
	die ("Connection fail".mysqli_connect_error());
}

$qry="insert into types (type) values('$tname')";

if(mysqli_query($conn,$qry))
{
	header("Location: adition.php?type=ok");
	$activity="insert into activity (userid,status,description) values ('$userid','INSERT','A new record inserted into type table')";
	mysqli_query($conn,$activity);
	}
else{
	header("Location: adition.php?type=fail");
	}

mysqli_close($conn);

?>