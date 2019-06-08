<?php
session_start();

$username=$_POST['user'];
$password=$_POST['pass'];

$hashpass = password_hash($password, PASSWORD_DEFAULT);

$con=mysqli_connect('localhost','root','','apdcl');
$resu= mysqli_query( $con, "select * from users where username='$username'");

if(mysqli_num_rows($resu)>0){
	while($row=mysqli_fetch_array($resu)){
		if(password_verify($password, $row['password'])){
			session_unset($_SESSION['usertypes']);
			session_unset($_SESSION['username']);
			session_unset($_SESSION['email']);
			session_unset($_SESSION['userid']);
			$_SESSION['usertypes']= $row['usertypes'];
			$_SESSION['username']= $row['username'];
			$_SESSION['email']= $row['email'];
			$_SESSION['userid']= $row['userid'];
			header('location: show.php');
		}else{
			header('location: index.php?ok=no');
		}
	}
	
}else {

	header('location: index.php?ok=no');
}


mysqli_close($con);

?>