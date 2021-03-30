<?php
require_once('Administrator/PHP/connect.php');

	$id = $_POST['id'];	
	$ip = $_SERVER['REMOTE_ADDR'];
	$time = time();	
	$timeout = 60*60*24;  //1 day or 24 hours;
	$out = $time - $timeout;
	$check = mysqli_query($connect,"SELECT * FROM tblip WHERE ip='$ip' AND time > '$out' ") or die (mysqli_error());
	if(mysqli_num_rows($check) > 0 ){
		header("Location:index.php?error=1");
	}else{
		$insertip = mysqli_query($connect,"INSERT INTO tblip(ip,time) VALUES ('$ip','$time')")or die(mysqli_error());
		$updatevote = mysqli_query($connect,"UPDATE tblvotes SET vpoints = vpoints + 1 WHERE vid = '$id'") or die(mysqli_error());
		header("Location:index.php?success=1");
	}
?>