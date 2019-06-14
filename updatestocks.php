<?php
session_start();


$stockid=$_POST['mid'];
$quantity=$_POST['quan'];
$grsno=$_POST['grsno'];
$mfgdate=$_POST['mfgdate'];
$expdate=$_POST['expdate'];
$rate=$_POST['rate'];

$userid = $_SESSION['userid'];



$conn=mysqli_connect('localhost','root','','apdcl');
if(!$conn)
{
	die ("Connection fail".mysqli_connect_error());
}

$qry="update stocks set quantity='$quantity',grsid='$grsno',mfgdate='$mfgdate',expirydate='$expdate',rate='$rate' WHERE stockid='$stockid'";

if(mysqli_query($conn,$qry))
{
	$activity="insert into activity (userid,status,description) values ('$userid','INSERT','A new record is updated in materials table')";
	mysqli_query($conn,$activity);
	header("Location: editstocks.php?editstock=ok&id=mid");
	}
else{
	header("Location: editstocks.php?editstock=fail&id=mid");
	}

mysqli_close($conn);

?>