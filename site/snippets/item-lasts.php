<?php
$color = $entry->parent()->color();
?>

<li id="<?php echo $entry->uid() ?>" class="item lasts cf open text-<?= luminosity($color) ?>" style="background-color:<?= $color ?>">

	<div class="entry-relations <?= luminosity($color) ?>">

		<?php 
		$lastItems = pages( 
			array( 
				page('points')->children()->visible()->sortBy('date', 'desc')->limit(10), 
				page('lignes')->children()->visible()->sortBy('date', 'desc')->limit(10), 
				page('lieux')->children()->visible()->sortBy('date', 'desc')->limit(10), 
			) 
		)->sortBy('date', 'desc')->limit(6);

		?>
		<h4><?= $entry->title() ?></h4>
		<ul class="inception">

		<?php
		foreach($lastItems as $item) :
			$icons = [ 'point' => 'icon-dot-single', 'ligne' => 'icon-address', 'lieu' => 'icon-home' ];
			?>
			<li class="itemRelated synth <?= $icons[$item->intendedTemplate()] ?>" data-uri="<?= $item->uri() ?>" data-color="<?= $item->parent()->color(); ?>">
				<p>
					<span class="titre"><span class="date"></span><?= $item->title(); ?></span>
					<span class="type"><?= eventDate($item) ?></span>
				</p>
				<div class="entry-full text-<?= luminosity($item->parent()->color()) ?>">
				</div>
			</li>
			<?php
		endforeach;
		?>
		</ul>
	</div>

</li>