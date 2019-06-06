<?php
session_start();

$sdivid=$_POST['sdivid'];
$sdivname=$_POST['sdivname'];
$divid=$_POST['divid'];

$userid = $_SESSION['userid'];

$conn=mysqli_connect('localhost','root','','apdcl');
if(!$conn)
{
	die ("Connection fail".mysqli_connect_error());
}

$qry="insert into subdivision (sdivname,divid) values('$sdivname','$divid')";

if(mysqli_query($conn,$qry))
{
	header("Location: adition.php?sdiv=ok");
	$activity="insert into activity (userid,status,description) values ('$userid','INSERT','A new record inserted into subdivision table')";
	mysqli_query($conn,$activity);
	//header('location:division.php');
	}
else{
	header("Location: adition.php?sdiv=fail");
	}

mysqli_close($conn);

?>