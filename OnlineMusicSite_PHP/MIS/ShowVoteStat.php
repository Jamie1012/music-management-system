<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vote Ratings</title>

<!-- MATERIALIZE CDN  -->
<!-- Compiled and minified CSS -->
	 <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->
	 <!-- BOOTSTRAP -->
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	 <!-- GOOGLE FONTS -->
	 <link rel="preconnect" href="https://fonts.gstatic.com">
	 <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	 <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">4
	 <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

<style>
/* .content{ width:315px; height:auto; background:#F5F5F5; border:1px solid #999;}
.header{ width:100%; height:30px; background:#494949; position:relative; color:#FFF; padding-top:5px;font-weight:bold; font-size:24px;}
#top{ padding-left:4px;} */

</style>
</head>

<body>
	<div class="container">
  <div class="row">
    <div class="col">
      <lottie-player src="https://assets4.lottiefiles.com/private_files/lf30_lyvbczgo.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>
    </div>
    <div style="right: 144px;" class="col">
			<div class="header" style="margin-left: 30%;margin-top:50px;"><h1>Statistics</h1></div>
						<table cellpadding="1" cellspacing="1" height="350" id="top" style="margin-left: 30%;margin-top: 70px;">
						<tr style="background-color:#ECECEC;">
								<th style="padding-right: 125px;" align="center" width="230">Name</th>
								<th align="center" width="230">Percentage</th>
						</tr>
						<?php
						require_once('Administrator/PHP/connect.php');
						$getVotes = mysqli_query($connect,"SELECT * FROM tblvotes") or die (mysqli_error());
						while($row = mysqli_fetch_array($getVotes)){
				$r = rand(128,255);
				$g = rand(128,255);
				$b = rand(128,255);
				$color = dechex($r).dechex($g).dechex($b);
						?>
								<tr>
										<td style="padding-right: 125px;" align="center"><?php echo $row['vname']?></td>
									<td><div class="progress"style="background:#393e46;color:#fff;width:<?php echo  pow($row['vpoints'],1.2)?>px; height:30px; font-size:14px;"></div><?php echo $row['vpoints']?>%</td>
								</tr>
						<?php
						}
						?>
						</table>
				</div>
    </div>
  </div>
</div>
</body>
</html>
