<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- <link rel="stylesheet" type="text/css" href="CSS/index.css"/> -->
<title>MUSIQUE Music | Song Vote</title>
<!-- MATERIALIZE CDN  -->
<!-- Compiled and minified CSS -->
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

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
 body{
 	background-color: #f4bc1c;
 }


</style>
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

<nav style="padding-top:0;padding-bottom:0;height: 45px;"class="menu_under navbar navbar-light bg-light">
  <form style="" class="form-inline">
		<div  style="color:#232931;font-family:Montserrat;margin-top:-10px;font-size:1rem; font-weight: 100;"class="login">
						<?php
			$today = date('F j, Y');
			echo '&nbsp;Today is '.$today;
			?>
							&nbsp;&nbsp;&nbsp;<a style="padding:5px 5px 5px 5px;height: 30px;font-size: 0.8rem;" class=" nav-item btn btn-sm btn-outline-secondary" href="../Frontend/FeedbackForm.php" id="fback">Submit Feedback</a>

							<a style="padding:5px 5px 5px 5px;height: 30px;font-size: 0.8rem;"class="nav-item btn btn-sm btn-outline-secondary adminbtn" href="../loginpage.php">Admin Login</a>
					<!-- <ul>
							<li><a class="nav-item btn btn-sm btn-outline-secondary" href="loginpage.php">Admin Login</a></li>
					</ul> -->
		</div>
  </form>
</nav>

<div class="container_wrapper"><!--Start Container for the web content-->
   <div class="message">
   </div><!--End Message Container-->
   <div class="songcolumn">
   		<div style="    margin-left: 292px;  margin-top: 30px;  margin-bottom: 30px;" class="header_title"><h2>Song List</h2></div>

   		<form action="votesong.php" method="POST">
			<div class="container">
			<?php
			/*error_reporting(E_ERROR);
			$page = 'Songs.php';
			$dataperpage = mysql_query("SELECT * FROM tblsongs");
			$numpage = mysql_num_rows($dataperpage);
			$start = $_GET['start'];
			$eu = $start - 0;
			$limit = 24;
			$thisp= $eu + $limit;
			$back = $eu - $limit;
			$next = $eu + $limit;
			if(strlen($start) > 0 && !is_numeric($start)){
				echo 'Data Error';
			exit();
			}*/
			require_once('../Administrator/PHP/connect.php');
            $songs = mysqli_query($connect,"SELECT tblalbum.albumname,tblalbum.albumimage,tblsongs.songsinger,tblsongs.id
                                 FROM tblalbum,tblsongs WHERE tblsongs.songalbum = tblalbum.id");
            $limit = 4;
            $count = 0;
            echo "<table width=900>";
                    while($rowSongs = mysqli_fetch_array($songs)){
                        $id     = $rowSongs['id'];
                        $image  = $rowSongs['albumimage'];
                        $name   = $rowSongs['albumname'];
                        $singer = $rowSongs['songsinger'];

                        if($count < $limit){
                            if($count == 0){
                                echo "<tr>"; //Start table row
                        }
                            echo "<td width=80><img style='border-radius:15px;'src=../Administrator/PHP/upload_images/album/$image width=90 height=80></td>";
							// echo $s='<input type="radio" value="'.$id.'" name="song">';
                            echo "<td>$name<br>$singer<br>";
							echo '<label style="color:black;font-size: 18px;">';
							echo '<input class= "with-gap" type="radio" name="song" value="'.$id.'">';
							echo '<span>Vote</span>';
							echo '</label>';
                            }else{
                                $count = 0;
                                echo "</tr><tr>"; //End table row
                                echo "<td width=80><img style='border-radius:15px;' src=../Administrator/PHP/upload_images/album/$image width=90 height=80></td>";
								// echo $s='<input class="with-gap" type="radio" value="'.$id.'" name="song">'
								echo "<td>$name<br>$singer<br>";
								echo '<label style="color:black;font-size: 18px;">';
								echo '<input class= "with-gap" type="radio" name="song" value="'.$id.'">';
								echo '<span >Vote</span>';
								echo '</label>';
                            }
                        $count++;
                    }
            echo "</tr></table>";
            ?>
					</div>
					<div class="center">
						<input type="submit" class="btn brand z-depth-0" style="background-color:#232931;"value="Vote Song" name="submit" id="sub"/>
					</div>
					<div class="container">
						<hr>
					</div>

     </form>
     <?php
			/*
			Paginate data
				if($numpage>$limit){
					echo "<table align=center><tr><td align=left>";
						if($back>=0){
							echo "<a href=$page?start=$back>PREV</a>";
						}
							echo "</td><td align=center width=200>";
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
			*/
			?>
   </div><!--End song column container-->
</div><!--End Container-->

</body>
</html>
