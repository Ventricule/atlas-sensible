<ul class="rubrique cf">
<?php

foreach($items as $item):
	switch ($item->intendedTemplate()):
		case 'preambule':
			snippet('item-preambule', array('entry' => $item));
			break;
		case 'note':
			snippet('item-note', array('entry' => $item));
			break;
		case 'lasts':
			snippet('item-lasts', array('entry' => $item));
			break;
		default:
			snippet('item', array('entry' => $item, 'content' => false));
			break;
	endswitch;
endforeach;

?>
</ul>