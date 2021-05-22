<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- <link rel="stylesheet" type="text/css" href="CSS/index.css"/> -->
<title>MUSIQUE Music | Song Vote</title>

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
<style>
#container{ width:90%; height:100px;}
#info{ height:80px; width:100%; position:relative; float:left; position:relative; top:8px; padding:0px}
</style>
</head>

<body>
	<nav style="background-color: #232931;
    color: #fff;" class="navbar navbar-expand-lg navbar-light menu">
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a  style="font-size: 1.25rem; color:#f4f3f3;"class="nav-link" href="#" style="color: #f4f3f3;" >MUSIQUE</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="../index.php" style="color: #f4f3f3;" >HOME </a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="Albums.php"style="color: #f4f3f3;">ALBUMS</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="Licensing.php" style="color: #f4f3f3;">LICENSING</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="Songs.php" style="color: #f4f3f3;" >VOTE</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="AboutUs.php" style="color: #f4f3f3;">ABOUT US</a>
				</li>
			</ul>
		</div>
	</nav>

<nav class="menu_under navbar navbar-light bg-light">
  <form class="form-inline">
		<div class="login">
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

   <div class="songcolumn">
   		<div class="header_title"><h1>&nbsp;Song List Ranking</h1></div>
        	<?php
			require_once('../Administrator/PHP/connect.php');
			error_reporting(E_ERROR);
			$page = 'SongRank.php';
			$dataperpage = mysqli_query($connect,"SELECT * FROM tblsongs");
			$numpage = mysqli_num_rows($dataperpage);
			$start = $_GET['start'];
			$eu = $start - 0;
			$limit = 8;
			$thisp= $eu + $limit;
			$back = $eu - $limit;
			$next = $eu + $limit;
			if(strlen($start) > 0 && !is_numeric($start)){
				echo 'Data Error';
				exit();
			}
			$getVotes = mysqli_query($connect,"SELECT tblalbum.id,tblalbum.albumname,tblalbum.albumimage,tblsongs.songsinger,tblsongs.songpoints FROM tblalbum,tblsongs WHERE tblsongs.songalbum = tblalbum.id ORDER BY songpoints DESC LIMIT $eu,$limit");
			while($row = mysqli_fetch_array($getVotes)){
			$r = rand(128,255);
			$g = rand(128,255);
			$b = rand(128,255);
			$color = dechex($r).dechex($g).dechex($b);
			?>
			<div style="    margin-left: 70px;" id="container"><!--Data container-->
                <div id="info">
                	<table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td><img style="border-radius:15px;"src="../Administrator/PHP/upload_images/album/<?php echo $row['albumimage']?>" width="92px"height="80px;" /></td>
                            <td>
                            	<table  cellpadding="0" cellspacing="0" style="text-indent:10px">
                                    <tr>
                                        <td style=" font-weight:bold"><?php echo strtoupper($row['albumname'])?></td>
                                    </tr>
                                    <tr>
                                        <td style="color:#666"><?php echo $row['songsinger']?></td>
                                    </tr>
                                    <tr>
                                        <td style="color:#666">Votes:&nbsp;<?php echo $row['songpoints']?></td>
                                    </tr>
                                    <tr>
                                    	<td style="padding-left:5px"><div style="background:#<?php echo $color?>;width:<?php echo $row['songpoints']?>px; height:22px; font-size:11px; height:20px; border-radius:6px;"></div></td>
                                    </tr>
                                 </table>
                              </td>
                         </tr>
                   </table>
                </div><!--End information container-->
            </div><!--End Data container-->
            <?php
			}
			echo "<br/>";
			if($numpage>$limit){
				echo "<table align=center><tr><td align=left>";
					if($back>=0){
						echo "<a style='margin:10px 10px 10px 10px;' class='btn btn-dark' href=$page?start=$back>PREV</a>";
					}
						echo "</td><td align=center width=200>";
							$l = 1;
								for($i = 0; $i < $numpage;$i = $i + $limit){
									if($i<>$eu){
										echo "<a style='margin:10px 10px 10px 10px;'class='btn btn-dark' href=$page?start=$i><font>$l</font></a>";
									}else{
										echo "<font style='margin:10px 10px 10px 10px;' class='btn btn-dark' >$l</font>";
									}
										$l = $l + 1;
									}
						echo "</td><td align=right>";
							if($thisp<$numpage){
								echo "<a style='margin:10px 10px 10px 10px;'class='btn btn-dark' href=$page?start=$next>NEXT</a>";
							}
				echo "</td></tr></table>";
			}

			?>
   </div><!--End song column container-->
</div><!--End Container-->
</body>
</html>
