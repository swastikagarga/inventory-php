<?php
session_start();

$username=$_POST['user'];
$password=$_POST['pass'];

$con=mysqli_connect('localhost','root','','apdcl');
$resu= mysqli_query( $con, "Select * from users where username='$username' and password ='$password'");
while($row=mysqli_fetch_array($resu))
{
	
	if($row['usertypes']==$row['usertypes'])
	{
		
		$_SESSION['username']=$row['username'];
		$_SESSION['userid']=$row['userid'];
		$_SESSION['usertypes']=$row['usertypes'];
		$_SESSION['userpic']=$row['userpic'];
		
		
		header('location:show.php');
	}
	

else 
   {
	//header('location:index.php');
	echo "else block";
   }
}
mysqli_close($con);

?>