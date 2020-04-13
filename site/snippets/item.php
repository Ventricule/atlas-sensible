<?php
$startdate = $entry->startdate();
$enddate = $entry->enddate();
$color = $entry->parent()->color();
?>

<li id="<?php echo $entry->uid() ?>" class="item default text-<?= luminosity($color) ?>" data-uri="<?php echo $entry->uri() ?>" data-url="<?php echo $entry->url() ?>" data-type="<?= $entry->parent()->uid() ?>" style="background-color:<?= $color ?>">

	<?php snippet('part-titre', array('entry'=>$entry)) ?>
	
	<div class="entry-full">
		<?php if($content) snippet('item-content', array('entry'=>$entry)); ?>
	</div>

</li>
