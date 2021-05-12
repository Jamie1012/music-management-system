<?php
require_once('../Administrator/PHP/connect.php');
$id = $_REQUEST['id'];
$getAlbumImage = mysqli_query($connect,"SELECT * FROM tblalbum WHERE id = '$id'");
while($rowImage = mysqli_fetch_array($getAlbumImage)){
$albumimage = $rowImage['albumimage'];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- MATERIALIZE CDN  -->
<!-- Compiled and minified CSS -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->

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
<link rel="stylesheet" type="text/css" href="Javascript/skins/jplayer-blue-monday/jplayer.blue.monday.css" />
<script type="text/javascript"  src="Javascript/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="Javascript/js/jquery.jplayer.min.js"></script>
<script type="text/javascript">
//Jquery Player
var default_audio_poster_path = "images/default-audio-poster.png";
var poster_use = true;
var repeat = false;
var auto_play = false;

jQuery(document).ready(function() {
	var Playlist = function(instance, playlist, options) {
		var self = this;

		this.instance = instance; // String: To associate specific HTML with this playlist
		this.playlist = playlist; // Array of Objects: The playlist
		this.options = options; // Object: The jPlayer constructor options for this playlist

		this.current = 0;

		this.cssId = {
			jPlayer: "jquery_jplayer_",
			interface: "jp_interface_",
			playlist: "jp_playlist_"
		};
		this.cssSelector = {};

		$.each(this.cssId, function(entity, id) {
			self.cssSelector[entity] = "#" + id + self.instance;
		});

		if(!this.options.cssSelectorAncestor) {
			this.options.cssSelectorAncestor = this.cssSelector.interface;
		}

		$(this.cssSelector.jPlayer).jPlayer(this.options);

		$(this.cssSelector.interface + " .jp-previous").click(function() {
			if (self.playlist.length > 1)
				self.playlistPrev();
			$(this).blur();
			return false;
		});

		$(this.cssSelector.interface + " .jp-next").click(function() {
			if (self.playlist.length > 1)
				self.playlistNext(false);
			$(this).blur();
			return false;
		});

		if (this.playlist.length == 1) {
			$(this.cssSelector.interface + " .jp-previous").addClass("disabled").removeAttr('href');
			$(this.cssSelector.interface + " .jp-next").addClass("disabled").removeAttr('href');
		}
	};

	Playlist.prototype = {
		displayPlaylist: function() {
			var self = this;
			$(this.cssSelector.playlist + " ul").empty();
			for (i=0; i < this.playlist.length; i++) {
				var listItem = (i === this.playlist.length-1) ? "<li class='jp-playlist-last'>" : "<li>";

				if (poster_use) {
					if (this.playlist[i].poster != null)
						listItem += "<a href='#' id='" + this.cssId.playlist + this.instance + "item" + i +"' tabindex='1'>"+ "<img src='" +this.playlist[i].poster+"' />"+ this.playlist[i].name +"</a>";
					else
						listItem += "<a href='#' id='" + this.cssId.playlist + this.instance + "item" + i +"' tabindex='1'>"+ "<img src='" +default_audio_poster_path+"' />"+ this.playlist[i].name +"</a>";
				} else {
					listItem += "<a href='#' id='" + this.cssId.playlist + this.instance + "item" + i +"' tabindex='1'>"+ this.playlist[i].name +"</a>";
				}
				// Create links to free media
				if(this.playlist[i].free) {
					var first = true;
					listItem += "<div class='jp-free-media'>(";
					$.each(this.playlist[i], function(property,value) {
						if($.jPlayer.prototype.format[property]) { // Check property is a media format.
							if(first) {
								first = false;
							} else {
								listItem += " | ";
							}
							listItem += "<a id='" + self.cssId.playlist + self.instance + "item" + i + "_" + property + "' href='" + value + "' tabindex='1'>" + property + "</a>";
						}
					});
					listItem += ")</span>";
				}

				listItem += "</li>";

				// Associate playlist items with their media
				$(this.cssSelector.playlist + " ul").append(listItem);
				$(this.cssSelector.playlist + "item" + i).data("index", i).click(function() {
					var index = $(this).data("index");
					if(self.current !== index) {
						self.playlistChange(index);
					} else {
						$(self.cssSelector.jPlayer).jPlayer("play");
					}
					$(this).blur();
					return false;
				});

				// Disable free media links to force access via right click
				if(this.playlist[i].free) {
					$.each(this.playlist[i], function(property,value) {
						if($.jPlayer.prototype.format[property]) { // Check property is a media format.
							$(self.cssSelector.playlist + "item" + i + "_" + property).data("index", i).click(function() {
								var index = $(this).data("index");
								$(self.cssSelector.playlist + "item" + index).click();
								$(this).blur();
								return false;
							});
						}
					});
				}
			}
		},
		playlistInit: function(autoplay) {
			if(autoplay) {
				this.playlistChange(this.current);
			} else {
				this.playlistConfig(this.current);
			}
		},
		playlistConfig: function(index) {
			$(this.cssSelector.playlist + "item" + this.current).removeClass("jp-playlist-current").parent().removeClass("jp-playlist-current");
			$(this.cssSelector.playlist + "item" + index).addClass("jp-playlist-current").parent().addClass("jp-playlist-current");
			this.current = index;
			$(this.cssSelector.jPlayer).jPlayer("setMedia", this.playlist[this.current]);
		},
		playlistChange: function(index) {
			this.playlistConfig(index);
			$(this.cssSelector.jPlayer).jPlayer("play");
		},
		playlistNext: function(end) {
			var index = (this.current + 1 < this.playlist.length) ? this.current + 1 : 0;
			if (!end || repeat || this.playlist.length <= 1 || index != 0)
				this.playlistChange(index);
		},
		playlistPrev: function() {
			var index = (this.current - 1 >= 0) ? this.current - 1 : this.playlist.length - 1;
			this.playlistChange(index);
		}
	};

	var audioPlaylist = new Playlist("1", [
		<?php
		$id = $_REQUEST['id'];
		$getSong = mysqli_query($connect,"SELECT songfile FROM tblsongs WHERE songalbum = '$id' LIMIT 8");
		while($rowSong = mysqli_fetch_array($getSong)){
			$song = $rowSong['songfile']
		?>
		{
			name:"<?php echo $rowSong['songfile']?>",
			mp3:"../Administrator/PHP/songs/<?php echo $rowSong['songfile']?>",
			poster:"../Administrator/PHP/upload_images/album/<?php echo $albumimage ?>"
		},
		<?php }?>
	], {
		ready: function() {
			audioPlaylist.displayPlaylist();
			audioPlaylist.playlistInit(auto_play); // Parameter is a boolean for autoplay.
		},
		ended: function() {
			if (repeat || audioPlaylist.playlist.length > 1){
				audioPlaylist.playlistNext(true);
			}
		},
		play: function() {
			$(this).jPlayer("pauseOthers");

		},
		swfPath: "Javascript/js/",
		supplied: "m4a,mp3"
	});
});

</script>
<style type="text/css">
div.jp-audio,
div.jp-video {
  /* Edit the font-size to counteract inherited font sizing.
   * Eg. 1.25em = 1 / 0.8em
   */
  font-size:0.85em;
  white-space:nowrap;
  width: 420px;
}

div.jp-type-playlist div.jp-playlist li.jp-playlist-current {
	background: url(images/current-play-bullet.gif) no-repeat center left;
}

div.jp-playlist li img {
	width: 22px;
	height: 22px;
	border: none;
	margin-right: 10px;
	vertical-align: middle;
}

ul.jp-controls li a.disabled {
	cursor: default;
    opacity: .5;
    -moz-opacity: .5;
    filter: alpha(opacity=50);
}

</style>
</head>

<body>
	<nav style="background-color: #232931;"class="navbar navbar-expand-lg navbar-light menu">
	  <a class="navbar-brand " style="color:#f4f3f3;" href="#" >MUSIQUE</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
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
		</div>
  </form>
</nav>
<!--Start Container for the web content-->
<div class="container">
	<div class="playlist_wrapper">

        	<div style="margin-left:1%;margin-top:70px;"class="playlist_info">
            	<table style="padding:15px 15px;" cellspacing="0">
                <?php
				$sql = mysqli_query($connect,"SELECT
									   tblalbum.albumname,
									   tblalbum.albumimage,
									   tblalbum.albumsinger,
									   tblcategory.catname,
									   tblalbum.albumwriter
									   FROM tblcategory,tblalbum WHERE tblalbum.albumcat = tblcategory.id
									   AND tblalbum.id = '".$id."'") or die (mysqli_error());
				while($row = mysqli_fetch_array($sql)){
				?>
                	<tr>
                    	<td><?php echo "<img style='border-radius:15px;padding:15px 15px 15px 15px;' src=../Administrator/PHP/upload_images/album/$row[albumimage] height=350 width=300/>";?></td>
                        <td>
                        	<table>
                            	<tr>
                                	<td id=album>Album</td>
                                	<td><?php echo $row['albumname']?></td>
                                </tr>
                                <tr>
                                	<td id="a1">Singer</td>
                                	<td id="a2"><?php echo $row['albumsinger']?></td>
                                </tr>
                                <tr>
                                	<td id="a1">Writer</td>
                                	<td id="a2"><?php echo $row['albumwriter']?></td>
                                </tr>
                                <tr>
                                	<td>&nbsp;</td>
                                </tr>
                                 <tr>
                                	<td>&nbsp;</td>
                                </tr>

                            </table>
                        </td>
                    </tr>
                <?php
				}
				?>
                </table>
            </div><!--End plalist_info-->
		<div class="center">
            <div class="playlist">
            	<div id="jquery_jplayer_1" class="jp-jplayer"></div>
      				<div class="jp-audio">
        				<div style="width:700px;" class="jp-type-playlist">
          					<div  style="border:0px;border-radius:15px;"  id="jp_interface_1" class="jp-interface">
            					<ul class="jp-controls">
          							<li><a href="#" class="jp-play" tabindex="1">play</a></li>
          							<li><a href="#" class="jp-pause" tabindex="1">pause</a></li>
          							<li><a href="#" class="jp-stop" tabindex="1">stop</a></li>
          							<li><a href="#" class="jp-mute" tabindex="1">mute</a></li>
          							<li><a href="#" class="jp-unmute" tabindex="1">unmute</a></li>
          							<li><a href="#" class="jp-previous" tabindex="1">previous</a></li>
		  							<li><a href="#" class="jp-next" tabindex="1">next</a></li>
        						</ul>
        						<div style="border-radius:15px;" class="jp-progress">
          							<div class="jp-seek-bar">
            							<div class="jp-play-bar"></div>
          							</div>
        						</div>
                                <div class="jp-volume-bar">
                                  <div class="jp-volume-bar-value"></div>
                                </div>
                                <div class="jp-current-time"></div>
                                <div class="jp-duration"></div>
      						</div>
      						<div style="border:0px;border-radius:15px;"  id="jp_playlist_1" class="jp-playlist">
                            <ul>
                            </ul>
                        </div>
                   </div>
           </div>
            </div><!--End playlist-->
    </div><!--End playlist_wrapper-->
</div><!--End Container-->
</body>
</html>
