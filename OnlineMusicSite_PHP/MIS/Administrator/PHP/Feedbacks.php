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
<!-- <link rel="stylesheet" type="text/css" href="../css/AdminStyle.css" /> -->
<script type="text/javascript" src="../Javascript/jquery-1.7.1.min.js"></script>
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
	<nav style="padding-top:0;padding-bottom:0;height: 45px;"class="menu_under navbar navbar-light bg-light">
	<form class="form-inline">
		<div style="font-family: Montserrat;color: #232931;margin-top: -12px;"class="login">
						<?php
			$today = date('F j, Y');
			echo '&nbsp;Today is '.$today;
			?>
							<a style="padding:5px 5px 5px 5px;height: 30px;font-size: 0.8rem;" class="nav-item btn btn-sm btn-outline-secondary adminbtn" href="logout.php">Admin logout</a>
		</div>
	</form>
	</nav>
<!--Start Container for the web content-->
<div class="container_wrapper">
	<!--Sidebar-->
    <div style="margin-top:30px;margin-bottom:30px;"class="sidebar_menu">
    	<div>
    		<h4 style="font-family:Montserrat;font-weight:100;margin-left:30px;" class="header">MUSIQUE Menu</h4>
        </div>
        <a style="font-family:Montserrat;font-weight:100;margin-left:30px; font-size:1rem;"  class="btn btn-primary btn-lg" href="Feedbacks.php">&nbsp;Feed Backs</a></li>
        <a style="font-family:Montserrat;font-weight:100;margin-left:30px;font-size:1rem;"  class="btn btn-primary btn-lg" href="AddUser.php">&nbsp;Add User</a></li>
    </div>
    <!--End Sidebar-->
    <!--Start Web Content-->
    <div class="home_content">
    	<h2 style="margin-left:30px;font-family:Montserrat;font-weight:100;"class="header">Users Feedbacks</h2>
        <table style="margin-top: 20px;margin-left:30px;margin-right:30px;width: 90%;"class="table"width="550" border="0" cellpadding="1" cellspacing="0">
					 <thead class="thead-dark">
        <tr bgcolor="">
        	<th scope="col">Name</th>
					<th scope="col">Email Address</th>
					<th scope="col">Address</th>
					<th scope="col">Message</th>
					<th scope="col">Action</th>
        </tr>
			</thread>
        <?php
		require_once('connect.php');
		//pagination
		$line =0;
		error_reporting(E_ERROR);
		$line = 0;
		$page = 'Feedbacks.php';
		$dataperpage = mysqli_query($connect,"SELECT * FROM tblfeedback");
		$numpage = mysqli_num_rows($dataperpage);
		$start = $_GET['start'];
		$eu = $start - 0;
		$limit = 10;
		$thisp= $eu + $limit;
		$back = $eu - $limit;
		$next = $eu + $limit;
		if(strlen($start) > 0 && !is_numeric($start)){
			echo 'Data Error';
			exit();
		}
		//Get all data from the table
		$feedbacks = mysqli_query($connect,"SELECT * FROM tblfeedback LIMIT $eu,$limit");
		while($row = mysqli_fetch_array($feedbacks)){
			if($row['status']==1){
				$fontcolor = '#FF3C3C';
			}
			if($line == 1){
				$bgcolor = '#F5F5F5';
				$line=0;
			}else{
				$bgcolor = '#FFF';
				$line=1;
			}
		?>
        	<tr  style="color:<?php echo $fontcolor ?>; background:<?php echo $bgcolor?>" align="" height="30">

            	<td style="color:black;">
            		<?php echo $row['name']?>
            	</td>
                <td style="color:black;" >
            		<?php echo $row['email']?>
            	</td  >
                <td style="color:black;">
            		<?php echo $row['address']?>
            	</td >
                <td style="color:black;">
            		<?php echo substr($row['message'], 0,32)?>
            	</td >
                <td style="color:black;" >
                	<a href="AdminReply.php?id=<?php echo $row['f_id']?>" class="link">REPLY</a>&nbsp;
                    <!-- <a href="AdminReply.php?id=<?php echo $row['f_id']?>" class="link">DELETE</a> -->
                </td>
            </tr>
        <?php
		}


						if($numpage>$limit){
							echo "<table align=center><tr><td align=left>";
							if($back>=0){
								echo "<a href=$page?start=$back>PREV</a>";
							}
							echo "</td><td align=center width=50>";
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
     <!--End Web Content-->
</div>
<!--End Container-->
</body>
</html>
<?php
}
?>
