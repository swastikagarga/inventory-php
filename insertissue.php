<?php
session_start();

$usertype = $_SESSION['usertypes'];

$userid = $_SESSION['userid'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

 require("mail/PHPMailer.php");
 require("mail/SMTP.php");
 require("mail/Exception.php");
$mail = new PHPMailer(true);



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
	{	
		
		$last_id = mysqli_insert_id($conn);

		try {
			//Server settings
			//$mail->SMTPDebug = 2;                                 // Enable verbose debug output
			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = 'mail4automate@gmail.com';                 // SMTP username
			$mail->Password = 'm@il4test';                           // SMTP password
			$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 587;                                    // TCP port to connect to
		
			//Recipients
			$mail->setFrom('mail4automate@gmail.com', 'Apdcl');
			$mail->addAddress('devanganagarg520@gmail.com', 'Dev');     // Add a recipient//from db get this email
			//$mail->addAddress('vikas.appdev@gmail.com');               // Name is optional
			//$mail->addReplyTo('manishmundra00@gmail.com', 'Information');
			//$mail->addCC('cc@example.com');
			//$mail->addBCC('bcc@example.com');
		
			//Attachments
			//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
			//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	
			//Content
			$mail->isHTML(true);                                  // Set email format to HTML
			$mail->Subject = 'Mail From APDCL intern app';
			$mail->Body    = 'Hi Name ,<br><b>There is a item to approve with id: '.$last_id.'</b><br> ';
			$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
		
			$mail->send();
			//echo 'You will get an email soon <br>';
		} catch (Exception $e) {
			echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
		}
		

		
		$qty = $dbqty -$issuequan;
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