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

$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$conn=mysqli_connect('localhost','root','','apdcl');
if(!$conn)
{
	die ("Connection fail".mysqli_connect_error());
}

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
			$mail->addAddress($email, 'Dev');     // Add a recipient//from db get this email
			//$mail->addAddress('vikas.appdev@gmail.com');               // Name is optional
			//$mail->addReplyTo('manishmundra00@gmail.com', 'Information');
			//$mail->addCC('cc@example.com');
			//$mail->addBCC('bcc@example.com');
		
			//Attachments
			//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
			//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	
			//Content
			$mail->isHTML(true);                                  // Set email format to HTML
			$mail->Subject = $subject;
			$mail->Body    = 'Hi Name ,<br><b>'.$message.$last_id.'</b><br> ';
			$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
		
			$mail->send();
            //echo 'You will get an email soon <br>';
            header("Location: contactdeveloper.php");
		} catch (Exception $e) {
			echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
		}
		
?>