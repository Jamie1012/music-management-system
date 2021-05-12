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
<script type="text/javascript" src="../Javascript/formvalidatealbum.js"></script>
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
	<div style="width:60%;" class="container_wrapper">
	<!--Sidebar-->
	<div style="margin-top:30px;margin-bottom:30px;"class="sidebar_menu">
		<div>
			<h4 style="font-size: 1.5rem;font-family:Montserrat;font-weight:100;margin-left:30px;" class="header">MUSIQUE Menu</h4>
			</div>
			<a style="font-family:Montserrat;font-weight:100;margin-left:30px;font-size:1rem;"  class="btn btn-primary btn-lg" href="AdminViewAlbums.php">&nbsp;View Records</a></li>
	</div>
		<!--End Sidebar-->
<div class="container_wrapper">
    <!--Start Web Content-->
    <div style="margin-left:330px;" class="home_content">
    	<h2 class="header">Album Record Section</h2>
        	<div class="form">
            	<table style="width: 1000px;" border="0" cellpadding="1" cellspacing="0" bgcolor="">
                	<tr style="background-color:#ECECEC;">
                    	<th class="table">ID</th>
											<th class="table">Album</th>
											<th class="table">Singer</th>
											<th class="table">Writer</th>
											<!-- <th class="table">Image</th> -->
											<th width="100px" class="table">Action</th>
                    </tr>
                    <?php
						require_once('connect.php');
						error_reporting(E_ERROR);
						$line = 0;
						$page = 'AdminViewAlbums.php';
						$dataperpage = mysqli_query($connect,"SELECT * FROM tblalbum");
						$numpage = mysqli_num_rows($dataperpage);
						$start = $_GET['start'];
						$eu = $start - 0;
						$limit = 12;
						$thisp= $eu + $limit;
						$back = $eu - $limit;
						$next = $eu + $limit;
						if(strlen($start) > 0 && !is_numeric($start)){
							echo 'Data Error';
							exit();
						}
						$sql = mysqli_query($connect,"SELECT tblalbum.id,tblcategory.catname,tblalbum.albumname,tblalbum.albumsinger,tblalbum.albumwriter,tblalbum.albumimage FROM tblalbum,tblcategory WHERE tblalbum.albumcat = tblcategory.id ORDER BY id ASC LIMIT $eu, $limit");
						while($rowCat = mysqli_fetch_array($sql)){
						if($line == 1){
							$bgcolor='#E0EEF8';
							$line=0;
						}else{
							$bgcolor = '#FFFFFF';
							$line=1;
						}
					?>
                    <tr style="background-color:#fff;" align="center" bgcolor="<?php echo $bgcolor?>">
                    	<td align="center" ><?php echo $rowCat['id']; ?></td>
                        <td align="center"><?php echo $rowCat['albumname'] ;?></td>
                        <td align="center"><?php echo $rowCat['albumsinger'] ;?></td>
                        <td align="center"><?php echo $rowCat['albumwriter'] ;?></td>
                        <!-- <td align="center" width="60"><?php echo "<img src=upload_images/album/$rowCat[albumimage] width=50 height=40"?></td> -->
                        <td align="center" >

                        <a href="AdminViewSongs.php?id=<?php echo $rowCat['id'];?>" class="link">View Songs</a>&nbsp;|&nbsp;
                        <a href="AdminSong.php?id=<?php echo $rowCat['id'];?>" class="link">Add Song</a>&nbsp;|&nbsp;
                        <a href="AdminEditAlbum.php?id=<?php echo $rowCat['id'];?>" class="link">Edit</a>&nbsp;|&nbsp;
                        <a href="AdminDeleteAlbum.php?id=<?php echo $rowCat['id'];?>" class="link" onclick="return confirm('Do you want to delete this?');">Delete</a>
											</td>
                    </tr>

                    <?php
						}

						if($numpage>$limit){
							echo "<table align=center><tr><td align=left width=60>";
							if($back>=0){
								echo "<a href=$page?start=$back>PREV</a>";
							}
							echo "</td><td align=center>";
								$l = 1;
								for($i = 0; $i < $numpage;$i = $i + $limit){
									if($i<>$eu){
										echo "<a href=$page?start=$i><font color=red>$l</font></a>";
									}else{
										echo "<font color=red>$l</font>";
									}
									$l = $l + 1;
								}
							echo "</td><td align=right>";
							if($thisp<$numpage){
								echo "<a href=$page?start=$next>NEXT</a>";
							}
							echo "</td></tr></table>";
						}
					?>
                </table>
            </div>
    </div>
     <!--End Web Content-->
</div>
<!--End Container-->
</body>
</html>

<?php  }?>
