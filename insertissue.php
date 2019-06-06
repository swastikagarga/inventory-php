<?php
session_start();

$usertype = $_SESSION['usertypes'];

$userid = $_SESSION['userid'];


$stockid=$_POST['stockid'];
$mname=$_POST['mid'];
//$date=$_POST['date'];
$issuedto=$_POST['issueto'];
$issuedfrom=$_POST['issuefrom'];
$requisition=$_POST['requisition'];
$dbqty=$_POST['dbqty'];
$issuequan=$_POST['issuequan'];
$mrp=$_POST['mrp'];
$amount= $issuequan* $mrp;
$remarks=$_POST['remarks'];

$conn=mysqli_connect('localhost','root','','apdcl');
if(!$conn)
{
	die ("Connection fail".mysqli_connect_error());
}
$qry="insert into issue (mid,issuedto,issuedfrom,quantityofreq,issuequan,rate,amount,status,remarks) values ('$mname','$issuedto','$issuedfrom','$requisition','$issuequan','$mrp','$amount', 'pending','$remarks')";

if(mysqli_query($conn,$qry))
{
echo "success";
	if(mysqli_affected_rows($conn)==1)
	{	$qty = $dbqty -$issuequan;
		echo 'q'.$qty; 
		echo 's'.$stockid;
		echo 'd'.$dbqty;
		echo ''.$issuequan; 
		$query="update stocks set quantity='$qty' where stockid='$stockid'";
		mysqli_query($conn,$query);
		
			$activity="insert into activity (userid,status,description) values ('$userid','UPDATE','A new record inserted into damage table and quantity is decreased')";
			mysqli_query($conn,$activity);
			$notify="insert into notification (usend,description,whom_to_notify) values ('$userid','there is a item in pending to be approved',1)";
			mysqli_query($conn,$notify);
			header("Location: issue.php?issue_material=ok");
	}
	}
else{

	header("Location: issue.php?issue_material=fail");
	}
mysqli_close($conn);

?>