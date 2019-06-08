<?php

session_start();

//$mid=$_POST['mid'];
$message=$_POST['msg'];


$userid = $_SESSION['userid'];


$conn=mysqli_connect('localhost','root','','apdcl');
if(!$conn)
{
	die ("Connection fail".mysqli_connect_error());
}

$qry="insert into mesage (sender,message) values('$userid','$message')";

if(mysqli_query($conn,$qry))
{
	echo "success";
	}
else{
	echo "failed";
	}

mysqli_close($conn);

?>