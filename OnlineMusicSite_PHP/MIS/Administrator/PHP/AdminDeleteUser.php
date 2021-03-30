<?php
require_once('connect.php');
$id = $_REQUEST['id'];
$sql = mysqli_query($connect,"DELETE FROM tblusers WHERE user_id = '$id'") or die(mysqli_error());
echo '<script>alert("1 Record added!");
				window.location.href="AddUser.php"</script>';	
?>