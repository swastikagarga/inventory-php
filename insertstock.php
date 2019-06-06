<?php

session_start();

$mid=$_POST['mid'];
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

$qry="insert into stocks (mid,quantity,grsno,mfgdate,expirydate,rate) values ('$mid','$quantity','$grsno','$mfgdate','$expdate','$rate')";

if(mysqli_query($conn,$qry))
{
	echo "success";
	$activity = "insert into activity (userid, status, description) values('$userid', 'INSERT', 'A new record inserted in Material table')";
    mysqli_query($conn,$activity);
    header("Location: addstock.php?addstock=ok");
	}
else{
    header("Location: addstock.php?addstock=fail");
	}

mysqli_close($conn);

?>