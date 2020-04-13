<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', 'put your license key here');

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/

c::set('debug',true);

c::set('panel.stylesheet', 'assets/css/panel.css');

c::set('cache.ignore', array('sitemap'));

c::set('panel.session.timeout', 3000);

/*
---------------------------------------
Routes
--------------------------------------- 
*/

c::set('routes', array(
		array(
			'pattern' => 'cleanRelationships',
			'action'	=> function() {
				return response::json(array(
					cleanRelationships()
				));
			}
		),
    array(
			'pattern' => 'api/(:all)',
			'action'  => function($page_uri) {
				header('Content-Type: application/json');

				$action = get('action');
				
				switch ($action) :
				
					case 'updateField':
						$field = get('field');
						$value = get('value');
						$page = $page_uri == 'site' ? site() : page($page_uri) ;
						try {
							$page -> update(array($field => $value));
							$response['success'] = 'The page has been updated';
						} catch (Exception $e) {
							$response['error'] = $e->getMessage();
						}
						return response::json($response);
						break;
				
					case 'getField':
						$field = get('field');
						$value = array( (string)page($page_uri)->$field() );
						return response::json($value);
						break;
					
					case 'listChildren':
						$elements = page($page_uri)->children();
						$json = array();
						foreach($elements as $element):
							$json[(string)$element->uri()] = (string)$element->title();
						endforeach;
						return response::json($json);
						break;
					
					case 'listRelations':
						switch ($page_uri):
							case 'points':
									$elements = page('lignes')->children();
									$elements = $elements->merge(page('lieux')->children());
								break;
							case 'lignes':
									$elements = page('points')->children();
									$elements = $elements->merge(page('lieux')->children());
								break;
							case 'lieux':
									$elements = page('lignes')->children();
									$elements = $elements->merge(page('points')->children());
								break;
							default:
								$element = array();
								break;
						endswitch;
						$json = array();
						foreach($elements as $element):
							$json[(string)$element->uri()] = (string)$element->title();
						endforeach;
						return response::json($json);
						break;
					
					case 'link':
						$option = get('option');
						$from = $page_uri;
						$from_page = page($from);
						$from_relations = $from_page->relation()->split();
						$to = get('to');
						$to_page = page($to);
						$to_relations = $to_page->relation()->split();
						if($option=='add') {
							if( !in_array($to, $from_relations) ) {
								$from_relations[] = $to ;
							}
							if( !in_array($from, $to_relations) ) {
								$to_relations[] = $from ;
							}
						} else if($option=='remove') {
							$from_relations = array_diff( $from_relations, array($to));
							$to_relations = array_diff( $to_relations, array($from));
						}
				
						$from_relations = implode($from_relations,',');
						$to_relations = implode($to_relations,',');
						$from_page->update(array('relation' => $from_relations));
						$to_page->update(array('relation' => $to_relations));
				
						$json = array(
							'option' => get('option'),
							'from' => $page_uri,
							'to' => $to,
							'from_links' => (string)$from_page->relation(),
							'to_links' => (string)$to_page->relation()
						);
				
						return response::json($json);
				
						break;
				
					default:
						return false;
						break;
				
				endswitch;
			} // end route function
    )
));

/*
---------------------------------------
Frontend Functions
--------------------------------------- 
*/

function eventDate($entry) {
	$startdate = str_replace( ['/', '-'], '.', $entry->startdate() ) ;
	$enddate = str_replace( ['/', '-'], '.', $entry->enddate() ) ;
	if ($startdate) :
		if ($enddate) :
			$result = $startdate . '-' . $enddate ;
		else :
			$result = $startdate ;
		endif;
	else :
		$result = false;
	endif;
	return $result;
}

function dateFromString($input, $format){
	$default = '01/01/1900';
	$formated = substr_replace($default, $input, - strlen($input));
	$date = DateTime::createFromFormat('d#m#Y', $formated);
	if ($date):
		return $date->format($format);
	else:
		return false;
	endif;
}

