<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MUSIQUE Music</title>
<!-- BOOTSTRAP -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- GOOGLE FONTS -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
<link rel="stylesheet"  type="text/css" href="CSS/index1.css" />
<script type="text/javascript" src="Javascript/jquery-1.6.2.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){
	$('.error').delay(1200).fadeOut('normal');
	$('.success').delay(1200).fadeOut('normal');
});
</script>
<!-- lottifies animation -->
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<script type="text/javascript">

function slideSwitch() {
    var $active = $('#slideshow DIV.active');

    if ( $active.length == 0 ) $active = $('#slideshow DIV:last');

    // use this to pull the divs in the order they appear in the markup

    var $next =  $active.next().length ? $active.next()
        : $('#slideshow DIV:first');

    // uncomment below to pull the divs randomly
    // var $sibs  = $active.siblings();
    // var rndNum = Math.floor(Math.random() * $sibs.length );
    // var $next  = $( $sibs[ rndNum ] );


    $active.addClass('last-active');

    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 1000, function() {
            $active.removeClass('active last-active');
        });

}

$(function() {
    setInterval( "slideSwitch()", 2000 );
});

</script>

<!--CSS Style-->

<style type="text/css">

.menu{
	background-color: #232931;
	color: #fff;
}
#slideshow {
    position:relative;
    height:272px;
}

#slideshow DIV {
    position:absolute;
    top:0;
    left:0;
    z-index:8;
    opacity:0.0;
    height: 272px;
    background-color: #FFF;
}

#slideshow DIV.active {
    z-index:10;
    opacity:1.0;
}

#slideshow DIV.last-active {
    z-index:9;
}

#slideshow DIV IMG {
	height: 332px;
	width: 612px;
    display: block;
    border: 0;
    margin-bottom: 10px;
}

.news_content ul{ padding:0px; margin:0px;}
.news_content ul li{
	padding-top:10px;
	padding-left:5px;
	list-style:none;
	font-size:11px;
}
.news_content ul li a{
	text-decoration:none;
	color:#7E7E7E;
	font-family:Georgia, "Times New Roman", Times, serif;
}
.news_content ul li a:hover{
	text-decoration:underline;
	color:#09F;
}
#table{
	color:#7E7E7E;
	font-family:Georgia, "Times New Roman", Times, serif; font-size:11px;}

#apDiv1 {
	position:absolute;
	width:630px;
	height:350px;
	z-index:1;
	border:1px  solid #FFF;
	left: 264px;
	top: 197px;
	border-width: 10px;
	border-radius: 10px;
	border-color: rgba(50, 115, 220, 0.3);
}

.vote_container{
	float:right;
	height:400px;
	width:222px;
	position:relative;
	margin-top:33px;
	-moz-box-shadow:0px 0px 0px #FFF;
	-webkit-box-shadow:0px 0px 0px #FFF;
	-khtml-box-shadow:0px 0px 0px #FFF;
	border:1px solid #CCC;
	background:#E9E9E9;
	left:237px;

}
#header_vote_title{
		font-family: 'Montserrat', sans-serif;
}
.btn{
 margin-left: 7px;
 margin-top: 20px;
 padding-left: 20px;
 padding-right: 20px;
}
.alert{
	padding-bottom: 10px;
	padding-top: 10px;
}


.home_content{
	height: 400px;
}

.slideshowV{
	background-color: #f4bc1c;
	height: 600px;
	margin-top: -33px;
}
.imgC{
	background-color: #fafcc2;
	height: 500px;
}
.container_wrapper{
	margin-top: 35px;
	width: 1024px;
}
.img_container{
	margin-top: 0;
}
#class_col0{
	float:left;
}


#testimonials{
  background-color: #ef8172;
  color: #fff;
}
.testimonial-text{
  font-size: 3rem;
  line-height: 1.5;
}
.testimonials-image{
  width: 10%;
  border-radius: 100%;
  margin: 20px;
}

.carousel {
    position: relative;
    width: 876px;
    height: 424px;
}
#img{
    width: 876px;
    height: 424px;

}
.carousel {
    position: absolute;
    width: 876px;
    height: 424px;
    margin-left: 35%;
    margin-top: 30px;
}
.menu_under{
	height: 45px;
}
.login{
	margin-top: -10px;
}
#fback{
	margin-top: 11px;
}
.adminbtn{
	margin-top: 10px;
}
.header_vote{
	margin-top: -8px;
  margin-left: 0px;
}
.review1{
	z-index: 2;
	position: absolute;
	top: 300px;
  left: 150px;
	font-family: 'Satisfy', cursive;
	color: #fff;
}

