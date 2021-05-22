<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MUSIQUE Music | Feedback Form</title>
<link rel="stylesheet"  type="text/css" href="CSS/index.css"/>
<script type="text/javascript" src="Javascript/jquery-1.6.2.min.js"></script>
<!-- BOOTSTRAP -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- GOOGLE FONTS -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
<style type="text/css">
.FeedBackForm{text-align:left; margin-top:10px;}
#fname,#fmessage,#femail,#faddress{ margin-top:4px; margin-bottom:12px;}
#f{ font-family:Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold; margin-left:2px;}
#sub,#can{ cursor:pointer; width:70px; height:30px; font-family:"Courier New", Courier, monospace; font-weight:600}
#sub:hover,#can:hover{
	color:#06F;
	-moz-box-shadow:0px 0px 5px #B0B0B0;
	-webkit-box-shadow:0px 0px 5px #B0B0B0;
	-khtml-box-shadow:0px 0px 5px #B0B0B0;
	border:1.5em medium #B0B0B0;
}
.menu{
	background-color: #232931;
	color: #fff;
	width:100%;
}
.navbar-light .navbar-brand{
	color: #fff;
}
.formm{
	background-color: #f4bc1c;
  margin-top: -19px;
}
.pcontainer{
	    padding-top: 55px;
			    padding-left: 223px;
}
.container {
  max-width: 400px;
  width: 100%;
  margin: 0 auto;
  position: relative;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea,
#contact button[type="submit"] {
  font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
}

#contact {
  background: #F9F9F9;
  padding: 25px;
  margin: 150px 0;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

#contact h3 {
  display: block;
  font-size: 30px;
  font-weight: 300;
  margin-bottom: 10px;
}

#contact h4 {
  margin: 5px 0 15px;
  display: block;
  font-size: 13px;
  font-weight: 400;
}

fieldset {
  border: medium none !important;
  margin: 0 0 10px;
  min-width: 100%;
  padding: 0;
  width: 100%;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea {
  width: 100%;
  border: 1px solid #ccc;
  background: #FFF;
  margin: 0 0 5px;
  padding: 10px;
}

#contact input[type="text"]:hover,
#contact input[type="email"]:hover,
#contact input[type="tel"]:hover,
#contact input[type="url"]:hover,
#contact textarea:hover {
  -webkit-transition: border-color 0.3s ease-in-out;
  -moz-transition: border-color 0.3s ease-in-out;
  transition: border-color 0.3s ease-in-out;
  border: 1px solid #aaa;
}

#contact textarea {
  height: 100px;
  max-width: 100%;
  resize: none;
}

#contact button[type="submit"] {
  cursor: pointer;
  width: 100%;
  border: none;
  background: #4CAF50;
  color: #FFF;
  margin: 0 0 5px;
  padding: 10px;
  font-size: 15px;
}

#contact button[type="submit"]:hover {
  background: #43A047;
  -webkit-transition: background 0.3s ease-in-out;
  -moz-transition: background 0.3s ease-in-out;
  transition: background-color 0.3s ease-in-out;
}

#contact button[type="submit"]:active {
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
}

.copyright {
  text-align: center;
}

#contact input:focus,
#contact textarea:focus {
  outline: 0;
  border: 1px solid #aaa;
}

::-webkit-input-placeholder {
  color: #888;
}

:-moz-placeholder {
  color: #888;
}

::-moz-placeholder {
  color: #888;
}

:-ms-input-placeholder {
  color: #888;
}
</style>
<script type="text/javascript">
$(document).ready(function(){
	$('.success').delay(4000).fadeOut('normal');
	$('.error').delay(4000).fadeOut('normal');
})
</script>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light menu">
		<a class="navbar-brand " href="#" >MUSIQUE</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav" style="">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-item" href="../index.php" style="color: #f4f3f3;font-family:Montserrat;">HOME</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="Albums.php"style="color: #f4f3f3;font-family:Montserrat;">ALBUMS</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="Licensing.php" style="color: #f4f3f3;font-family:Montserrat;">LICENSING</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="Songs.php" style="color: #f4f3f3;font-family:Montserrat;" >VOTE</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="AboutUs.php" style="color: #f4f3f3;font-family:Montserrat;">ABOUT US</a>
				</li>
			</ul>
		</div>
	</nav>