function luminosity($bg){
		$bg = str_replace('#','',$bg);
    $r = hexdec(substr($bg,0,2)) / 255;
    $g = hexdec(substr($bg,2,2)) / 255;
    $b = hexdec(substr($bg,4,2)) / 255;
		
		$gamma = 2.2;
    $luminosity = sqrt(
        0.2126 * pow($r, $gamma)  +
        0.7152 * pow($g, $gamma) 	+
        0.0722 * pow($b, $gamma) 
    );
    if($luminosity < .6){
        return 'light';
    }else{
        return 'dark';
    }
}
function mixcolors($color1, $color2)
{
	$color1 = str_replace('#','',$color1);
	$color2 = str_replace('#','',$color2);

  $c1_p1 = hexdec(substr($color1, 0, 2));
  $c1_p2 = hexdec(substr($color1, 2, 2));
  $c1_p3 = hexdec(substr($color1, 4, 2));

  $c2_p1 = hexdec(substr($color2, 0, 2));
  $c2_p2 = hexdec(substr($color2, 2, 2));
  $c2_p3 = hexdec(substr($color2, 4, 2));

  $m_p1 = sprintf('%02x', (round(($c1_p1 + $c2_p1)/2)));
  $m_p2 = sprintf('%02x', (round(($c1_p2 + $c2_p2)/2)));
  $m_p3 = sprintf('%02x', (round(($c1_p3 + $c2_p3)/2)));

	return    '#' . $m_p1 . $m_p2 . $m_p3;
}
function getLine($item, $coordinates) {
	if ( count($coordinates) >= 2 ) {
		$title = (string)$item->title();
		$color = (string)$item->parent()->color();
		$uid = (string)$item->uid();
		$categorie = (string)$item->parent()->uid();
		$uri = (string)$item->uri();
		
		$line = array(
			"type" => "Feature",
			"properties" => array(
					"title" => $title,
					"uid" => $uid,
					"uri" => $uri,
					"color" => $color,
					"categorie" => $categorie
			),
			"geometry" => array(
					"type" => "LineString",
					"coordinates" => $coordinates
			),
			"style" => array(
				"weight" => 1,
				"opacity" => 1,
				"color" => $color,
				"lineCap" => 'butt',
				"lineJoin" => 'round',
			)
		);
		return $line;
	}
	return false;
}

function getCoordinates($item) {
	if ($item->locationtoggle() == 'carte') {
		if( $coordinates = (string)$item->location() ){
			$coordinates = array_reverse( json_decode( $coordinates )[0] );
		} else {
			$coordinates = false;
		}
	} else if ($item->locationtoggle() == 'lieu') {
		if($lieu = (string)$item->lieu()){
			$lieu = page('lieux/' . $lieu);
			$coordinates = (string)$lieu->location();
			$coordinates = array_reverse( json_decode( $coordinates )[0] );
		} else {
			$coordinates = false;
		}
	} else if ($coordinates = (string)$item->location()) {
		$coordinates = array_reverse( json_decode( $coordinates )[0] );
	} else {
		$coordinates = false;
	}
	return $coordinates;
}

function getMarker($item) {
	$coordinates = getCoordinates($item);
	if ($coordinates) {
		$coordinates = $coordinates;
		$title = (string)$item->title();
		$color = (string)$item->parent()->color();
		$color2 = mixcolors($color, 'FFFFFF');
		$uid = (string)$item->uid();
		$uri = (string)$item->uri();
		$categorie = (string)$item->parent()->uid();
		$lines = $item->relation()->split();
		$date = eventDate($item);
		if($categorie == 'lieux') {
			$divIcon = array(
				"labelAnchor" => [0, 0],
				"className" => "div-icon lieu",
				//"html"=> "<div style='color: $color2;'><span class='icon-home'></span></div>"
				"html"=> "<div style='background-color: $color;color: $color2;'></span></div>"
			);
		} else {
			$divIcon = array(
				"labelAnchor" => [0, 0],
				"className" => "div-icon",
				"html"=> "<div style='background-color: $color;color: $color2;'></div>"
			);
		}
		
		$marker = array(
			"type" => "Feature",
			"geometry" => array(
					"type" => "Point",
					"coordinates" => $coordinates
			),
			"properties" => array(
					"title" => $title,
					"uid" => $uid,
					"uri" => $uri,
					"date" => $date,
					"categorie" => $categorie,
					"marker-color" => $color,
					"lines" => $lines,
					"divIcon" => $divIcon
			)
		);
		return $marker;
	}
	return false;
}


/*
---------------------------------------
Panel Hooks
--------------------------------------- 
*/

kirby()->hook('panel.page.delete', function($deleted_page) {
  $points = page('points')->children();
	$lignes = page('lignes')->children();
	$pages = $points->merge($lignes);
	foreach($pages as $page):
		$deletedUri = array( $deleted_page->uri() );
		$relations = $page->relation()->split(',');
		$relations = array_diff($relations, $deletedUri);
		$relations = implode($relations, ',');
		try {
			$page->update(array(
				'relation' => $relations
			));
		} catch(Exception $e) {
			return $e->getMessage();
		}
	endforeach;
});

function cleanRelationships() {
	$response = [];
	$points = page('points')->children();
	$lignes = page('lignes')->children();
	$pages = $points->merge($lignes);
	foreach($pages as $page):
		$deletedRelations = [];
		$relations = $page->relation()->split(',');
		foreach($relations as $relation):
			$relatedPage = page($relation);
			if(!$relatedPage):
				$deletedRelations[] = $relation;
				$response[] = $page->uri() . ' -> deleted : ' . $relation ;
			endif;
		endforeach;
		$relations = array_diff($relations, $deletedRelations);
		$relations = implode($relations, ',');
		try {
			$page->update(array(
				'relation' => $relations
			));
		} catch(Exception $e) {
			return $e->getMessage();
		}
	endforeach;
	return $response;
}