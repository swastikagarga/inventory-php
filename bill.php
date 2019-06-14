<?php

session_start();

//$mid=$_POST['mid'];
$grsno=$_POST['grsno'];


$userid = $_SESSION['userid'];


$conn=mysqli_connect('localhost','root','','apdcl');
if(!$conn)
{
	die ("Connection fail".mysqli_connect_error());
}

$qry="insert into billtable (grsno) values('$grsno')";

if(mysqli_query($conn,$qry))
{
    echo "success";
    header("Location: adition.php?bill=ok");
	$activity = "insert into activity (userid, status, description) values('$userid', 'INSERT', 'A new record inserted in bill table')";
	mysqli_query($conn,$activity);
	}
else{
	header("Location: adition.php?bill=fail");
	}

mysqli_close($conn);

?>