.card {
  position: relative;
  width: 280px;
  height: 470px;
  cursor: pointer;

  box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.5);
  background: rgba(255, 255, 255, 0.1);
  backface-visibility: hidden;
  padding: 30px 10px;
  text-align: center;
  opacity: 1;

  border-radius: 15px;
  border-top: 1px solid rgba(255, 255, 255, 0.5);
  border-left: 1px solid rgba(255, 255, 255, 0.5);

  backdrop-filter: blur(0px);
  -webkit-backdrop-filter: blur(0px);
  transform: scale(1);
  transition: all 1s ease-in-out;
}

.card:hover {
  transform: scale(1.1);
  backdrop-filter: blur(5px);
  -webkit-backdrop-filter: blur(5px);
  box-shadow: 20px 20px 50px rgba(0, 0, 0, 0.5);
}

.card .img {
  content: '';
  display: block;
  width: 120px;
  height: 120px;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.3);
  border: 1px solid rgba(0, 0, 0, 0.1);
  margin: 0 auto;
  margin-bottom: 1rem;
}

.card h2 {
  font-size: 1.8em;
  color: #fff;
  margin-bottom: 1rem;
}

.card p {
  line-height: 1.2;
  color: rgb(210, 210, 210);
}

.card a {
  position: relative;
  display: inline-block;
  padding: 8px 20px;
  margin-top: 1rem;
  background: #fff;
  color: #000;
  border-radius: 20px;
  text-decoration: none;
  font-weight: 500;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
  transition: all 0.4s ease-out;
}

.card a::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: #fff;
  z-index: -1;
  opacity: 1;
  border-radius: 20px;
  transition: all 0.3s ease-in;
}
.card a:hover::before {
  transform: scale(1.3, 1.85);
  opacity: 0;
}
.navbar-light .navbar-brand{
	color: #fff;
}
.hover1:hover{
	color: #21bf73;
}
.col1{
	margin-left: 110px;
}
.release{
	background-color: #232931;
	color: #fff;

}
.header{
	margin-top: 50px;
}

#news_header{
	  margin-left: 749px;
		font-size: 20px;
		font-weight: 900;
		font-family: Montserrat;
}
.header3{
	background-image: url("https://image.shutterstock.com/mosaic_250/850657/1724150191/stock-photo-old-newspaper-background-black-and-white-grunge-paper-texture-textured-pattern-blank-cover-1724150191.jpg");
}
.featured{
	background-color: #f4bc1c;
	margin-top: -49px;
}
.images{
	left:40px;
}
.imgg:hover{
	transform: scale(1.1);
}
.himg{
	border-radius: 15px;
}
.himg:hover{
	transform: scale(1.1);
}
.hh:hover{
	transform: scale(1.1);
}
</style>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light menu">
	  <a class="navbar-brand " href="#" >MUSIQUE</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item active">
	        <a class="nav-link" href="index.php" style="color: #f4f3f3;" >HOME <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="Frontend/Albums.php"style="color: #f4f3f3;">ALBUMS</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="Frontend/Licensing.php" style="color: #f4f3f3;">LICENSING</a>
	      </li>
				<li class="nav-item">
	        <a class="nav-link" href="Frontend/Songs.php" style="color: #f4f3f3;" >VOTE</a>
	      </li>
				<li class="nav-item">
	        <a class="nav-link" href="Frontend/AboutUs.php" style="color: #f4f3f3;">ABOUT US</a>
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
							&nbsp;&nbsp;&nbsp;<a class=" nav-item btn btn-sm btn-outline-secondary" href="Frontend/FeedbackForm.php" id="fback">Submit Feedback</a>

							<a class="nav-item btn btn-sm btn-outline-secondary adminbtn" href="loginpage.php">Admin Login</a>
		</div>
  </form>
</nav>




