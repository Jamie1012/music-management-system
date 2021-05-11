<?php
session_start();
if(isset($_SESSION['user_id'])==0){
header("location:../../loginpage.php");
}else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MUSIQUEs | Administrator Page</title>

<!-- BOOTSTRAP -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- GOOGLE FONTS -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
<!-- MATERIALIZE CDN  -->
<!-- Compiled and minified CSS -->
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<script type="text/javascript" src="../Javascript/jquery-1.6.2.min.js"></script>
<script type="text/javascript">

</script>
</head>

<body>
	<nav style=" width: 100%;background-color: #232931;" class="navbar navbar-expand-lg navbar-light menu">
		<a class="navbar-brand " style="color:#f4f3f3;"href="#" >MUSIQUE</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="AdminHome.php" style="color: #f4f3f3;" >HOME <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="AdminCategory.php"style="color: #f4f3f3;">CATEGORIES</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="AdminAlbum.php" style="color: #f4f3f3;">ALBUMS</a>
				</li>
			</ul>
		</div>
	</nav>
	<nav style="
    padding-top: 0px;
    padding-bottom: 0px;
"class="menu_under navbar navbar-light bg-light">
	<form class="form-inline">
		<div style="font-family: Montserrat;color: #232931;"class="login">
						<?php
			$today = date('F j, Y');
			echo '&nbsp;Today is '.$today;
			?>
							<a class="nav-item btn btn-sm btn-outline-secondary adminbtn" href="logout.php">Admin logout</a>
		</div>
	</form>
</nav>
<!--Start Container for the web content-->
<div class="container_wrapper">
	<!--Sidebar-->
	<div style="margin-top:30px;margin-bottom:30px;"class="sidebar_menu">
		<div>
			<h4 style="font-size: 1.5rem;font-family:Montserrat;font-weight:100;margin-left:30px;" class="header">MUSIQUE Menu</h4>
			</div>
			<a style="font-family:Montserrat;font-weight:100;margin-left:30px; font-size:1rem;"  class="btn btn-primary btn-lg" href="Feedbacks.php">&nbsp;Feed Backs</a></li>
			<a style="font-family:Montserrat;font-weight:100;margin-left:30px;font-size:1rem;"  class="btn btn-primary btn-lg" href="AddUser.php">&nbsp;Add User</a></li>
	</div>
    <!--Start Web Content-->
		<!-- Default form login -->
<form style="margin-left: auto;margin-right: auto;width:60%; background-color:#ECECEC;" method="post" action="AdminAddUser.php" name="myform" class="text-center border border-light p-5" >

    <p style="margin-left:10px;font-weight:100;"class="h4 mb-4">Add User</p>

    <!-- Name -->
    <input type="text" name="txtname" id="txtname" placeholder="Complete Name" size="39" class="form-control mb-4">
    <!-- username -->
		<input type="text" name="txtusername" id="txtusername" placeholder="Username" class="form-control mb-4" size="39">
    <!-- Password -->
    <input type="text" name="txtpass"  placeholder="Password" size="39" class="form-control mb-4">

    <div class="d-flex justify-content-around">

    </div>

    <!-- Sign in button -->
		<input  style="width:40%;margin-left: auto;margin-right: auto;" type="submit" value="Add User" id="button1" class="btn btn-md btn-info btn-block my-4" name="add">
			<input style="width:40%;margin-left: auto;margin-right: auto;" type="reset" value="Cancel" class="btn btn-info btn-md btn-block my-4" id="button2"/>


</form>
<!-- Default form login -->
    <div class="home_content">
        	<div >

                <br /><br />
                <table style="width:70%;margin-left: auto;margin-right: auto;margin-top:40px; margin-bottom:40px;"  width="650" border="0" cellpadding="1" cellspacing="0">
                	<tr style="background-color:#ECECEC;">
                    	<th style="font-weight:500;font-size:1.5rem;"class="table">Name</th>
											<th style="font-weight:500;font-size:1.5rem;" class="table">Username</th>
											<th style="font-weight:500;font-size:1.5rem;" class="table">Password</th>
											<th style="font-weight:500;font-size:1.5rem;" class="table">Action</th>
                    </tr>
					<?php
                    require_once('connect.php');
					$line = 0;
                    $getUsers = mysqli_query($connect,"SELECT * FROM tblusers") or die(mysqli_error());
                    while($row = mysqli_fetch_array($getUsers)){
						if($line == 1){
							$bgcolor = '#E0EEF8';
							$line = 0;
						}else{
							$bgcolor = '#FFFFFF';
							$line = 1;
						}
                    ?>
                    <tr style="background-color:#FFF;"align="center" bgcolor="<?php echo $bgcolor?>" height="30">
                    	<td style="padding-left: 10px;"align="center"><?php echo $row['name']?></td>
                        <td style="padding-left: 10px; padding-right:10px;" align="center"><?php echo $row['username']?></td>
                        <td style="padding-left: 10px; padding-right:10px;"  align="center"><?php echo $row['password']?></td>
                        <td style="padding-left: 10px; padding-right:10px;"  align="center" width="120"><a href="AdminEditUser.php?id=<?php echo $row['user_id']?>" class="link">EDIT</a>&nbsp;|&nbsp;<a href="AdminDeleteUser.php?id=<?php echo $row['user_id']?>" class="link" onclick="return confirm('Do you want to delete this?')">DELETE</a></td>
                    </tr>
                    <?php } ?>
                </table>
            </div>

    </div>
     <!--End Web Content-->
</div>
<!--End Container-->

</body>
</html><?php } ?>
