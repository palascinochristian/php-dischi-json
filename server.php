<?php 
$json_text = file_get_contents('./albums.json');
$album = json_decode($json_text, true);
?>