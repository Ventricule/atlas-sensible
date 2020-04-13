<?php
header('Content-type: application/json; charset=utf-8');

$json = array();
	
foreach($items as $item) {
	if ($item->parent()->uid() == "lignes") {
		if($item->chemintoggle() == 'oui') {
			$chemin = json_decode($item->chemin());
			$line = array();
			foreach ($chemin as $point) :
				$line[] = array_reverse($point);
			endforeach;
			$json[] = getLine($item, $line);
		} else {
			$points = $item->relation()->split();
			$line = array();
			foreach ($points as $point) {
				// create point
				$itemPoint = page($point);
				if($itemPoint) :
					if($itemPoint->intendedTemplate() == "point"):
						// add point on line
						if(getCoordinates($itemPoint)):
							$line[] = getCoordinates($itemPoint);
						endif;
					endif;
				endif;
			}
			$json[] = getLine($item, $line);
		}
	} else if ($item->parent()->uid() == "points") {
		$geo = getMarker($item);
		if ($geo) {
			$json[] = $geo;
		}
	} else if ($item->parent()->uid() == "lieux") {
		$geo = getMarker($item);
		if ($geo) {
			$json[] = $geo;
		}
	} else {
		$json = false;
	}
}

if($json) {
  $markers = array( 'type' => 'FeatureCollection', 'features' => array_values($json) );
} else {
  $markers = '';
}

echo json_encode($markers);

?>