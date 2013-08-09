<!DOCTYPE html>
<html lang="FR-fr">
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="font-awesome.min.css">

    <meta charset="UTF-8">
    <title>music.schh · the music I am listening to, right now.</title>
    <meta content='initial-scale=1.0' name='viewport'>
    <script type="text/javascript" src="./js/jquery-1.9.1.min.js"></script>

    <link rel="icon" type="image/png" href="/images/fav.png">
  </head>
  
  <body>

<section class="index home">


	<figure class="emb">
			<h1>
				<img src="./images/photosmall.jpg" id="cassiopeia"><span style="opacity:0.7;">♪</span>
				<span>music.</span><span style="opacity:0.5;">schh</span>
			</h1>




		<div>
			<audio id="stream" preload="none">
				<source type="audio/ogg" src="http://music.schoewilliam.fr:8000/mpd.ogg"></source>
				<p><i class="icon-info-sign"></i> It looks like your browser cannot play this stream. You can instead play <a href="http://music.schoewilliam.fr:8000/mpd.ogg">http://music.schoewilliam.fr:8000/mpd.ogg</a> in a media player (such as VLC or MPlayer).</p>
			</audio>

			<div style="color:#fff; max-width:300px; margin: 0 auto 20px; display: inline-block; max-width: 800px;">
			  <a id="playbut" class="but" href="#"><i class="icon-play"></i></a>
			  <div style="display:inline-block; vertical-align: middle; text-align:left; margin: 0 7px 15px;">
			  	<span id="current-track"><?php include('nowplaying.php'); ?></span>
			  </div>
			</div>

			<hr>

			<div style="color:rgb(255, 255, 255); max-width:300px; font-size:80%; margin: 0 auto;">
				<p><i class="icon-info-sign"></i> <em>This is streaming the music I'm listening to right now. Just sharing.</em></p>
				<p style="color:rgba(255, 255, 255, 0.5)">William Dorffer. <a href="http://schoewilliam.fr/2013/08/02/music-schoewilliam-fr-r%C3%A9sultat-dune-heure-d-ennui.html" style="color:#fff"> learn more</a>.</p>
			</div>	
		</div>
	</figure>


<!-- calls nowplaying.php which grabs the metadats of the nowplaying track -->
<script type="text/javascript">
$(document).ready(function() {
    setInterval(function(){
           $("#current-track").load("nowplaying.php");
    }, 10000);
});
</script>

<!-- sets up the PLAY/PAUSE button -->
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
