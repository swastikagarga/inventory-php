<?php
$sender = $_POST['sender'];
$receiver = $_POST['receiver'];
$message = $_POST['message'];

include('conn.php');

$query = mysqli_query($conn, "INSERT INTO message(sender, receiver, message) VALUES('$sender', '$receiver', '$message')");

if(mysqli_affected_rows($conn)>0){
    header("location: help.php?id=".$receiver);
}else{
    header("location: help.php?ok=no");
}



?>