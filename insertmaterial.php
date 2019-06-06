<?php

session_start();

//$mid=$_POST['mid'];
$catid=$_POST['catid'];
$mcode=$_POST['mcode'];
$mname=$_POST['mname'];

$make=$_POST['make'];
$type=$_POST['type'];
$remark=$_POST['remarks'];

$userid = $_SESSION['userid'];


$conn=mysqli_connect('localhost','root','','apdcl');
if(!$conn)
{
	die ("Connection fail".mysqli_connect_error());
}

$qry="insert into materials (catid,matcode,mname,make,t_id,remarks) values('$catid','$mcode','$mname','$make','$type','$remark')";

if(mysqli_query($conn,$qry))
{
	header("Location: addmaterial.php?add_material=ok");
	$activity = "insert into activity (userid, status, description) values('$userid', 'INSERT', 'A new record inserted in Material table')";
	mysqli_query($conn,$activity);
	}
else{
	header("Location: addmaterial.php?add_material=fail");
	}

mysqli_close($conn);

?>