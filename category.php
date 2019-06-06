<?php

session_start();
$cid=$_POST['catid'];
$cname=$_POST['catname'];

$userid = $_SESSION['userid'];

$conn=mysqli_connect('localhost','root','','apdcl');
if(!$conn)
{
	die ("Connection fail".mysqli_connect_error());
}

$qry="insert into category (catname) values('$cname')";

if(mysqli_query($conn,$qry))
{
	header("Location: adition.php?cat=ok");
	$activity="insert into activity (userid,status,description) values ('$userid','INSERT','A new record inserted into category table ')";
	mysqli_query($conn,$activity);
	}
else{
	header("Location: adition.php?cat=fail");
	}

mysqli_close($conn);

?>