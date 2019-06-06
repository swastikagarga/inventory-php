<?php
session_start();

$damid=$_POST['damid'];
$quantity=$_POST['quantity'];
$dbqty = $_POST['dbqty'];


$userid = $_SESSION['userid'];

$conn=mysqli_connect('localhost','root','','apdcl');
if(!$conn)
{
	die ("Connection fail".mysqli_connect_error());
}

$qry="insert into damage (mcode,quantity) values('$damid','$quantity')";


if(mysqli_query($conn,$qry))
{
	
	if(mysqli_affected_rows($conn)==1)
	{

		$qty = $dbqty-$quantity;
		echo $damid;
		$query="update stocks set quantity='$qty' where stockid='$damid'";
		mysqli_query($conn,$query);
		$activity="insert into activity (userid,status,description) values ('$userid','INSERT','A new record inserted into damage table and quantity is decreased')";
		mysqli_query($conn,$activity);

		header("Location: damage.php?damagematerial=ok&id=mid");
	}
	}
else{
	 header("Location: damage.php?damagematerial=fail&id=mid");
	}

mysqli_close($conn);

?>