<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MUSIQUE Music | Company Profile</title>
<!-- fontawesome -->
  <script src="https://kit.fontawesome.com/2364e79f0d.js" crossorigin="anonymous"></script>

<!-- BOOTSTRAP -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- GOOGLE FONTS -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
<script type="text/javascript" src="Javascript/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="Javascript/jquery-1.6.2.min.js"></script>

</head>

<body>
	<nav style="background-color: #232931;
		font-family:Montserrat ;color: #fff; width:100%;" class="navbar navbar-expand-lg navbar-light menu">
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a  style="font-size: 1.25rem;font-weight: 100; color:#f4f3f3;"class="nav-link" href="#" style="color: #f4f3f3;font-family:Montserrat;font-weight:normal;" >MUSIQUE</a>
				</li>
				<li class="nav-item active">
					<a style="font-weight: 100;color: #f4f3f3;"class="nav-link" href="../index.php" >HOME </a>
				</li>
				<li class="nav-item">
					<a style="font-weight: 100;color: #f4f3f3;" class="nav-link" href="Albums.php">ALBUMS</a>
				</li>
				<li class="nav-item">
					<a style="font-weight: 100;color: #f4f3f3;" class="nav-link" href="Licensing.php" >LICENSING</a>
				</li>
				<li class="nav-item">
					<a style="font-weight: 100;color: #f4f3f3;" class="nav-link" href="Songs.php"  >VOTE</a>
				</li>
				<li class="nav-item">
					<a style="font-weight: 100;color: #f4f3f3;" class="nav-link" href="AboutUs.php" >ABOUT US</a>
				</li>
			</ul>
		</div>
	</nav>

	<nav class="menu_under navbar navbar-light bg-light">
	<form style="margin-top: 10px;" class="form-inline">
		<div  style="color:#232931;font-family:Montserrat;margin-top:-10px;font-size:1rem; font-weight: 100;"class="login">
						<?php
			$today = date('F j, Y');
			echo '&nbsp;Today is '.$today;
			?>
							&nbsp;&nbsp;&nbsp;<a class=" nav-item btn btn-sm btn-outline-secondary" href="../Frontend/FeedbackForm.php" id="fback">Submit Feedback</a>

							<a class="nav-item btn btn-sm btn-outline-secondary adminbtn" href="../loginpage.php">Admin Login</a>
					<!-- <ul>
							<li><a class="nav-item btn btn-sm btn-outline-secondary" href="loginpage.php">Admin Login</a></li>
					</ul> -->
		</div>
	</form>
	</nav>
<div class="container_wrapper"><!--Start Container for the web content-->
	<div style="margin-right: 1200px; margin-left:83px;"class="sidebar_menu"><!--Sidebar-->
		<h3 style="font-weight:100;margin-top:15px;">MUSIQUE Music</h3>
					<ul  style="column-count:2; padding-left: 5px;  padding-top: 10px;">
							<li style="list-style-type: none;"><a  style=" text-decoration:none;"class="btn btn-warning" href="AboutUs.php">About Us</a></li>
							<li style="list-style-type: none;"><a  style=" text-decoration:none;"class="btn btn-warning" href="Contacts.php">Contact Us</a></li>
					</ul>
	</div><!--End sidebar-->
	<div style="margin-left: 50px;margin-right: 50px;margin-top: 30px;" class="jumbotron">
<h1 class="display-4">MUSIQUE Company Profile</h1>
<hr class="my-4">
<p>MUSIQUE  is a global music publishing company and contains one of the world's greatest collections of musical compositions, ranging from well-known standards to new songs by emerging artists.</p>

</div>

</div>
</body>
</html>
