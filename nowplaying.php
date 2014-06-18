<?php
$json = file_get_contents("http://schoewilliam.fr:8000/status-json.xsl");
$parsed_json = json_decode($json);
$art = $parsed_json->{'icestats'}->{'source'}->{'artist'};
$title = $parsed_json->{'icestats'}->{'source'}->{'title'};

$string = file_get_contents("http://www.music.schoewilliam.fr:8000/status-json.xsl");
$json_a = json_decode($string, true);

foreach ($json_a as $person_name => $person_a) {
    echo $person_a['status'];
}

if ( $art == null ) {
	$current = 'Off air… Come back later :)';
	print ('&#9726; <em style="opacity:.7">' . $current . '</em>');
	print ('<style>.emb audio {display:none}</style>');
} else {
	$current = ($art . ' . ' . $title);
	print ('<small>now playing:</small><br>&#9654; ' . $current);
}

?>
