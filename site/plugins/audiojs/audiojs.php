<?php
$kirby->set('file::method', 'audiojs', function($file) {
	$player = "<audio src='{$file->url()}' preload='auto' />";
  return $player;
});