<!-- <div class="header_under"></div> -->
<section style="background-color:#ff4c68;"class="slideshowV ">
<div class="container_wrapper"><!--Start Container for the web content-->
    <div class="home_content"> <!--Start Web Content-->
        <div class="banner">
        	<!--Banner place-->
          <div id="apDiv1">

         	<div id="slideshow">

   				 <div class="active">
      			  <img src="https://2.bp.blogspot.com/-sRN6PAVtvyo/XGLmdDpkS5I/AAAAAAAACjM/xbd0GS_foyU1CSgRWAafSNe-YQ9fN_u0QCKgBGAs/w2560-h1440-c/hailee-steinfeld-brunette-girl-4K-187.jpg" alt="Slideshow Image 1" />

   				 </div>

  				  <div>
      				 <img src="https://i.pinimg.com/originals/6c/42/1d/6c421d67b594ab4f3f155be682978d34.jpg" alt="Slideshow Image 2" />

   				 </div>

   				 <div>
      				 <img src="https://wallpaperscave.com/images/thumbs/wp-preview/800x500/18/07-12/music-taylor-swift-66183.jpg" alt="Slideshow Image 3" />

   				 </div>

    			<div>
       				 <img src="https://wallpapercave.com/wp/wp1890544.jpg" alt="Slideshow Image 4" />

   				 </div>

			</div>



          </div>
        </div>
        <div class="vote_container card">
        	<form id="vote" name="vote" method="post"  action="vote.php">
            	<div class=" header_vote">
                	<div id="header_vote_title">Community Poll Survey</div>
                    <div id="message">Please Vote for you favorite waray song genre listed below.<a href="ShowVoteStat.php" id="link">See Statistic here!</a></div>
                    <br />
                    <?php
					require_once('Administrator/PHP/connect.php');
					$getVote = mysqli_query($connect,"SELECT * FROM tblvotes");
					while($row = mysqli_fetch_array($getVote)){
					?>
    				<input type="radio" name="id" value="<?php echo $row['vid'] ?>"/>&nbsp;<label><?php echo $row['vname']?></label><br />
                    <?php } ?>
					<input class="btn btn-outline-dark btn-sm " type="submit" value="Vote" id="vote" name="vote"/>
                    <?php
                    if(isset($_GET['error'])==1){
                    ?>
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <div class="alert alert-danger error">Wait after 24 hours</div>
                    <?php
					}
					if(isset($_GET['success'])==1){
					?>
                     &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                      <div class="alert alert-success success">Thank you</div>
                    <?php } ?>
                </div>
            </form>
        </div>
    </div> <!--End Web Content-->
		<lottie-player src="https://assets3.lottiefiles.com/private_files/lf30_LrduTx.json"  background="transparent"  speed="1"  style="z-index: 2;position: absolute;top: 385px;width: 300px; height: 300px;"  loop  autoplay></lottie-player>
	</div>
</section>


