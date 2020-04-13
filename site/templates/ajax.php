<?php
//if(kirby()->request()->ajax() ) {
if('vrai' == true) {

	header('Content-type: application/json');

	switch (get('function')) :
	
		case 'searchItems':
			// Search items
			$query = get('keyword');
			$results['Dans les mots-clés :'] = $site->index()->visible()->search($query, 'keywords');
			$results['Dans le titre :'] = $site->index()->visible()->search($query, 'title');
			$results['Dans le texte :'] = $site->index()->visible()->search($query, 'text');
			
			$content = [];
				
			foreach($results as $group => $items):
				$items = $items->filterBy('intendedtemplate', 'in', ['point', 'ligne', 'lieu'] );
				if($items->count()):
					$content[] = "<div class='searchgroup'><h4 class='title'>$group</h4>";
					$content[] = snippet('list-articles', array('items'=>$items), true);
					$content[] = "</div>";
				endif;
			endforeach;
	
			// Construct items
			$content = implode($content);
	
			// Return
			$json_array = array(
				'content'							=> $content
			);
			echo json_encode($json_array);
    	break;
		
    case 'loadItems':
			$type = page(get('type'));
	
			// Find items
			$items = $type->children()->visible();

			// Sort items
			switch ($type->uri()) :
				case 'home':
					// Manual sorting
				break;

				default:
					$items = $items->sortBy('date', 'desc', 'title', 'asc');
				break;

			endswitch;
			
			// Construct items
			$content = snippet('list-articles', array('items'=>$items), true);
	
			// Get uris list of selected elements
			$select = $items->pluck('uri');
	
			// Get uris list of relateds elements
			$show = $items->pluck('relation', ',', true);
			
			// Return
			$json_array = array(
				'normal'							=> $show,
				'bold'								=> $select,
				'content'							=> $content,
				'type'								=> (string)$type->uid(),
				'typeTitle'							=> (string)$type->title(),
				'url'								=> (string)$type->url()
			);
			echo json_encode($json_array);
    	break;
		
    case 'loadItem':
			$item = page(get('uri'));
			if($item) {
				$content = snippet('item', array('entry' => $item, 'content' => true), true);
				$json_array = array(
					'content'					=> $content,
					'type'						=> (string)$item->parent()->uid(),
					'typeTitle'					=> (string)$item->parent()->title()->escape(),
					'item'						=> (string)$item->uid(),
					'url'						=> (string)$item->url()
				);
				echo json_encode($json_array);
			}
			break;

	case 'loadSong':
		$entry = page(get('entry'));
		$song = $entry->file(get('song'));
		$start = get('start');
		$content = "<div class='entry-audio' data-start='{$start}'>";
		$content .= $song->audiojs();
		$content .= "<div class='btn-infos loadItems' data-url='{$entry->url()}' data-item='{$entry->uid()}' data-items='{$entry->parent()->uid()}'>i</div>";
		$content .= "<div class='songtitle'><div>{$entry->title()->html()}</div></div>";
		$content .= '</div>';
		$json_array = array('content'=> $content);
		echo json_encode($json_array);
		break;
	
	case 'getGeoJson':
		$lignes = snippet('geojson', array( 'items' => page('lignes')->children()->visible() ), true);
		$points = snippet('geojson', array( 'items' => page('points')->children()->visible() ), true);
		$lieux	= snippet('geojson', array( 'items' => page('lieux')->children()->visible() ), true);
		$json_array = array(
			'lignes'		=> $lignes,
			'points'		=> $points,
			'lieux'		=> $lieux
		);
		echo json_encode($json_array);
		break;
			
	
	endswitch;
	
} else {
	header::status('404');
}