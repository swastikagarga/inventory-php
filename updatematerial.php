<?php
session_start();

$mid=$_POST['mid'];
$sid=$_POST['catid'];
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

$qry="update materials set catid='$sid',mname='$mname',matcode='$mcode',make='$make',t_id='$type',remarks='$remark' WHERE mid='$mid'";

if(mysqli_query($conn,$qry))
{
	header("Location: editmaterials.php?editmaterial=ok&id=mid");
	$activity="insert into activity (userid,status,description) values ('$userid','INSERT','A new record is updated in materials table')";
	mysqli_query($conn,$activity);
	}
else{
	header("Location: editmaterials.php?editmaterial=fail&id=mid");
	}

mysqli_close($conn);

?>