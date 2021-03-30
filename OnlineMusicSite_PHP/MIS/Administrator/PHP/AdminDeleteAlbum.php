<?php
session_start();
if(isset($_SESSION['user_id'])==0){
header("location:../../loginpage.php");	
}else{
	require_once('connect.php');
	$id = $_REQUEST['id'];
	$getImage = mysqli_query($connect,"SELECT albumimage FROM tblalbum WHERE id = '".$id."'");
	while($rowImage = mysqli_fetch_array($getImage)){
		$image = $rowImage['albumimage'];	
	}
	unlink("upload_images/album/".$image);
	$deletealbum = mysqli_query($connect,"DELETE FROM tblalbum WHERE id = '".$id."'");
	$deletesong = mysqli_query($connect,"DELETE FROM tblsongs WHERE songalbum = '".$id."'");
	header("Location: AdminViewAlbums.php");
}
?>