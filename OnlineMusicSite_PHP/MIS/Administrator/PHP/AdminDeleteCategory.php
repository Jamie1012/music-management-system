<?php
session_start();
if(isset($_SESSION['user_id'])==0){
header("location:../../loginpage.php");	
}else{
	require_once('connect.php');
	$id = $_REQUEST['id'];
	$getimage = mysqli_query($connect,"SELECT catimage FROM tblcategory WHERE id = '".$id."'");
	while($rowImage = mysqli_fetch_array($getimage)){
		  $image = $rowImage['catimage'];	
	}
	unlink("upload_images/category/".$image);
	$delete = mysqli_query($connect,"DELETE FROM tblcategory WHERE id = '".$id."'") or die ('An error occured '.mysqli_error());
	$delete = mysqli_query($connect,"DELETE FROM tblalbum WHERE albumcat = '".$id."'")or die ('An error occured '.mysqli_error());
	header("Location:AdminViewCategory.php");
}
?>