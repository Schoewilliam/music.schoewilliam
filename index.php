<!DOCTYPE html>
<html lang="FR-fr">
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="font-awesome.min.css">

    <meta charset="UTF-8">
    <title>music.schoewilliam · the music I am listening to, right now.</title>
    <meta content='initial-scale=1.0' name='viewport'>
    <script type="text/javascript" src="./js/jquery-1.9.1.min.js"></script>

    <link rel="icon" type="image/png" href="/images/fav.png">
  </head>
  
  <body>

<section class="index home">


	<figure class="emb">
			<h1>
				<div><img src="./images/photosmall.jpg" id="cassiopeia"><span style="opacity:0.7;">♪</span></div>
				<div><span style="display:block;">music.</span><span style="line-height:0.6;opacity:0.5;display:block;font-size:60%;">schoewilliam</span></div>
			</h1>




		<div>
			<audio id="stream" preload="none">
				<source type="audio/ogg" src="http://music.schoewilliam.fr:8000/mpd.ogg"></source>
				<p><i class="icon-info-sign"></i> It looks like your browser cannot play this stream. You can instead play <a href="http://music.schoewilliam.fr:8000/mpd.ogg">http://music.schoewilliam.fr:8000/mpd.ogg</a> in a media player (such as VLC or MPlayer).</p>
			</audio>

			<div style="color:#fff; max-width:300px; margin: 0 0 20px;">
			  <span id="current-track"><?php include('nowplaying.php'); ?></span>
			</div>

			<div id="controls" <?php if ( $status == 'off') : ?>style="opacity:0.25;margin-top:-60px;"<?php endif; ?>>
			  <a href="#" class="but vol" onclick="document.getElementById('stream').volume-=0.2"><i class="icon-volume-down"></i></a>
			  <a href="#" class="but" id="playbut"><i class="icon-play"></i></a>
			  <a href="#" class="but vol" onclick="document.getElementById('stream').volume+=0.2"><i class="icon-volume-up"></i></a>
			</div>


			<div style="color:rgb(255, 255, 255); max-width:300px; font-size:80%;">
				<p><i class="icon-info-sign"></i> <em>This is streaming the music I'm listening to right now. Just sharing.</em></p>
			</div>	
		</div>
	</figure>


<!-- calls nowplaying.php which grabs the metadats of the nowplaying track -->
<script type="text/javascript">
//$(document).ready(function() {
//	$("#current-track").load("nowplaying.php");
//});

$(document).ready(function() {
    setInterval(function(){
           $("#current-track").load("nowplaying.php");
    }, 10000);
});
</script>

<!-- sets up the player buttons -->
<script type="text/javascript">
var player = document.getElementById('stream'),
    ctrl = document.getElementById('playbut');

ctrl.onclick = function () {

    // Update the Button
    var pause = ctrl.innerHTML === '<i class="icon-pause"></i>';
    ctrl.innerHTML = pause ? '<i class="icon-play"></i>' : '<i class="icon-pause"></i>';

    // Update the Audio
    var method = pause ? 'pause' : 'play';
    player[method]();

    // Prevent Default Action
    return false;
};
</script>
</section>
