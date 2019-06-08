<?php
session_start();

$designation=$_POST['designation'];
$username=$_POST['uname'];
$email=$_POST['email'];
$usertype=$_POST['usertype'];
$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$phone=$_POST['phone'];
$country=$_POST['country'];
$state=$_POST['state'];
$city=$_POST['city'];
$pin=$_POST['pin'];
$divid=$_POST['divid'];
$pass = $_POST['pass'];

$hashpass = password_hash($pass, PASSWORD_DEFAULT);

$userid = $_SESSION['userid'];

$conn=mysqli_connect('localhost','root','','apdcl');
if(!$conn)
{
	die ("Connection fail".mysqli_connect_error());
}

$qry="insert into users (username,password,email,firstname,lastname,designation,usertypes,divid,gender,dob,country,state,city,pincode,phone) values('$username','$hashpass','$email','$firstname' ,'$lastname','$designation' ,'$usertype','$divid','$gender','$dob','$country','$state','$city','$pin','$phone')";

if(password_verify($pass, $hashpass)){
	echo 'success';
}else{
	echo 'invalid pass';
}


if(mysqli_query($conn,$qry))
{
	header("Location: user.php?users=ok");
	$activity="insert into activity (userid,status,description) values ('$userid','INSERT','A new record inserted into damage table and quantity is decreased)";
	mysqli_query($conn,$activity);
	}
else{
	header("Location: user.php?users=ok");
	}

mysqli_close($conn);

?>