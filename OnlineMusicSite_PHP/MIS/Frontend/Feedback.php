<?php
require_once('../Administrator/PHP/connect.php');

if($_POST['fname'] == ""){
	header("Location:FeedbackForm.php?error=1");	
}else{
	$name    = $_POST['fname'];
	$email   = $_POST['femail'];
	$address = $_POST['faddress'];
	$message = $_POST['fmessage'];
	$feedback = mysqli_query($connect,"INSERT INTO tblfeedback(name,email,address,message) VALUES 
			('".$name."','".$email."','".$address."','".$message."')") or die (mysqli_error());
	header("Location:FeedbackForm.php?success=1");		
}
?>