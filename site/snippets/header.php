<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <link rel="shortcut icon" href="assets/images/favicon.png">

  <title><?php echo $site->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
  

	<?php echo css(array(
		// map
    	'//api.mapbox.com/mapbox.js/v3.0.1/mapbox.css',
    	//'assets/css/mapbox.css',
		'//cdnjs.cloudflare.com/ajax/libs/leaflet.markercluster/1.0.3/MarkerCluster.css',
		'//cdnjs.cloudflare.com/ajax/libs/leaflet.markercluster/1.0.3/MarkerCluster.Default.css',
		'//api.tiles.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.42.0/L.Control.Locate.css',
		// typo
		'assets/css/EntypoPlus.min.css',
		//'assets/css/entypo.css',
    	'//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css',
    	//'assets/css/font-awesome.min.css',
		// embed
		'assets/plugins/oembed/css/oembed.css',
		// audio
		'assets/plugins/audiojs/css/audio.css',
		// swiper
		//'//cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css',
		'assets/css/swiper.min.css',
		// custom
		'assets/css/main.css'
	)) ?>
	<?php echo js(array(
		// jquery
		'assets/js/jquery-1.11.2.min.js',
		'assets/js/jquery-ui.min.js',
		// map
		'//api.mapbox.com/mapbox.js/v3.0.1/mapbox.js',
		//'assets/js/mapbox.js',
		'//cdnjs.cloudflare.com/ajax/libs/leaflet.markercluster/1.0.3/leaflet.markercluster.js',
		'//rawgithub.com/domoritz/leaflet-locatecontrol/gh-pages/dist/L.Control.Locate.min.js',
		'assets/js/leaflet.geometryutil.js',
		'assets/js/turf.min.js',
		// embed
		'assets/plugins/oembed/js/oembed.js',
		// audio
		'assets/plugins/audiojs/js/audio.js',
		// swiper
		//'//cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js',
		'assets/js/swiper.jquery.min.js',
		// history
		'assets/js/jquery.history.js',
		// custom
		'assets/js/script.js',
	)) ?>

</head>