<nav class="menu_under navbar navbar-light bg-light">
	<form class="form-inline">
		<div class="login" style="color:#232931;font-family:Montserrat;">
						<?php
			$today = date('F j, Y');
			echo '&nbsp;Today is '.$today;
			?>
							&nbsp;&nbsp;&nbsp;<a class=" nav-item btn btn-sm btn-outline-secondary" href="FeedbackForm.php" id="fback">Submit Feedback</a>

							<a class="nav-item btn btn-sm btn-outline-secondary adminbtn" href="../loginpage.php">Admin Login</a>

					<!-- <ul>
							<li><a class="nav-item btn btn-sm btn-outline-secondary" href="loginpage.php">Admin Login</a></li>
					</ul> -->
		</div>
	</form>
</nav>

	<!--Start Menu-->
	<!-- <div class="header_menu">
		<div class="menu">
	    	<ul>
	        	<li><a href="../index.php">HOME</a></li>
	            <li><a href="Albums.php">ALBUMS</a></li>
	            <li><a href="Licensing.php">LICENSING</a></li>
	            <li><a href="Songs.php">VOTE</a></li>
	            <li><a href="AboutUs.php">ABOUT US</a></li>
	            <li><a href="News.php">NEWS</a></li>
	    	</ul>
	    </div>
	</div> -->
	<!--End Menu-->

	<!--Start Container for the web content-->

	<section class="formm">
		<div style="height:60px;">

		</div>
	<div class="playlist_wrapper">

	        <div class="pcontainer">

	        <form id="feedback" method="post" action="Feedback.php">
	        <?php if(isset($_GET['success'])==1){ ?>
	        	<div style="font-family:Montserrat;" class="success">Feedback has been submitted. Thank you!</div>
	        <?php } ?>
	        <?php if(isset($_GET['error'])==1){ ?>
	        	<div style="font-family:Montserrat;"class="error">Opps! All fields are requried</div>
	        <?php }?>
	        	  <h3 style="color:#09F;font-family:Montserrat; font-size:20px">Feedback Form</h3>
	        	<div style="font-family:Montserrat;" class="FeedBackForm" id="FeedBackForm">
	                <label for="fname" id="f">Name</label><br />
	                <input type="text" name="fname" id="fname" size="60" placeholder="Complete Name" required/><br />
	                <label for="femail" id="f">Email Address</label><br />
	                <input type="text" name="femail" id="femail" size="60" placeholder="Email Address" required/><br />
	                <label for="faddress" id="f">Address</label><br />
	                <input type="text" name="faddress" id="faddress" size="60" placeholder="Address" required/><br />
	                <label for="fmessage" id="f">Message</label><br />
	                <textarea name="fmessage" cols="37" rows="8" placeholder="Your Message" id="fmessage" required></textarea>
	            </div>
	            <div>
	            	<input style="font-family:Montserrat;width:100px;" class="btn btn-outline-dark" type="submit" value="Submit" id="sub"/>&nbsp;
								<input style="font-family:Montserrat; width:100px;margin-left: 40px;margin-top: 10px;" class="btn btn-outline-dark" type="reset" value="Cancel" id="can"/>
	            </div>
	        </form>
	        </div>
		</div><!--End Container-->
	<div class="footer_wrapper">
	    <div class="footer_menu">
	    	<ul>
	        	<li>Find the us <a href="Contacts.php">MUSIQUE Music Office</a> or <a href="Contacts.php">contact us</a> for more information</li>
	        </ul>
	        <br /> <br /> <br />
	        <span style="color:#999; font-size:14px; margin-top:10px;">&copy;2012 MUSIQUE Music, Inc.</span>
	    </div>
	</div>
	</section>

</body>
</html>
