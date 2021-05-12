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
<title>MUSIQUE | Administrator Page</title>
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
	<div style="width:60%;" class="container_wrapper">
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
    	<h2 class="header">View Album Songs</h2>
                <?php
				require_once('connect.php');
				$id = $_REQUEST['id'];
				$getRows = mysqli_query($connect,"SELECT * FROM tblsongs WHERE songalbum = '$id'");
				if($getRows = mysqli_num_rows($getRows)==0){
					echo '<div class=error>No Songs has been uploaded for this album</div>';
				}else{
				$getSong = mysqli_query($connect,"SELECT
									   tblalbum.albumname,
									   tblalbum.albumimage,
									   tblsongs.songcat,
									   tblsongs.songwriter,
									   tblsongs.songsinger
									   FROM tblsongs,tblalbum WHERE tblalbum.id = tblsongs.songalbum
									   AND songalbum = '".$id."'");

				while($row = mysqli_fetch_array($getSong)){
					$songcat = $row['songcat'];
					$songalbum = $row['albumname'];
					$songwriter = $row['songwriter'];
					$songsinger = $row['songsinger'];
					$albumimage = $row['albumimage'];
				}
				?>
        <table cellpadding="0" cellspacing="0" width="650">
        	<tr>
            	<th class="table" align="left">Songs</th><th class="table"></th>
            </tr>
        	<tr>

     <td width="120" align="center"><?php echo "<img src=upload_images/album/$albumimage width=118 height=118" ?></td>
                <td>
                	<table cellpadding="0" cellspacing="0" class="td_data">
                    	<tr>
                        	<td height="30" class="td_data">Category</td>
                            <td height="30" class="td_data"><strong><?php echo $songcat ?></strong></td>
                        </tr>
                        <tr>
                        	<td height="30" class="td_data">Album</td>
                            <td height="30" class="td_data"><strong><?php echo $songalbum ?></strong></td>
                        </tr>
                        <tr>
                        	<td height="30" class="td_data">Singer</td>
                            <td height="30" class="td_data"><strong><?php echo $songsinger ?></strong></td>
                        </tr>
                        <tr>
                        	<td height="30" class="td_data">Writer</td>
                            <td height="30" class="td_data"><strong><?php echo $songwriter ?></strong></td>
                        </tr>

                    </table>
                </td>
                <tr>
                	<th class="th_data">#</th><th class="th_data">Song Title</th>
                </tr>
                <?php
				$count =0;
				error_reporting(E_ERROR);
				$getSong = mysqli_query($connect,"SELECT songfile FROM tblsongs WHERE tblsongs.songalbum = '$id'");
				while($rowSong = mysqli_fetch_array($getSong)){
				$count++;
				if($line==1){
					$bgcolor = '#FFFFFF';
					$line = 0;
				}else
				{
					$bgcolor='#E0EEF8';
					$line = 1;
				}
				?>
                <tr  style="background-color:#fff;"bgcolor="<?php echo $bgcolor?>">
                	<td  align="center" class="td_class"><?php echo $count?></td>
                	<td  align="center" class="td_class"><?php echo preg_replace("/\\.[^.\\s]{3,4}$/", "", $rowSong['songfile']); ?></td>
                </tr>
                <?php } ?>
          </table>
          <?php
			//}else{
			//	echo 'No song yet';
			}
		  ?>

    </div>
		<br><br>
     <!--End Web Content-->
</div>
</body>
</html><?php }?>