<div class="row release ">
<div class="col1 col-xs-6"><!--Start Bottom web content-->
   	 <div class="header">
    		<div id="header_title" style="font-family: 'Montserrat', sans-serif;font-weight: 100;margin-left: 134px;margin-bottom:20px;font-size:1.5rem;">NEW RELEASE</div>
            <?php
			require_once('Administrator/PHP/connect.php');
			$sql = mysqli_query($connect,"SELECT * FROM tblalbum ORDER BY id DESC LIMIT 3");
			while($rowAlbum = mysqli_fetch_array($sql)){
			?>
            <div  class="album_holder">
            	<div class="content_holder">
                	<div class="content" style="font-family: 'Montserrat', sans-serif; margin-left: 134px;margin-bottom: 20px; margin-bottom:30px;">
                    <?php echo "<img class='imgg' style='border-radius:15px;' src=Administrator/PHP/upload_images/album/$rowAlbum[albumimage] height=70 width=80  >"?>
                    <div class="left">
                    <?php
						echo '<label  id=title>&nbsp;<a style="color:white;"class="btn btn-outline-secondary btn-sm" href=Frontend/ViewSongs.php?id='.$rowAlbum['id'].' id=link>'.$rowAlbum['albumname'].'</a class></label><br/>';
						echo '<label id=title1>&nbsp;'.$rowAlbum['albumsinger'].'</label><br/>';
						// echo '<label id=title1>&nbsp;'.$rowAlbum['albumwriter'].'</label>';
					?>
                    </div><!--end left-->
                	</div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
   	 <div class="col2 col-xs-6">
    	<div class="header1 card" style="top: 80px;
    right: 0px;
    left: 533px;
		font-family: 'Montserrat', sans-serif; color:#fff;">
    		<div id="header_title">MUSIQUE TOP 6 SONGS &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a class="btn btn-sm btn-outline-secondary "href="Frontend/SongRank.php" id="link" style="margin-bottom: 2rem;
">See Rankings</a></div>
            <table cellpadding="0" cellspacing="0" height="230" id="table">
                <tr style="margin-bottom: 2rem;">
                    <th style="color: black;font-family: 'Montserrat', sans-serif;color:#fff;">Title</th><th style="
										font-family: 'Montserrat', sans-serif; color:#fff;">Statistics</th>
                </tr>
				<?php
				$getVotes = mysqli_query($connect,"SELECT songfile,songpoints FROM tblsongs WHERE songpoints >=1 ORDER BY songpoints DESC LIMIT 6") or die (mysql_error());
				while($row = mysqli_fetch_array($getVotes)){
				$r = rand(128,255);
				$g = rand(128,255);
				$b = rand(128,255);
				$color = dechex($r).dechex($g).dechex($b);
        		?>
                <tr>
                    <td align="left" width="228" style="
										font-family: 'Montserrat', sans-serif;color:#fff; text-indent:5px;"><?php echo preg_replace("/\\.[^.\\s]{3,4}$/", "", $row['songfile'])?></td>
                    <td style="
										font-family: 'Montserrat', sans-serif;color:#fff; border-bottom:0 ; text-indent:5px;" width="142"><div style="background:#<?php echo $color?>;width:<?php echo $row['songpoints']?>px; height:22px; font-size:14px; height:15px;"></div></td>
                </tr>
				<?php
                }
                ?>
            </table>
        </div>
			</div>
			</div>
     <div style="margin-top: -22px;margin-bottom: 100px;">
    		<div  style="font-family: Montserrat;font-weight:900; font-size:35px;margin-left: 220px;margin-top: 20px;padding-top: 30px;">NEWS</div>
                <div class="news_content" >
                    <ul style="column-count:2;">
                    	<li><a class="btn btn-outline-dark btn-lg " style="font-family: 'Montserrat', sans-serif; margin-left: 220px;" href="#">MUSIQUE music start community projects</a></li>
                        <li><a class="btn btn-outline-dark btn-lg "  style="font-family: 'Montserrat', sans-serif; margin-left: 220px;" href="#">Parokya ni Edgar is now in MUSIQUE</a></li>
                        <li><a class="btn btn-outline-dark btn-lg "  style="font-family: 'Montserrat', sans-serif;margin-left: 220px;" href="#">MUSIQUE financial statement release</a></li>
                        <li><a class="btn btn-outline-dark btn-lg "  style="font-family: 'Montserrat', sans-serif;margin-left: 220px;" href="#">MUSIQUE Music Company Annual Report</a></li>
                        <li><a class="btn btn-outline-dark btn-lg "   style="font-family: 'Montserrat', sans-serif;margin-left: 220px;"href="#">MUSIQUE International Expansion</a></li>
                        <li><a class="btn btn-outline-dark btn-lg "   style="font-family: 'Montserrat', sans-serif;margin-left: 220px;" href="#">MUSIQUE music opens its new office in Cebu</a></li>
                        <li><a class="btn btn-outline-dark btn-lg"  style="font-family: 'Montserrat', sans-serif;margin-left: 220px;" href="#">Callalily contract signing with MUSIQUE music</a></li>
                        <li><a class="btn btn-outline-dark btn-lg "  style="font-family: 'Montserrat', sans-serif;margin-left: 220px;" href="#">MUSIQUE is the best</a></li>
                        <li></li>
                    </ul>
									</div>
          </div>
<section class="featured">

    	<div class="col3">
    	<div class="header">
    		<div id="header_title" style="font-family: Montserrat;font-weight:900; font-size:35px;margin-left: 550px;padding-top: 30px;">FEATURED NEW SONGS</div>
            <?php
			$sql = mysqli_query($connect,"SELECT tblsongs.id,tblsongs.songfile,tblalbum.albumimage,tblalbum.albumname,tblsongs.songsinger FROM tblsongs,tblalbum WHERE tblsongs.songalbum = tblalbum.id AND songcat = 'OPM' ORDER BY id DESC LIMIT 7");
			while($rowAlbum = mysqli_fetch_array($sql)){
			?>
            <div class="album_holder">
            	<div class="content_holder">
                	<div  class="content container" >

										<div class="col" style="top: 90px;margin-left: 304px;">
                		<?php echo "<img class='himg'src=Administrator/PHP/upload_images/album/$rowAlbum[albumimage] height=100 width=100>"?>	</div>
										<div class="left col" style="margin-left:50%; font-family: Montserrat;font-weight:900; font-size:15px;"><!--Start music information container-->
                        <?php
						echo '<label class="hh" id=title>&nbsp'.$rowAlbum['albumname'].'</label><br/>';
						echo '<label class="hh" id=title1>&nbsp;'.$rowAlbum['songsinger'].'</label><br/>';
						?>
                        <a href="Administrator/PHP/songs/<?php echo $rowAlbum['songfile']?>" class="btn btn-outline-dark hh" id="link">Play</a>
                    </div><!--ENd music information container-->

                    </div>
                </div><!--End content holder-->
            </div><!--End album holder-->
            <?php } ?>

            </div><!--End header-->
    	</div><!--End col3-->
			<br><br>

		</section>

<div class="footer_wrapper">
    <div class="footer_menu conatiner">
			<div class="row">
   		<div class="col"><lottie-player src="https://assets2.lottiefiles.com/packages/lf20_q8ldfyrr.json"  background="transparent"  speed="1"  style="width: 150px; height: 150px;    padding-left: 550px;
    padding-top: 40px;"  loop  autoplay></lottie-player></div>
<div class="col">
<a  class="btn btn-outline-dark btn-lg"href="Frontend/Contacts.php" style=" margin-top: 90px;
    margin-left: 40px; ">contact us</a>
</div>
</div>
    </div>

		        <br /> <br /> <br />
		        <span style="color:#999; font-size:14px; margin-top:10px;margin-left: 700px;">&copy;2021 Muse Music, Inc.</span>
</div>
</body>
</html>
