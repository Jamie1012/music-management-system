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
<title>BMEG | Administrator Page</title>
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
<!-- <link rel="stylesheet" type="text/css" href="../css/AdminStyle.css" /> -->
<script type="text/javascript" src="../Javascript/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="../Javascript/formValidateEditAlbum.js"></script>
</head>
<script type="text/javascript">
function upload(){
	document.getElementById('form').onsubmit = function(){
		document.getElementById('form').target='uploadframe';
		document.getElementById('status').innerHTML=status;
	}
}
window.onload=upload;
</script>
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
		<a style="font-family:Montserrat;font-weight:100;margin-left:30px;font-size:1rem;"  class="btn btn-primary btn-lg" href="AdminViewAlbums.php">&nbsp;View Records</a></li>
	</div>
		<!--End Sidebar-->
    <!--Start Web Content-->
    <div style="width: 80%;  margin-left: 348px;" class="home_content">
    	<h2 class="header">Albums</h2>
        	<div class="form">
            	<div class="error">Error Message</div>
                <div class="success"></div>		<br><br>
            	<form name="category" method="post" id="form" enctype="multipart/form-data" action="AdminUpdateAlbum.php" target="uploadframe">
                    <div>
                     	<iframe src="" id="uploadframe" name="uploadframe"
                     	style="width:0px; height:0px; border:0px;"></iframe>
                     	</div>
												<br><br>
                	<div>
                    	<label for="Album">Album Cat</label>
                        <select name="txtcat" id="txtcat" style="width:220px;">

                        <?php
							require_once('connect.php');
							$id = $_REQUEST['id'];
							$getAlbum = mysqli_query($connect,"SELECT tblalbum.id,tblalbum.albumcat,tblcategory.id,tblcategory.catname FROm tblalbum,tblcategory WHERE tblcategory.id = tblalbum.albumcat and tblalbum.id='$id'");
							while($rowAlbum = mysqli_fetch_array($getAlbum)){
						?>
                        	<option value="<?php echo $rowAlbum['albumcat'] ?>"><strong><?php echo $rowAlbum['catname']?></strong></option>
                        <?php
							}
						?>
                        <?php
							$getCat = mysqli_query($connect,"SELECT * FROM tblcategory");
							while($rowCat = mysqli_fetch_array($getCat)){
						?>
                        	<option value="<?php echo $rowCat['id']?>"><?php echo $rowCat['catname']?></option>
                         <?php
							}
						 ?>
                        </select>
                    </div>
											<br><br>
                    <?php
						require_once('connect.php');
						$getAlbum = mysqli_query($connect,"SELECT * FROM tblalbum WHERE id = '".$id."'");
						while($rowAlbum = mysqli_fetch_array($getAlbum)){
					?>
                	<div>
                    	<label for="Album">Album Name</label>
                        <input type="text" name="txtalbum" id="txtalbum" placeholder="Album" value="<?php echo $rowAlbum['albumname']?>" size="39"/>
                        <input type="hidden" value="<?php echo $rowAlbum['id']?>" name="id" id="id"/>
                    </div>
											<br><br>
                    <div>
                    	<label for="Singer">Album Singer(s)</label>
                        <input type="text" name="txtsinger" id="txtsinger" placeholder="Singer"  value="<?php echo $rowAlbum['albumsinger']?>"size="39"/>
                    </div>
											<br><br>
                     <div>
                    	<label for="Writer">Album Writer(s)</label>
                        <input type="text" name="txtwriter" id="txtwriter" placeholder="Writer" value="<?php echo $rowAlbum['albumwriter']?>" size="39"/>
                    </div>
											<br><br>
                    <div>
                    	<label for="Description">Description</label>
                        <textarea rows="8" cols="50" placeholder="Album Description" name="txtdesc" id="txtdesc"><?php echo $rowAlbum['albumdesc']?></textarea>
                    </div>
											<br><br>
                    <div>
                    	<label for="Image">Album Cover</label>
                        <input type="file" name="txtimage" id="txtimage"/>
                    </div>
											<br><br>
                    <div>
                    	<input class="btn"type="submit" value="Update Album" id="button1"/>
                        <input class="btn"type="button" id="button2" onclick="window.location.href='AdminViewAlbums.php'" value="Back" />
                    </div>
											<br><br>

                    <?php
						}
					?>
                       </form>
            </div>
    </div>
		<br><br>
     <!--End Web Content-->
</div>
	<br><br>
<!--End Container-->
</body>
</html><?php } ?>
