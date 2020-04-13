<?php
$color = $entry->parent()->color();
?>

<li id="<?php echo $entry->uid() ?>" class="item preambule cf open text-<?= luminosity($color) ?>" style="background-color:<?= $color ?>">

	<div class="entry-content">
		<h4><?= $entry->title() ?></h4>
		<?= $entry->text()->kt() ?>
	</div>

</li>
