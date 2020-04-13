<?php $bgcolor = $entry->parent()->color(); ?>
<div class="entry-relations <?= luminosity($bgcolor) ?>">
<?php 
$relations = $entry->relation()->split();

$liste = [ 'ligne' => [] , 'lieu' => [] , 'point' => [] ];

if (count($relations) > 0) :
	foreach($relations as $related):
		$related = page($related);
		if($related) {
			$type = $related->intendedTemplate();
			$liste[$type][] = $related;
		}
	endforeach;
endif;

$attaches = $entry->attache();
$attaches = $attaches != '' ? $attaches->split() : false ;

if ($attaches) :
	foreach($attaches as $related):
		$related = page('lieux/' . $related);
		if($related) {
			$type = $related->intendedTemplate();
			$liste[$type][] = $related;
		}
	endforeach;
endif;


switch($entry->intendedTemplate()):
	case 'ligne':
		listRelations( 'lieux', $entry->parent()->lieux(), $liste['lieu']);
		listRelations( 'points', $entry->parent()->points(), $liste['point']);
	 	break;
	case 'point':
		listRelations( 'lieux', $entry->parent()->lieux(), $liste['lieu']);
		listRelations( 'lignes', $entry->parent()->lignes(), $liste['ligne']);
	 	break;
	case 'lieu':
		getLignes($entry);
		getPoints($entry);
	 	break;
endswitch;
		 
function getPoints($entry) {
	$liste = [];
	foreach(page('points')->children()->visible() as $point):
		if ( in_array( $entry->uid(), $point->attache()->split(',') ) )  {
			$liste[] = $point;
		}
	endforeach;
	listRelations( 'points', $entry->parent()->points(), $liste);
}
function getLignes($entry) {
	$liste = [];
	foreach(page('lignes')->children()->visible() as $ligne):
		if( in_array( $entry->uid(), $ligne->attache()->split(',') ) ) {
			$liste[] = $ligne;
		}
	endforeach;
	listRelations( 'lignes', $entry->parent()->lignes(), $liste);
}


function listRelations($type, $intitule, $relations) {
	if($relations):
	?>
	<h4 class="cursor-pointer"><?= $intitule ?></h4>
	<ul class="inception type-<?= $type ?>">
	<?php	
	$relations = pages($relations)->visible();
	$relations = $relations->sortBy('startdate', 'desc', 'title', 'asc');
	$icons = [ 'points' => false, 'lignes' => 'icon-address', 'lieux' => 'icon-home' ];
	foreach($relations as $relation):
		$color = $relation->color();
		?>
		<li class="itemRelated synth <?= $icons[$type] ?>" data-uri="<?= $relation->uri() ?>" data-color="<?= $relation->parent()->color(); ?>">
			<p>
				<span class="titre"><span class="date"></span><?= $relation->title(); ?></span>
				<span class="type"><?= eventDate($relation) ?></span>
			</p>
			<div class="entry-full text-<?= luminosity($color) ?>">
			</div>
		</li>
	<?php	endforeach;	?>
	</ul>
	<?php
	endif;
}
?>
</div>